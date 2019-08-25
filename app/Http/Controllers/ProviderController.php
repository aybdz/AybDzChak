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

     public function showIndex($id)
    {
        $data = null;
        if (Auth::check()) {
            if ($id != 0) {
				$products           = Provider::findOrFail($id);
				$data["name"]       = $products->name;
				$data["telephonne"] = $products->telephonne;
				$data["adress"]     = $products->adress;
            }
            return view('AddProvider')->with('id',$id)->with('data',$data);
        }else{
            return view('login');
        }
    }

     public function store(Request $request)
    {
        if (!(Auth::check())) {
            return view('login');
        }
        $data       = null;
        $err        = true;
        $message    = "une erreur est survenue. veuillez réessayer ";

        if($request != null){
            if ($request->idp != 0) {
                $provider    = Provider::find($request->idp);
            }else{
                $provider           = new Provider;
            }

			$provider->name       = $request->name ;
			$provider->telephonne = $request->telephonne ;
			$provider->adress     = $request->adress ;
			$provider->idUser     = Auth::user()->id;
			$save                = $provider->save();
            if ($save) {
                if($request->file('photo')!= null){
                    $imageName    = $provider->id . '.' . $request->file('photo')->getClientOriginalExtension();
                    $request->file('photo')->move(base_path() . '/public/image/provider/', $imageName);
                    $provider->img = $imageName ;
                    $save         = $provider->save();
                    if ($save) {
                        $err     = false;
                        $message = "le produit a éte bien ajouter";
                    }
                }else{
                    $err     = false;
                    $message = "le produit a éte bien ajouter";
                }
            }
        }
        if ($err) {
           	$data["name"]       = $request->name;
			$data["telephonne"] = $request->telephonne;
			$data["adress"]     = $request->adress;
        }
        return view('AddProvider')->with('id',$request->idp)->with("err",$err)->with("message",$message)->with("data",$data);
    }



}
