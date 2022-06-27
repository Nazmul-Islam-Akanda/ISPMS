<?php

namespace App\Http\Controllers\Website;

use App\Models\Order;
use App\Models\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Facade\Ignition\Support\Packagist\Package;

class OrderController extends Controller
{

    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.pages.cart',compact('carts'));
    }

    public function removeFromCart($id)
    {
        $carts = session()->get('cart');
        // dd($carts);

        if (isset($carts[$id]))
        {
            unset($carts[$id]);
            session()->put('cart', $carts);
        }
        return redirect()->back()->with('msg','Item cleared from cart successfully.');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('msg','Cart cleared successfully.');

    }


    public function checkout(){

        $carts=session()->get('cart');
        // dd($carts);

        if($carts){

            $total=0;
            foreach ($carts as $data ){
               $total += ($data['package_price'] * $data['package_qty']);
            }

            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>$total,
            ]);
            // dd($order);

            foreach($carts as $cart){
                // dd($cart);
                OrderDetail::create([
                    'order_id'=>$order->id,
                    'package_id'=>$cart['package_id'],
                    'unit_price'=>$cart['package_price'],
                    'quantity'=>$cart['package_qty'],
                    'sub_total'=>$cart['package_qty']*$cart['package_price'],
                ]);
            }
            session()->forget('cart');
            return redirect()->back()->with('msg','Order placed successfully');
        }
        return redirect()->back()->with('msg','No data found in cart.');
    }


    public function addToCart($id){

        $package=Packages::find($id);
        if(!$package){
            return redirect()->back()->with('error','No Product Found.');
        }

        $cartExist=session()->get('cart');

// session()->forget('cart');

        if(!$cartExist){
            //Case 1: cart is empty.
            // action: add package to cart
            $cartData=[
                $id=>[
                    'package_id'=>$id,
                    'package_name'=>$package->name,
                    'package_price'=>$package->price,
                    'package_qty'=>1,
                ]
            ];
            session()->put('cart',$cartData);
            
            return redirect()->back()->with('msg','Product added to cart.');
        }

        //Case 2: Cart is not empty. But package dosen't exist into the cart
        //action: add different product with quantity 1

        // dd(isset($cartExist[$id]));

        if(!isset($cartExist[$id]))
        {
            $cartExist[$id]=[
                    'package_id'=>$id,
                    'package_name'=>$package->name,
                    'package_price'=>$package->price,
                    'package_qty'=>1,
            ];

            // dd($cartExist);
            session()->put('cart',$cartExist);
            return redirect()->back()->with('msg','Package added to cart.');
        }


        //Case 3: Product exist into cart
        //action: increase product quantity (quantity+1)
        $cartExist[$id]['package_qty']=$cartExist[$id]['package_qty']+1;
        // dd($cartExist);
        session()->put('cart',$cartExist);
        return redirect()->back()->with('msg','Package added to cart');
    }
}
