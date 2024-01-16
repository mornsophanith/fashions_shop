<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderTable;
use App\Models\OrderItemTbale;
use App\Models\CartTable;
use App\Models\ProductTable;

class CheckoutController extends Controller
{
    public function checkout() {
        $carts = session()->get('cart');
        $total = 0 ;
        if(session('cart')) {
            foreach($carts as $id => $cart) {
                $total += $cart['price'] * $cart['quantity'];
            }
            
        }
            
        return view('frontend.checkout', ['total'=>$total]);
    }

    public function placeOrder(Request $request) {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $company_name = $request->input('company_name');
        $country = $request->input('country');
        $address = $request->input('address');
        $post_code = $request->input('post_code');
        $city = $request->input('city');
        $province = $request->input('province');   
        $phone = $request->input('phone');   
        $email_address = $request->input('email_address');
        $dataInsert = OrderTable::insert([
            'first_name' => $first_name,
            'last_name' => $first_name,
            'company_name' => $company_name,
            'country' => $country,
            'address' => $address,
            'post_code' => $post_code,
            'city' => $city,
            'province' => $province,
            'phone' => $phone,
            'email_address' => $email_address,
        ]);
        return redirect()->route('checkout')->with('success', 'Success! Your order has been placed successfully!');
    }

    public function placeOrder2(Request $request) {

        if (session()->has('id')) {

            $order = new OrderTable();
            $order->first_name = $request->input('first_name');
            $order->lastprice_name = $request->input('last_name');
            $order->company_name = $request->input('company_name');
            $order->country = $request->input('country');
            $order->address = $request->input('address');
            $order->post_code = $request->input('post_code');
            $order->city = $request->input('city');
            $order->province = $request->input('province');   
            $order->phone = $request->input('phone');   
            $order->email_address = $request->input('email_address');
            if ($order->save()) {
                $carts = CartTable::where('cusomter_id', seession()->get('id'))->get();
                foreach($carts as $item) {
                    $products = ProductTable::find($item->product_id);
                    $order_item = new OrderItem();
                    $order_item->porduct_id = $item->product_id;
                    $order_item->customer_id = $item->customer_id;
                    $order_item->product_name = $item->product_name;
                    $order_item->quantity = $item->quantity;
                    $order_item->price = $item->price;
                    $order_item->save();
                    $item->delete();
                }
            }
            return redirect()->route('checkout')->with('success', 'Success! Your order has been placed successfully!');
        }
    }
}
