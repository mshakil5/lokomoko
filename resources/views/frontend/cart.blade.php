
@extends('frontend.layouts.master')
@section('content')
    
<br>
<br>
<section class="py-5 default mt-5  ">
    <div class="container">
        <div class="row">
            <h2 class="statliches  text-dark mb-3">Cart</h2>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="msgshow"></div>
        </div>
        <div class="row">
            @if(session('cart'))
                <div class="col-lg-8">
                    <table>
                        <thead>
                            <tr class="border-bottom">
                                <th class="py-3 text-start" colspan="2"> Product</th>
                                <th class="p-3"> Quantity</th>
                                <th class="p-3"> Subtotal </th>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach(session('cart') as $id => $details)
                                <tr data-id="{{ $id }}" data-price="{{ $details['pack_price'] }}" data-qty="{{ $details['quantity'] }}">
                                    <td class="p-3">
                                        <img src="{{ asset('images/product') }}/{{ $details['image'] }}" width="90">
                                    </td>
                                    <td>
                                        <a href="" class="link">
                                            {{ $details['name'] }} - {{ $details['pack_name'] }}
                                        </a>
                                        <span class="d-block text-normal mt-2">₹{{ $details['pack_price_per_unit'] }}</span>
                                    </td>
                                    <td class="p-3">
                                        <div class="counter p-1">
                                            <div class="count">-</div>
                                            <div class="count-val  ">{{ $details['quantity'] }}</div>
                                            <div class="count">+</div>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <span class="d-block text-normal mt-2">₹{{ $details['pack_price'] }}</span>
                                    </td>
                                    <td class="p-3"> 
                                        <iconify-icon class="text-dark hover-red fs-6 cart_remove" icon="tabler:trash-filled" width="1.2em" height="1.2em"></iconify-icon>
                                    </td>
                                </tr>
                                @endforeach


                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex ">
                                        <input type="text" class="form-control theme-input px-0 py-3 me-3"
                                            placeholder="Coupon code">
                                        <a href=""
                                            class="btn-primary w-100 text-center d-flex align-items-center justify-content-center">
                                            Apply coupon
                                        </a>
                                    </div>
                                </td>
                                <td colspan="3" class="text-end">
                                    <a href="#" class="btn-primary d-inline text-center py-3">
                                        update cart
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-lg-4">
                    <div class="border p-4">
                        <h6 class="statliches mb-3">Cart totals</h6>
                        <div class="d-flex justify-content-between dashed-border-bottom pb-3">
                            <span class="fw-bold"> Subtotal</span>
                            <span>₹@if (session('tamnt')) {{ session('tamnt') }} @endif</span>
                        </div>
                        <div class="d-flex justify-content-between noto-sans dashed-border-bottom pb-3 mb-3">
                            <div class=" "> Shipping </div>
                            <div class="text-end lh-lg ">
                                Free Shipping <br>
                                Shipping to <span class="fw-bold">Maharashtra</span> <br>
                                <a class="link" data-bs-toggle="collapse" href="#changeAddress" role="button" aria-expanded="false" aria-controls="changeAddress">Change address</a>

                                <div class="collapse" id="changeAddress">
                                    <p class="form-input ">
                                        <label for="country" class="fw-bold mb-4">Provience </label>
                                        <select name="country" id="country" class="form-control theme-input">
                                            <option value="India">India</option>
                                        </select>
                                    </p>
                                    <p class="form-input ">
                                        <select name="state" id="state" class="form-control theme-input">
                                            <option value="Maharashtra">Maharashtra</option>
                                        </select>
                                    </p>
                                    <p class="form-input ">
                                        <input type="text" id="city" name="city" placeholder="City" class="form-control theme-input" placeholder="House number &amp; Street name">
                                    </p>
                                    <p class="form-input  ">
                                        <input type="text" placeholder="Zip code" class="form-control theme-input" placeholder="House number &amp; Street name">
                                    </p>
                                    <button type="button" class="btn-primary w-100 d-inline text-center py-3 d-block">
                                        update
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="d-flex justify-content-between ">
                            <span class="fw-bold"> Total</span>
                            <span class="fw-bold">₹@if (session('tamnt')) {{ session('tamnt') }} @endif </span>
                        </p>
                        <a href="{{route('checkout')}}" class="btn-primary w-100 d-inline text-center py-3 d-block">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            @else
            <div class="alert alert-secondary d-flex align-items-center">
                <iconify-icon icon="bi:bell" class="me-2 txt-primary fs-4"></iconify-icon>
                <span class="txt-dark">"Your cart is currently empty."</span>
            </div>
            @endif
        </div>
    </div>
</section>




@endsection


@section('script')

<script>
    $(function()
        {
            // parent increase function start
            $(".add").click(function()
            {
                var currentVal = parseInt($("#qty").val());
                var unitprice = $("#pack_price_per_unit").val();
                
                var priceperunit = (currentVal+1)*unitprice;
                var amt = parseFloat(priceperunit);
                
                
                if (currentVal != NaN)
                {
                    $("#qty").val(currentVal + 1);
                    $("#qtyshow").html(currentVal + 1);
                    $("#priceShow").html(amt);
                    $("#pack_price").val(amt.toFixed(2));
                }
            });
            // parent increase function end

            // parent decrease function start
            $(".minus").click(function()
            {
                var currentVal = parseInt($("#qty").val());
                var unitprice = $("#pack_price_per_unit").val();

                if (currentVal < 2) {
                    var currentVal = 2;
                }
                
                var priceperunit = (currentVal-1)*unitprice;
                var amt = parseFloat(priceperunit);
                
                
                if (currentVal != NaN)
                {
                    $("#qty").val(currentVal - 1);
                    $("#qtyshow").html(currentVal - 1);
                    $("#priceShow").html(amt);
                    $("#pack_price").val(amt.toFixed(2));
                }
            });
            // parent decrease function end
        });
</script>

@endsection