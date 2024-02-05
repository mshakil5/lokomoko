<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::orderby('id', 'DESC')->limit(3)->get();
        return view('frontend.index');
        
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
}
