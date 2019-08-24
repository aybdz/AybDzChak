<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use Auth;

class ProviderController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if (!Auth::check()) {
            return view('login');
        }
        $providers = Provider::all();
        return view('providers')->with('providers',$providers);
    }

    public function addProvider(Request $request)
    {
		$err                  = true;
		$provider             = new Provider;
		$provider->name       = $request->name ;
		$provider->telephonne = $request->phone;
		$provider->adress     = $request->adress;
		$provider->idUser     = Auth::user()->id;
		$save                 = $provider->save();
        if ($save) {
            $err     = false;
        }
        return response()->json($err);
    }

    public function editProviderStatus(Request $request)
    {
		$err      = true;
		$provider = Provider::findOrFail($request->id);
        if($provider != null){
			$provider->status = $request->status;
			$save             = $provider->save();
	        if ($save) {
	            $err     = false;
	        }
        }
        return response()->json($err);
    }

    public function showProvider($id)
    {

        if (!Auth::check()) {
            return view('login');
        }
        $provider = Provider::findOrFail($id);
        return view('provider')->with('provider',$provider);
    }


}
