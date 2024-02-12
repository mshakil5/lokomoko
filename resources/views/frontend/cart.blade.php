
@extends('frontend.layouts.master')
@section('content')
    
<br>
<br>
<section class="py-5 default mt-5  ">
    <div class="container">
        <div class="row">
            <h2 class="statliches  text-dark mb-3">Cart</h2>
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
                        <tr>
                            <td class="p-3">
                                <img src="/images/products/9.png" width="90">
                            </td>
                            <td>
                                <a href="" class="link">
                                    Blue Lagoon Non-alcoholic Sparkling Cocktail Mixers - Pack of 4
                                </a>
                                <span class="d-block text-normal mt-2">₹432</span>
                            </td>
                            <td class="p-3">
                                <div class="counter p-1">
                                    <div class="count">-</div>
                                    <div class="count-val  ">12</div>
                                    <div class="count">+</div>
                                </div>
                            </td>
                            <td class="p-3">
                                <span class="d-block text-normal mt-2">₹432</span>
                            </td>
                            <td class="p-3"> <a href="">
                                    <iconify-icon class="text-dark hover-red fs-6" icon="tabler:trash-filled"
                                        width="1.2em" height="1.2em"></iconify-icon>
                                </a>
                            </td>
                        </tr>
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
                        <span>₹432</span>
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
                        <span class="fw-bold">₹432 </span>
                    </p>
                    <a href="#" class="btn-primary w-100 d-inline text-center py-3 d-block">
                        Proceed to checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection


@section('script')
    
@endsection