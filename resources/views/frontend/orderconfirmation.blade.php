@extends('frontend.layouts.master')
@section('content')
  
<br>
<br>
<br>
<br>
<style>

    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }

    
    table tr td {padding:10px;}


</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice</h2><h3 class="pull-right">Order #{{$data->invoiceno}}</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                    <strong>Billed To:</strong><br>
                        {{$data->name}}<br>
                        {{$data->house}} {{$data->street}} {{$data->city}} {{$data->postcode}}<br>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Contact Info:</strong><br>
                            Mail:   {{$data->email}}<br>
                            Mobile:   {{$data->phone}}<br>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        {{$data->payment_type}}<br>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        {{$data->date}}<br>
                    </address>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Additional Item</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>QTY</strong></td>
                                    <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderdetails as $item)
                                
                                    <tr>
                                        <td>{{$item->product_name}}</td>
                                        <td class="text-center">
                                        </td>
                                        <td class="text-center">{{$item->price_per_unit}}</td>
                                        <td class="text-center">{{$item->quantity}}</td>
                                        <td class="text-right">{{number_format($item->total_price, 2)}}</td>
                                    </tr> 

                                @endforeach

                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-right"><strong>Subtotal:</strong></td>
                                    <td class="thick-line text-right">{{number_format($data->total_amount, 2)}}</td>
                                </tr>
                                @if ($data->discount > 0)
                                    
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line text-right"><strong>Discount:</strong></td>
                                    <td class="thick-line text-right">{{number_format($data->discount, 2)}}</td>
                                </tr>
                                {{-- <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line text-right"><strong>Delivery Charge:</strong></td>
                                    <td class="thick-line text-right"></td>
                                </tr> --}}
                                @endif
                                
                                <tr>
                                    <td class="no-line text-left" colspan="3">{{$data->note}}</td>
                                    <td class="thick-line text-right"><strong>Total:</strong></td>
                                    <td class="thick-line text-right">{{number_format($data->net_amount, 2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
@section('script')
    
@endsection