<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getPackDetails(Request $request)
    {
        $packs = Pack::where('id', $request->id)->first();
        // dd($product);
        return response()->json(['status'=> 303,'id'=>$packs->id,'price'=>$packs->price,'title'=>$packs->title]);
        
    }
}
