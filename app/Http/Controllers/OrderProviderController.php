<?php

namespace App\Http\Controllers;

use App\OrderProvider;
use App\Provider;
use App\Product;
use Illuminate\Http\Request;
use Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

class OrderProviderController extends Controller
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
        if (Auth::check()) {
            $clients = Provider::all();
            return view('orderProvider')->with('clients',$clients);
        }else{
            return view('login');
        }
    }

    public function addCart(Request $request)
    {
        $message = "";
        $err     = true;
        $product = Product::where('bareCode',$request->id);
        if($product != null && $product->count() > 0){
            if ($product->count() == 1) {
                    $product = $product->first();
                    Cart::add($product->id,$product->name,1,$product->priceV, ['img' => $product->img,'bareCode' => $product->bareCode,'prixA' => $product->priceA]);
                        $err             = false;
                        $data['product'] = Cart::content();
            }else{ // with have more then one product with the same bare-code and with deffrane price
                $data['product'] = $product->get();
                $err             = 'more';
            }
        }
        $data['err']     = $err;
        $data['message'] = $message;
        
        return response()->json($data);
    }

    public function addCartPlus(Request $request)
    {
        $message = "";
        $err     = true;
        $product = Product::find($request->id);
        if($product != null){
            Cart::add($product->id,$product->name,1,$product->priceV, ['img' => $product->img,'bareCode' => $product->bareCode,'prixA' => $product->priceA]);
            $err             = false;
            $data['product'] = Cart::content();
        }
        $data['err']     = $err;
        $data['message'] = $message;
        $data['product'] = Cart::content();
        return response()->json($data);
    }

    public function addCartStock(Request $request)
    {
        $err     = true;
        $message = "";
        $cart    = Cart::get($request->id);
        $product = Product::find($cart->id);
        $qty     = $product->qty ;
        $cQty    = $cart->qty;
        if ($qty >= (int)$request->qty) {
            Cart::update($request->id, $request->qty);
            $err     = false;
        }else{
            $message = 'stock';
        }
        $data['err']     = $err;
        $data['message'] = $message;
        $data['qty']     = $qty;
        $data['cQty']    = $cQty;
        return response()->json($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderProvider  $orderProvider
     * @return \Illuminate\Http\Response
     */
    public function show(OrderProvider $orderProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderProvider  $orderProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderProvider $orderProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderProvider  $orderProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderProvider $orderProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderProvider  $orderProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderProvider $orderProvider)
    {
        //
    }
}
