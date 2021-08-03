<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddToCart(Product $product, Cart $cart, User $user)
    {
        auth()->user()->carts()->create(['item_id'=>$product->item_id]);
        
        $pro = Product::where('item_id', $product->item_id)->get();

        return redirect()->route('ShowHome'); 
    }


    public function ShowCart(Product $cart)
    {   $carts = array();
        $items = auth()->user()->carts()->get();

        foreach ($items as $item) {
           $get = Product::where('item_id', $item->item_id)->first();
           array_push($carts,$get);
        }

        return view('cart',[
            'carts'=>$carts
        ]);
    }


    public function DeleteCart(Cart $cart)
    {
        Cart::where('item_id', $cart->item_id)->where('user_id', auth()->user()->id)->delete();

        return redirect()->route('ShowCart');

    }

    public function IsInCart(Product $product)
    {
        
    }
}
