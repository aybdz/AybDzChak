<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Product;
use App\OrderDetail;
use App\Credit;
use App\Transaction;
use App\User;

use DB;
use Auth;
use Carbon\Carbon;

class StatisticsController extends Controller
{
	public $transactions;
	public $tranYesterday;
	public $tranMonth;
	public $tranWeek;


    public function __construct()
    {
        $this->middleware('auth');
    }



    public function ShowStatistics()
    {
        if (!Auth::check() || Auth::user()->type != 'su') {
           return view('welcome');
        }

		$users         = User::all();
		$capital       = $this->getCapital();
		// recete par tt les admin ( utilisateur )
		$this->getRecet($users);

        return view('statistics')->with('capital',$capital)->with('users',$users)->with('transactions',$this->transactions)->with('tranYesterday',$this->tranYesterday)->with('tranWeek',$this->tranWeek)->with('tranMonth',$this->tranMonth);
        
    }

    public function getRecetByUser($user)
    {
    	$this->getRecetOfDay($user,0);
    	$this->getRecetOfYesterday($user,0);
		$data['toDay']     = $this->transactions;
		$data['yesterday'] = $this->tranYesterday;
		return $data;
    }

    private function getCapital()
    {
		$products = Product::all();
		$somme    = 0;
    	foreach ($products as $product) {
    		$somme = $somme + $product->qty * $product->priceA;	
    	}
    	return $somme;
    }

    private function GetBenefit()
    {

    }

    private function getRecet($users)
    {
    	$i = 0;
		foreach ($users as $user) {
			$this->getRecetOfDay($user,$i);
			$this->getRecetOfYesterday($user,$i);
			$this->getRecetOfWeek($user,$i);
			$this->getRecetOfMonth($user,$i);
			$i++;
		}
    }

    private function getRecetOfDay($user , $i)
	{
		$amount = Transaction::where('idUser',$user->id)->whereDate('created_at',Carbon::today())->sum('amount');
		$data   = array('idUser' => $user->id, 'userName' => $user->userName,'name' => $user->name, 'telephone' => $user->telephone, 'amount' => $amount);
		$this->transactions[$i] = $data;
	}

	private function getRecetOfYesterday($user , $i)
	{
		$amount        = Transaction::where('idUser',$user->id)->whereDate('created_at',Carbon::yesterday())->sum('amount');
		$data          = array('idUser' => $user->id, 'userName' => $user->userName,'name' => $user->name, 'telephone' => $user->telephone, 'amount' => $amount);		
		$this->tranYesterday[$i] =  $data;
	}

	private function getRecetOfWeek($user , $i)
	{
    	$now      = Carbon::now();
		$from     = $now->startOfMonth()->toDateString();
		$to       = $now->endOfMonth()->toDateString();
		$amount   = Transaction::where('idUser',$user->id)->whereBetween('created_at', [$from, $to])->sum('amount');
		$data     = array('idUser' => $user->id, 'userName' => $user->userName,'name' => $user->name, 'telephone' => $user->telephone, 'amount' => $amount);
		$this->tranWeek[$i] = $data;
	}

	private function getRecetOfMonth($user , $i)
	{
    	$now       = Carbon::now();
		$from      = $now->startOfMonth()->toDateString();
		$to        = $now->endOfMonth()->toDateString();
		$amount    = Transaction::where('idUser',$user->id)->whereBetween('created_at', [$from, $to])->sum('amount');
		$data      = array('idUser' => $user->id, 'userName' => $user->userName,'name' => $user->name, 'telephone' => $user->telephone, 'amount' => $amount);
		$this->tranMonth[$i] =  $data;
	}

}
