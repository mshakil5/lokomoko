
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Invoice</title>
    <link href="{{ asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }

    </style>
</head>

<body>
    
    <section class="invoice">
        <div class="container-fluid p-0">
            <div class="invoice-body py-5 position-relative">
                <div style="max-width: 1170px; margin: 20px auto;">
                    
                    <section class="default d-flex align-items-center">
                        <div class="container">
                            <div class="row  justify-content-md-center">
                                <div class="col-lg-8">
                                    <div class="mx-auto mb-5 ">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="invoice-title">
                                                    <h2>Invoice</h2> <h3 class="pull-right">Order #{{$data->invoiceno}}</h3>
                                                    
                                                </div>
                                                <hr>
                    
                                                <div class="table-responsive">
                                                    <table class="table" style="width: 90%">
                                                        <tbody>
                            
                                                            <tr>
                                                                <td class="no-line text-left">Bill To:</td>
                                                                <td class="no-line text-left" style="width: 33%">{{$data->name}}<br>
                                                                    {{$data->house}} 
                                                                    {{$data->street}}
                                                                    {{$data->city}}
                                                                    {{$data->postcode}}
                                                                </td>
                                                                <td class="no-line text-left" style="width: 20%"></td>
                                                                <td class="no-line text-left">Payment Method:</td>
                                                                <td class="no-line text-left" style="width: 13%">{{$data->payment_type}}</td>
                                                            </tr>
                            
                                                            <tr>
                                                                <td class="no-line text-left">Contact Mail: <br> Mobile:</td>
                                                                <td class="no-line text-left" style="width: 33%">{{$data->email}}<br>{{$data->phone}}</td>
                                                                
                                                                <td class="no-line text-left"></td>
                                                                <td class="no-line text-left">Order Date:</td>
                                                                <td class="no-line text-left" style="width: 13%">{{$data->date}}</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
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
                                                            <table class="table table-condensed" style="width: 90%">
                                                                <thead>
                                                                    <tr>
                                                                        <td><strong>Item</strong></td>
                                                                        <td class="text-center"><strong>Price</strong></td>
                                                                        <td class="text-center"><strong>QTY</strong></td>
                                                                        <td class="text-right"><strong>Totals</strong></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($orderdetails as $item)
                                                                    
                                                                        <tr>
                                                                            <td>{{$item->product_name}}</td>
                                                                            <td class="text-center">{{$item->price_per_unit}}</td>
                                                                            <td class="text-center">{{$item->quantity}}</td>
                                                                            <td class="text-right">{{number_format($item->total_price, 2)}}</td>
                                                                        </tr> 
                                    
                                                                    @endforeach
                                    
                                                                    <tr>
                                                                        <td class="thick-line"></td>
                                                                        <td class="thick-line"></td>
                                                                        <td class="thick-line text-right"><strong>Subtotal:</strong></td>
                                                                        <td class="thick-line text-right">{{number_format($data->total_amount, 2)}}</td>
                                                                    </tr>
                                                                    @if ($data->discount > 0)
                                                                        
                                                                    <tr>
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
                                                                        <td class="no-line text-left" colspan="2">{{$data->order_note}}</td>
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
                                </div>
                    
                            </div>
                        </div>
                    </section>

                    
                </div>
            </div>
            
        </div>
    </section>



</body>
</html>

