

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
        <div class="col-md-12">
            <div class="invoice-title">
                <h3 class="pull-right">Order #{{$data->invoiceno}}</h3>
            </div>
            <hr>
            
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td class="no-line text-left">Bill To:</td>
                                    <td class="no-line text-left" style="width: 33%">{{$data->name}}<br>
                                        {{$data->house}} 
                                        {{$data->street}}
                                        {{$data->city}}
                                        {{$data->postcode}}<br></td>
                                    <td class="no-line text-right">Contact Mail: <br> Mobile:</td>
                                    <td class="no-line text-right" style="width: 33%">{{$data->email}}<br>{{$data->phone}}</td>
                                </tr>

                                <tr>
                                    <td class="no-line text-left">Payment Method:</td>
                                    <td class="no-line text-left" style="width: 33%">{{$data->payment_type}}</td>
                                    <td class="no-line text-right">Order Date:</td>
                                    <td class="no-line text-right" style="width: 33%">{{$data->date}}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
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
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            @php
                                $orders = \App\Models\OrderDetail::where('order_id', $data->id)->get();
                            @endphp
                            <tbody>
                                @foreach ($orders as $item)
                                
                                    <tr>
                                        <td>{{$item->product_name}}</td>
                                        <td class="text-center">{{number_format($item->price_per_unit, 2)}}</td>
                                        <td class="text-center">{{$item->quantity}}</td>
                                        <td class="text-right">{{number_format($item->total_price, 2)}}</td>
                                    </tr> 

                                @endforeach

                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-right"><strong>Subtotal:</strong></td>
                                    <td class="thick-line text-right">{{number_format($data->net_amount, 2)}}</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line text-right"><strong>Discount:</strong></td>
                                    <td class="thick-line text-right">{{number_format($data->discount, 2)}}</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line text-right"><strong>Delivery Charge:</strong></td>
                                    <td class="thick-line text-right"></td>
                                </tr>
                                @php
                                    $netamnt = $data->net_amount - $data->discount;
                                @endphp
                                <tr>
                                    <td class="no-line" colspan="2">{{$data->note}}</td>
                                    <td class="thick-line text-right"><strong>Total:</strong></td>
                                    <td class="thick-line text-right">{{number_format($netamnt, 2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>