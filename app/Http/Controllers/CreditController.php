<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Client;
use App\Transaction;
use App\Order;
use Illuminate\Http\Request;

use Auth;
use DB;

class CreditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return view('login');
        }
        if ($request->verse != "0" && is_numeric($request->verse)) {
            $err = false;
            DB::transaction(function () use($request ,$err){
                $credit           = new Credit;
                $credit->idOrder  = '0';
                $credit->idClient = $request->idUser;
                $credit->total    = (int)$request->verse;
                $save = $credit->save();
                if ($save) {
                    $tc  = new TransactionController();
                    $sTc = $tc->saveTransaction((int)$request->verse,"Versement",$credit->id ,"0",$request->idUser);
                    if ($sTc) {
                        $client = Client::findOrFail($request->idUser);
                        $client->credit = $client->credit-(int)$request->verse;
                        $sC = $client->save();
                        if (!$sC) {
                            $err = true;
                            DB::rollBack();
                        }
                    }else{
                        $err = true;
                        DB::rollBack();
                    }
                }else{
                    $err = true;
                    DB::rollBack();
                }
            });
        }
        $client       = Client::findOrFail($request->idUser);
        $orders       = Order::where('idClient',$client->id)->where('type','client')->orderBy('created_at', 'desc')->get();
        $transactions = Transaction::where('idClient',$client->id)->where('type','Commande')->orWhere('type','Versement')->orderBy('created_at', 'desc')->get();
        return view('client')->with('Client',$client)->with('orders',$orders)->with('transactions',$transactions)->with('err',$err);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show(Credit $credit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credit $credit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        //
    }
}
