<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Pack;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderby('id','DESC')->get();
        $brands = Brand::orderby('id','DESC')->get();
        $category = Category::orderby('id','DESC')->get();
        return view('admin.product.index', compact('data','brands','category'));
    }

    public function create()
    {
        $data = Product::orderby('id','DESC')->get();
        $brands = Brand::orderby('id','DESC')->get();
        $category = Category::orderby('id','DESC')->get();
        return view('admin.product.create', compact('data','brands','category'));
    }

    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|max:190',
            'category_id' => 'required',
            'inredient' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:8048',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'category_id.required' => 'The cateory field is required.'
        ];
        $this->validate($request, $rules, $customMessages);
        // dd($request->all());

        $data = new Product;
        // image
        if ($request->image) {
            $rand = mt_rand(100000, 999999);
            $imageName = time(). $rand .'.'.$request->image->extension();
            $request->image->move(public_path('images/product'), $imageName);
            $data->image= $imageName;
        }

        if ($request->big_image) {
            $rand2 = mt_rand(100000, 999999);
            $big_imageName = time(). $rand2 .'.'.$request->big_image->extension();
            $request->big_image->move(public_path('images/product'), $big_imageName);
            $data->big_image= $big_imageName;
        }

        // end
        $data->name = $request->name;
        $data->brand_id = $request->brand_id;
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->inredient = $request->inredient;
        $data->title = $request->title;
        $data->created_by = Auth::user()->id;
        if ($data->save()) {
            return redirect()->route('admin.product')->with('success', 'Product created successfully');
        }else{
            return redirect()->back()->with('error', 'Server Error..!!');
        }
    }

    public function edit($id)
    {
        $where = [
            'id'=>$id
        ];
        $data = Product::where($where)->get()->first();
        $brands = Brand::orderby('id','DESC')->get();
        $category = Category::orderby('id','DESC')->get();
        return view('admin.product.edit', compact('data','brands','category'));
    }

    public function update(Request $request)
    {

        
        $rules = [
            'name' => 'required|max:190',
            'category_id' => 'required',
            'inredient' => 'required',
            'description' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'category_id.required' => 'The cateory field is required.'
        ];
        $this->validate($request, $rules, $customMessages);


        $data = Product::find($request->codeid);
        // image
        if ($request->image) {
            $rand = mt_rand(100000, 999999);
            $imageName = time(). $rand .'.'.$request->image->extension();
            $request->image->move(public_path('images/product'), $imageName);
            $data->image= $imageName;
        }

        if ($request->big_image) {
            $rand2 = mt_rand(100000, 999999);
            $big_imageName = time(). $rand2 .'.'.$request->big_image->extension();
            $request->big_image->move(public_path('images/product'), $big_imageName);
            $data->big_image= $big_imageName;
        }

        // end
        $data->name = $request->name;
        $data->brand_id = $request->brand_id;
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->inredient = $request->inredient;
        $data->title = $request->title;
        $data->updated_by = Auth::user()->id;
        if ($data->save()) {
            return redirect()->route('admin.product')->with('success', 'Product updated successfully');
        }else{
            return redirect()->back()->with('error', 'Server Error..!!');
        }
    }

    public function delete($id)
    {

        if(Product::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Data has been deleted successfully']);
        }else{
            return response()->json(['success'=>false,'message'=>'Delete Failed']);
        }
    }


    public function productQty($id)
    {
        $product = Product::where('id',$id)->first();
        $data = Pack::orderby('id','DESC')->get();
        return view('admin.product.productqty', compact('data','product'));
    }

    public function productPackStore(Request $request)
    {
        if(empty($request->title)){
            $message ="<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill \"Title Name \" field..!</b></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }
        $data = new Pack();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->qty = $request->qty;
        $data->product_id = $request->product_id;
        $data->note = $request->note;
        $data->created_by = Auth::user()->id;
        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Create Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function productPackedit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = Pack::where($where)->get()->first();
        return response()->json($info);
    }

    public function productPackUpdate(Request $request)
    {
        if(empty($request->title)){
            $message ="<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill \"Title Name \" field..!</b></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }
        $data = Pack::find($request->codeid);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->qty = $request->qty;
        $data->product_id = $request->product_id;
        $data->note = $request->note;
        $data->updated_by = Auth::user()->id;
        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function productPackDelete($id)
    {

        if(Pack::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Data has been deleted successfully']);
        }else{
            return response()->json(['success'=>false,'message'=>'Delete Failed']);
        }
    }




}
