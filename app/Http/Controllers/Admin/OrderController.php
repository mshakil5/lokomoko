<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAllOrder()
    {
        $data = Order::orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getProcessingOrder()
    {
        $data = Order::where('status','1')->orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getDispatchedOrder()
    {
        $data = Order::where('status','3')->orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getReturnsOrder()
    {
        $data = Order::where('status','4')->orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getDeliveredOrder()
    {
        $data = Order::where('status','0')->orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getCancelOrder()
    {
        $data = Order::where('status','2')->orderby('id','DESC')->get();
        return view('admin.order.index', compact('data'));
    }

    public function getOrderDetails($id)
    {
        
        $data = Order::where('id', $id)->first();
        $orders = OrderDetail::where('order_id', $id)->orderby('id','DESC')->get();

        // dd($data);
        return view('admin.order.orderdetails', compact('data','orders'));
    }

    public function changeStatus(Request $request)
    {
        $user = Order::find($request->id);
        $user->status = $request->status;
        if($user->save()){
            if ($user->status == 1) {
                $stsval = "Processing";
            }elseif($user->status == 0){
                $stsval = "Complete";
            }elseif($user->status == 3){
                $stsval = "Dispatched";
            }elseif($user->status == 4){
                $stsval = "Returns";
            }else {
                $stsval = "Decline";
            }
            
            
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Status Change Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message,'stsval'=>$stsval,'id'=>$request->id]);
        }else{
            $message ="There was an error to change status!!.";
            return response()->json(['status'=> 303,'message'=>$message]);
        }

    }
}
