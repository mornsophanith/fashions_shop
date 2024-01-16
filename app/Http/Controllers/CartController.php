<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart');
        return view('frontend.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */

     public function updateCart(Request $request)
     {
         if($request->id && $request->quantity){
             $cart = session()->get('cart');
             $cart[$request->id]["quantity"] = $request->quantity;
             session()->put('cart', $cart);
             session()->flash('success', 'Cart updated successfully');
         }
         
    }
   
     /**
      * Write code on Method
      *
      * @return response()
      */
     public function removeCart(Request $request)
    {
         if($request->id) {
             $cart = session()->get('cart');
             if(isset($cart[$request->id])) {
                 unset($cart[$request->id]);
                 session()->put('cart', $cart);
             }
             session()->flash('success', 'Product removed successfully');
         }
    }
}
