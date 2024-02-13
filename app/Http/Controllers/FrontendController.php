<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::orderby('id', 'DESC')->limit(3)->get();
        return view('frontend.index', compact('products'));
        
    }

    public function about()
    {
        return view('frontend.about');
        
    }

    public function contact()
    {
        return view('frontend.contact');
        
    }

    public function shop()
    {
        return view('frontend.shop');
        
    }

    public function occasions()
    {
        return view('frontend.occasions');
        
    }

    public function productDetails($slug)
    {
        $product = Product::with('pack')->where('slug', $slug)->first();
        // dd($product);
        $data = Product::orderby('id', 'DESC')->get();
        return view('frontend.productdetails',compact('product','data'));
        
    }

    public function clearAllSessionData()
    {
        
        session()->flush();
        session()->regenerate();

        return redirect()->back();
    }
}
