<?php

namespace App\Http\Controllers;

use App\Models\ContactMail;
use App\Mail\OrderConfirmMail;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        
        dd($request->all());
        
    }

    public function orderStore(Request $request){

        // dd($request->all());
        
        session(['first_name' => $request->first_name]);
        session(['last_name' => $request->last_name]);
        session(['email' => $request->email]);
        session(['phone' => $request->phone]);
        session(['house' => $request->house]);
        session(['street' => $request->street]);
        session(['town' => $request->town]);
        session(['postcode' => $request->postcode]);

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'town' => 'required',
            'postcode' => 'required'
        ], [
            'first_name.required' => 'First Name field is required.',
            'last_name.required' => 'Last Name field is required.',
            'timeslot.required' => 'Delivery time field is required.',
            'parent_product_id.required' => 'Please, choose a product.'
        ]);


        // new code
        $order = new Order();
        $order->invoiceno = date('Ymd-his');
        $order->date = date('Y-m-d');
        $order->name = $request->first_name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->discount = "0";
        $order->order_note = $request->order_note;
        $order->payment_type = "Cash";
        if($order->save()){

            $net_amount = 0;
            foreach($request->input('product_id') as $key => $value)
            {
                $orderDtl = new OrderDetail();
                $orderDtl->order_id = $order->id;
                $orderDtl->invoiceno = $order->invoiceno;
                $orderDtl->date = $order->date;
                $orderDtl->product_id = $request->get('product_id')[$key];
                $orderDtl->product_name = $request->get('pname')[$key];
                $orderDtl->quantity = $request->get('quantity')[$key];
                $orderDtl->price_per_unit = $request->get('price_per_unit')[$key];
                $orderDtl->total_price = $request->get('pack_price')[$key];
                $orderDtl->save();
                    
                $net_amount = $net_amount + $orderDtl->total_price;
                
            }
            
        $order->total_amount = $net_amount;
        $order->net_amount = $net_amount - $request->discount_amount;
        if ($order->save()) {

            // customer information store
            $customer = new OrderAddress();
            $customer->invoiceno = $order->invoiceno;
            $customer->date = $order->date;
            $customer->order_id = $order->id;
            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->company_name = $request->company_name;
            $customer->country = $request->country;
            $customer->street = $request->street;
            $customer->suite = $request->suite;
            $customer->house = $request->house;
            $customer->postcode = $request->postcode;
            $customer->town = $request->town;
            $customer->city = $request->city;
            $customer->dif_first_name = $request->dif_first_name;
            $customer->dif_last_name = $request->dif_last_name;
            $customer->dif_company_name = $request->dif_company_name;
            $customer->dif_country = $request->dif_country;
            $customer->dif_street = $request->dif_street;
            $customer->dif_suite = $request->dif_suite;
            $customer->dif_house = $request->dif_house;
            $customer->dif_postcode = $request->dif_postcode;
            $customer->dif_town = $request->dif_town;
            $customer->dif_city = $request->dif_city;
            $customer->dif_phone = $request->dif_phone;
            $customer->dif_email = $request->dif_email;
            $customer->save();
            // customer information store




            $keysToClear = ['cart'];
            session()->forget($keysToClear);
            $request->session()->forget('tqty');
            $request->session()->forget('tamnt');


                $adminmail = ContactMail::where('id', 1)->first()->email;
                $contactmail = $request->email;
                $ccEmails = $adminmail;
                $msg = "Thank you for your order.";

                $orderDtls = OrderDetail::where('order_id', $order->id)->get();
                
                if (isset($msg)) {
                    $array['name'] = $request->name;
                    $array['email'] = $request->email;
                    $array['phone'] = $request->phone;
                    $array['house'] = $request->house;
                    $array['city'] = $request->city;
                    $array['street'] = $request->street;
                    $array['postcode'] = $request->postcode;
                    $array['note'] = $request->note;
                    $array['invoiceno'] = $order->invoiceno;
                    $array['payment_type'] = $order->payment_type;
                    $array['delivery_type'] = $order->delivery_type;
                    $array['orderDtls'] = $orderDtls;
                    $array['date'] = $order->date;
                    $array['discount'] = $order->discount;
                    $array['net_amount'] = $order->net_amount;
                    $array['subject'] = "Order Booking Confirmation";
                    $array['message'] = $msg;
                    $array['contactmail'] = $contactmail;
        
                    // Mail::to($contactmail)
                    //     ->cc($ccEmails)
                    //     ->send(new OrderConfirmMail($array));
        
                }

                return redirect()
                ->route('confirmorder', $order->id)
                ->with('success', 'Thank you for this order.');


        } else {
            return back()
                ->with('error', 'Server Error!!');
        }
        
            
            
        }


    }


    public function orderConfirmation($id)
    {
        
        $data = Order::where('id', $id)->first();
        $orderdetails = OrderDetail::where('order_id', $id)->get();
        return view('frontend.orderconfirmation', compact('data','orderdetails'));
    }
}
