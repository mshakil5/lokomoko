<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pack;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // dd($request->all());
        
        $product = Product::findOrFail($request->product_id);
        $pack = Pack::findOrFail($request->pack_id);
 
        $id = $pack->id;
        $cart = session()->get('cart', []);
        $tqty = session('tqty');
        $tamnt = session('tamnt');
        $newtqty = $tqty + $request->qty;
        $newtamnt = $tamnt + $request->pack_price;
        session(['tqty' => $newtqty]);
        session(['tamnt' => $newtamnt]);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "pid" => $product->id,
                "name" => $product->name,
                "image" => $product->image,
                "pack_price_per_unit" => $pack->price,
                "pack_price" => $request->pack_price,
                "pack_id" => $pack->id,
                "pack_name" => $pack->title,
                "quantity" => $request->qty
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
        
    }

    public function getCart()
    {
        
        return view('frontend.cart');
        
    }

    public function getCheckout()
    {
        
        return view('frontend.checkout');
        
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {

            $tqty = session('tqty');
            $tamnt = session('tamnt');
            $newtqty = $tqty - $request->qty;
            $newtamnt = $tamnt - $request->price;
            session(['tqty' => $newtqty]);
            session(['tamnt' => $newtamnt]);

            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            $message ="<div class='alert alert-success'> Product successfully removed! </div>";
            return response()->json(['status'=> 303,'message'=>$message,'tamnt'=>$request->price,'newtamnt'=>$newtamnt]);
            
        }
    }

    public function add_item_cart(Request $request)
    {
        if($request->id) {

            $tqty = session('tqty');
            $tamnt = session('tamnt');
            $newtqty = $tqty + 1;
            $newtamnt = $tamnt + $request->unitprice;
            session(['tqty' => $newtqty]);
            session(['tamnt' => $newtamnt]);

            if($request->id && $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                $cart[$request->id]["pack_price"] = $request->pack_price;
                session()->put('cart', $cart);
            }

            $message ="<div class='alert alert-success'> Quantity updated successfully! </div>";
            return response()->json(['status'=> 303,'message'=>$message,'tamnt'=>$request->price,'newtamnt'=>$newtamnt]);
            
        }
    }

    public function minus_item_cart(Request $request)
    {
        if($request->id) {

            $tqty = session('tqty');
            $tamnt = session('tamnt');
            $newtqty = $tqty - 1;
            $newtamnt = $tamnt - $request->unitprice;
            session(['tqty' => $newtqty]);
            session(['tamnt' => $newtamnt]);

            if($request->id && $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                $cart[$request->id]["pack_price"] = $request->pack_price;
                session()->put('cart', $cart);
            }

            $message ="<div class='alert alert-success'> Quantity updated successfully! </div>";
            return response()->json(['status'=> 303,'message'=>$message,'tamnt'=>$request->price,'newtamnt'=>$newtamnt]);
            
        }
    }


    public function shippingAddress(Request $request)
    {
        if($request->country) {

            session(['country' => $request->country]);
            session(['state' => $request->state]);
            session(['town' => $request->town]);
            session(['postcode' => $request->postcode]);
            
            $message ="<div class='alert alert-success'> Address updated! </div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            
        }
    }
}
