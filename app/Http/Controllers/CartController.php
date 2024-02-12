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
        $id = $product->id;
        $pack = Pack::findOrFail($request->pack_id);
 
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
}
