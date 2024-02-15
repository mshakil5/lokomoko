
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
                                    
                                    {{-- hidden items  --}}
                                    <input type="hidden" name="product_id" id="product_id{{ $id }}" value="{{ $details['pid'] }}">
                                    <input type="hidden" name="pack_id" id="pack_id{{ $id }}" value="{{ $id }}">
                                    <input type="hidden" name="pack_price_per_unit" id="pack_price_per_unit{{ $id }}" value="{{ $details['pack_price_per_unit'] }}">
                                    <input type="hidden" name="qty" id="qty{{ $id }}" value="{{ $details['quantity'] }}">
                                    <input type="hidden" name="pack_price" id="pack_price{{ $id }}" value="{{ $details['pack_price'] }}">
                                    {{-- hidden items  --}}

                                    <td class="p-3">
                                        <div class="counter p-1">
                                            <div class="count minus">-</div>
                                            <div class="count-val  " id="qtyshow{{ $id }}">{{ $details['quantity'] }}</div>
                                            <div class="count add">+</div>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <span class="d-block text-normal mt-2">₹<span id="priceShow{{ $id }}">{{ $details['pack_price'] }}</span> </span>
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
                            <span id="subtotalShow">₹@if (session('tamnt')) {{ session('tamnt') }} @endif</span>
                            <input type="hidden" id="subtotal" name="subtotal" value="@if(session('tamnt')){{ session('tamnt') }}@endif">
                        </div>
                        <div class="d-flex justify-content-between noto-sans dashed-border-bottom pb-3 mb-3">
                            <div class=" "> Shipping </div>
                            <div class="text-end lh-lg ">
                                Free Shipping <br>@if (session('country')) Shipping to <span class="fw-bold">{{ session('town') }} {{ session('state') }}-{{ session('postcode') }}, {{ session('country') }} </span>  @endif
                                 <br>
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
                                            <option value="">State</option>
                                            <option @if (session('state')) @if (session('state') == "Karnataka") selected @endif @endif value="Karnataka">Karnataka</option>
                                            <option @if (session('state')) @if (session('state') == "Punjab") selected @endif @endif value="Punjab">Punjab</option>
                                            <option @if (session('state')) @if (session('state') == "Delhi") selected @endif @endif value="Delhi">Delhi</option>
                                            <option @if (session('state')) @if (session('state') == "Madhaya") selected @endif @endif value="Madhaya">Madhaya</option>
                                            <option @if (session('state')) @if (session('state') == "Pradesh") selected @endif @endif value="Pradesh">Pradesh</option>
                                            <option @if (session('state')) @if (session('state') == "West Bengal") selected @endif @endif value="West Bengal">West Bengal</option>
                                            <option @if (session('state')) @if (session('state') == "Assam") selected @endif @endif value="Assam">Assam</option>
                                        </select>
                                    </p>
                                    <p class="form-input ">
                                        <input type="text" id="town" name="town" placeholder="City" class="form-control theme-input" placeholder="Town &amp; City name" value="@if (session('town')) {{ session('town') }} @endif">
                                    </p>
                                    <p class="form-input  ">
                                        <input type="text" id="postcode" placeholder="Zip code" class="form-control theme-input" placeholder="House number &amp; Street name" value="@if (session('postcode')) {{ session('postcode') }} @endif">
                                    </p>
                                    <button type="button" class="btn-primary w-100 d-inline text-center py-3 d-block" id="shippingAddress">
                                        update
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="d-flex justify-content-between ">
                            <span class="fw-bold"> Total</span>
                            <span class="fw-bold" id="totalShow">₹@if (session('tamnt')) {{ session('tamnt') }} @endif </span>
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
            $(".add").click(function(e)
            {
                e.preventDefault();
                var ele = $(this);
                var packid = ele.parents("tr").attr("data-id");
                // console.log(pid);
                var currentVal = parseInt($("#qty"+packid).val());
                var unitprice = $("#pack_price_per_unit"+packid).val();
                var subtotal = parseInt($("#subtotal").val());
                var subcal = subtotal + parseInt(unitprice);
                var priceperunit = (currentVal+1)*unitprice;
                var amt = parseFloat(priceperunit);
                console.log(subcal);
                
                if (currentVal != NaN)
                {
                    $("#qty"+packid).val(currentVal + 1);
                    $("#qtyshow"+packid).html(currentVal + 1);
                    $("#priceShow"+packid).html(amt);
                    $("#pack_price"+packid).val(amt.toFixed(2));
                    
                    $("#subtotalShow").html("₹"+subcal);
                    $("#totalShow").html("₹"+subcal);
                    $("#subtotal").val(subcal);
                }

                $.ajax({
                    url: '{{ route('add_item_cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id"), 
                        quantity: currentVal + 1,
                        unitprice: unitprice,
                        pack_price: amt
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });



            });
            // parent increase function end

            // parent decrease function start

            $(".minus").click(function(e)
            {
                e.preventDefault();
                var ele = $(this);
                var packid = ele.parents("tr").attr("data-id");
                // console.log(pid);
                var currentVal = parseInt($("#qty"+packid).val());
                var unitprice = $("#pack_price_per_unit"+packid).val();

                if (currentVal < 2) {
                    var currentVal = 2;
                }

                var priceperunit = (currentVal-1)*unitprice;
                var amt = parseFloat(priceperunit);
                if (currentVal > 1) {
                var subtotal = parseInt($("#subtotal").val());
                var subcal = subtotal - unitprice;
                }
                
                if (currentVal != NaN)
                {
                    $("#qty"+packid).val(currentVal - 1);
                    $("#qtyshow"+packid).html(currentVal - 1);
                    $("#priceShow"+packid).html(amt);
                    $("#pack_price"+packid).val(amt.toFixed(2));
                    $("#subtotalShow").html("₹"+subcal);
                    $("#totalShow").html("₹"+subcal);
                    $("#subtotal").val(subcal);
                }

                $.ajax({
                    url: '{{ route('minus_item_cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id"), 
                        quantity: currentVal - 1,
                        unitprice: unitprice,
                        pack_price: amt
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });
            });
            // parent decrease function end


            $("#shippingAddress").click(function()
            {
                var country = $("#country").val();
                var state = $("#state").val();
                var town = $("#town").val();
                var postcode = $("#postcode").val();
                
                // console.log(state);
                

                $.ajax({
                    url: '{{ route('shippingAddress') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        country: country,
                        state: state,
                        town: town,
                        postcode: postcode
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });




        });

        
        
</script>

@endsection