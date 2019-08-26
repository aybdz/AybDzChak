<?php

namespace App\Http\Controllers;

use App\Product;
use App\provider;
use App\Stock;
use App\productUpdate;
use Illuminate\Http\Request;

use Auth;
use File;

class ProductController extends Controller
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
            $products  = Product::orderBy('created_at', 'desc')->get();
            $providers = Provider::all();
            return view('products')->with('products',$products)->with('providers',$providers);
        }else{
            return view('login');
        }
    }

    public function showIndex($id)
    {
        $data = null;
        if (Auth::check()) {
            if ($id != 0) {
                $products          = Product::findOrFail($id);
                $data["codeBarre"] = $products->bareCode;
                $data["name"]      = $products->name;
                $data["priceA"]    = $products->priceA;
                $data["priceV"]    = $products->priceV;
                $data["qty"]       = $products->qty;
                $data["descp"]     = $products->descp;
            }
            return view('AddProduct')->with('id',$id)->with('data',$data);
        }else{
            return view('login');
        }
    }

    public function decreaQty($idProduct,$qty,$type = 'order')
    {
        $product      = Product::findOrFail($idProduct);
        $product->qty = $product->qty-$qty;
        $res          = $product->save();
        return $res;
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
        if (!(Auth::check())) {
            return view('login');
        }

        $oldProduct = "";
        $newProduct = "";
        $type       = "";
        $data       = null;
        $err        = true;
        $message    = "une erreur est survenue. veuillez réessayer ";

        if($request != null){
            if ($request->idp != 0) {
                $product    = Product::find($request->idp);
                $oldProduct = $product;
                $type       = "update";
            }else{
                $product           = new Product;
                $product->bareCode = $request->codeBarre ;
                $product->qty      = $request->qty ;
                $type              = "add";  
            }

            $product->name      = $request->name ;
            $product->priceA    = $request->priceA ;
            $product->priceV    = $request->priceV ;
            $product->descp     = $request->descp ;
            $product->idUser    = Auth::user()->id;
            $save               = $product->save();
            if ($save) {
                if($request->file('photo')!= null){
                    $imageName    = $product->id . '.' . $request->file('photo')->getClientOriginalExtension();
                    $request->file('photo')->move(base_path() . '/public/image/', $imageName);
                    $product->img = $imageName ;
                    $save         = $product->save();
                    if ($save) {
                        $err     = false;
                        $message = "le produit a éte bien ajouter";
                    }
                }else{
                    $err     = false;
                    $message = "le produit a éte bien ajouter";
                }
                $newProduct = $product;
                $idProduct  = $product->id;
                $this->updateStory($type,$oldProduct,$newProduct,$idProduct);
            }
        }
        if ($err) {
            $data["id"]        = $request->idp;
            $data["codeBarre"] = $request->codeBarre;
            $data["name"]      = $request->name;
            $data["priceA"]    = $request->priceA;
            $data["priceV"]    = $request->priceV;
            $data["qty"]       = $request->qty;
            $data["descp"]     = $request->descp;
        }
        return view('AddProduct')->with('id',$request->idp)->with("err",$err)->with("message",$message)->with("data",$data);
    }

    public function updateStory($type ,$oldProduct,$newProduct,$idProduct)
    {
        if($newProduct != "") {
            $newProduct = json_encode($newProduct->toArray());
        }
        if($oldProduct != "") {
            $oldProduct = json_encode($oldProduct->toArray());
        }
        $productUpdate             = new productUpdate;
        $productUpdate->idUser     = Auth::user()->id;
        $productUpdate->type       = $type;
        $productUpdate->idProduct  = $idProduct;
        $productUpdate->oldProduct = $oldProduct;
        $productUpdate->newProduct = $newProduct;
        $productUpdate->save();
    }

    public function removeProduct(Request $request)
    {
        $err = true;
        $product = Product::findOrFail($request->idp);
        if($product != null){
            if( $product->img != "noImg.png" ) {
                $image_path = 'image/'.$product->img;  // Value is not URL but directory file path
                File::delete($image_path);
            }
            $idProduct  = $product->id;
            $this->updateStory("remove" ,$product,"",$idProduct);
            $product->delete();
            $err = false;
        }
        return response()->json($err);
    }

    public function AddStock(Request $request)
    {
        $err      = true;
        $product  = Product::findOrFail($request->id);
        if($product != null){
            if ($request->idProvider != 0) {
                if ((int)$request->total - (int)$request->verse < 0) {
                    return response()->json($err);
                }else{
                    $provider = new ProviderController();
                    $p        = $provider->editCredit( $request->idProvider , (int)$request->total - (int)$request->verse );
                    if ($p) {
                       return response()->json($err);
                    }
                }            
            }
            
            if ($product->priceA == (int)$request->prixA && $product->priceV == (int)$request->prixV) {
                $product->qty = (int)$product->qty+(int)$request->qty;
                $save         = $product->save();
                if ($save) {
                    $err     = false;
                    $message = "le produit a éte bien mis a joure";
                    $this->stockStory($product->qty,(int)$product->qty+(int)$request->qty,$request->qty,$request->id,$request->idProvider);
                }
            }else{
                $newProduct           = new Product;
                $newProduct->bareCode = $product->bareCode;
                $newProduct->qty      = (int)$request->qty;
                $newProduct->name     = $product->name ;
                $newProduct->priceA   = $request->prixA ;
                $newProduct->priceV   = $request->prixV ;
                $newProduct->descp    = $product->descp ;
                $newProduct->idUser   = Auth::user()->id;
                $newProduct->img      = $product->img ;
                $save                 = $newProduct->save();
                if ($save) {
                    $err     = false;
                    $message = "le stock a été ajouté en tant que nouveau produit";
                }
                $this->stockStory(0,(int)$request->qty,$request->qty,$newProduct->id,$request->idProvider,"Ajouter tant que nouveau produit");
            }
            
            
        }
        return response()->json($err);
    }

    public function stockStory($oldStock,$newStock,$stk,$idProduct,$IdProvider,$type="Ajouter au Stock")
    {
        $stock             = new Stock();
        $stock->type       = $type ;
        $stock->idUser     = Auth::user()->id ;
        $stock->idProduct  = $idProduct ;
        $stock->oldQty     = $oldStock ;
        $stock->newQty     = $newStock ;
        $stock->Qty        = $stk;
        $stock->idProvider = $IdProvider;
        $stock->save();
    }


    public function showDetails($id)
    {
        if (!(Auth::check())) {
            return view('login');
        }
        
        $product        = Product::find($id);
        $stocks         = Stock::where('idProduct',$id)->get();
        $productUpdates = productUpdate::where('idProduct',$id)->get();
        return view('historique')->with('product',$product)->with('stocks',$stocks)->with('productUpdates',$productUpdates);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
