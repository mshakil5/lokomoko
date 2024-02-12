
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

                        @if(session('cart'))
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
                        @endif


                        
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
                    <div class=" "> shipping </div>
                    <div class="text-end lh-lg ">
                        Free Shipping <br>
                        Shipping to <span class="fw-bold">Maharashtra</span> <br>
                        <a href="#" class="link">change address</a>

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
        </div>
    </div>
</section>




@endsection


@section('script')
<script type="text/javascript">
   
    $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
        
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"),
                    price: ele.parents("tr").attr("data-price"),
                    qty: ele.parents("tr").attr("data-qty")
                },
                success: function (response) {
                    console.log(response);
                      $(".msgshow").html(response.message);
                      window.setTimeout(function(){location.reload()},2000)
                }
            });
        }
    });
   
</script>

<script>
    function removeRow(event) {
        event.target.parentElement.parentElement.remove();
        net_total();
        var data = $("#cardinner").html();
        var clearsessionurl = "{{URL::to('/clear-session-data')}}";
        $.ajax({
            url: clearsessionurl,
            method: "POST",
            data: {data},

            success: function (d) {
                window.setTimeout(function(){location.reload()},200)
                net_total();
                console.log(d);
            },
            error: function (d) {
                console.log(d);
            }
        });

    }
</script>
@endsection