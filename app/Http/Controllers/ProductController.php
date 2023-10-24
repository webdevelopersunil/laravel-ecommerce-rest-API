<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
