<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'status',
        'name',
        'mobile',
        'email',
        'address',
        'city',
        'pincode'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id'
    ];


    public function addToCart($user, $product_id){
        
        $foundIfAny = self::where(['user_id'=>$user->id, 'status'=>1])->first();

        if($foundIfAny){
            
            (new CartItem)->addCartItem($foundIfAny->id, $product_id);
        }else{

            $cart_item = self::create([
                'user_id' => $user->id,
                'status' => 1,
                'name'   => $user->name,
                'email'  => $user->email,
            ]);

            (new CartItem)->addCartItem($cart_item->id, $product_id);
        }
        return true;
    }
}
