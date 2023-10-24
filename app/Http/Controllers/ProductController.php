<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index(Request $request){

        $products = Product::all();
        return response()->json($products);
    }

    public function getDetail(Request $request){
        
        $product = Product::where('id',$request->id)->first();
        return response()->json($product);
    }

    public function addToCart(Request $request){
        
        $status = (new Cart)->addToCart(Auth::user(), $request->product_id);
        return response()->json([
            'message' => "Success :: Added to the cart"
        ]);
    }
}
