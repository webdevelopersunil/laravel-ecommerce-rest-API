<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use DB;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'cart_id',
        'sku',
        'price',
        'discount',
        'quantity',
        'active'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'cart_id',
        'product_id'
    ];


    public function addCartItem($cart_id, $product_id){
        $product = Product::where('id',$product_id)->first();

        $cartItem = self::where([ 'cart_id'=> $cart_id, "product_id"=> $product_id, "active" => 1])->first();

        if($cartItem){

            // CartItem::where('id', $cartItem->id)->update('quantity', $cartItem + 1);
            
        }else{

            CartItem::create([
                'product_id' => $product_id,
                'cart_id' => $cart_id,
                'sku' => $product->sku,
                'price'=> $product->price,
                'discount'=> $product->discount,
                'quantity'=> 1,
                'active' => 1
            ]);
        }

        return true;
    }

}



