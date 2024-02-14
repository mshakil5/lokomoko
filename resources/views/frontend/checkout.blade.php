
@extends('frontend.layouts.master')
@section('content')
<br>
<br>
<br>
<br>
<section class="py-5 default mt-5">
    <div class="container">
        <div class="row">
            <h2 class="statliches  text-dark mb-3">Checkout</h2>
        </div>
        <form action="{{route('order.store')}}" method="POST">
            @csrf
            <div class="row">
            
                <div class="col-lg-6">
                    <h5 class="statliches  text-dark mb-5">Billing Details</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="form-input mb-5">
                                <label for="first_name" class="fw-bold mb-4">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input" id="first_name" name="first_name">
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="form-input mb-5">
                                <label for="last_name" class="fw-bold mb-4">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input" id="last_name" name="last_name">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="company_name" class="fw-bold mb-4">Company name (optional) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input" id="company_name" name="company_name">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="country" class="fw-bold mb-4">Country / Region </label>
                                <select name="country" id="country" class="form-control theme-input">
                                    <option value="India">India</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="street" class="fw-bold mb-4">Street address </label>
                                <input type="text" class="form-control theme-input"
                                    placeholder="House number & Street name"  id="street" name="street">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <input type="text" class="form-control theme-input"
                                    placeholder="Apartment,suite,unit, etc , optional" id="suite" name="suite">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="" class="fw-bold mb-4">
                                    Postcode / ZIP <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control theme-input"
                                    placeholder="Apartment,suite,unit, etc , optional" id="postcode" name="postcode">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="" class="fw-bold mb-4">
                                    Town / City<span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control theme-input"
                                    placeholder="Apartment,suite,unit, etc , optional" id="town" name="town">
                            </p>
                        </div>
                        
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="phone" class="fw-bold mb-4">Phone <span class="text-center">*</span> </label>
                                <input type="text" class="form-control theme-input"
                                    placeholder="Apartment,suite,unit, etc , optional" id="phone" name="phone">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="email" class="fw-bold mb-4">Email <span class="text-center">*</span> </label>
                                <input type="text" class="form-control theme-input"
                                    placeholder="Apartment,suite,unit, etc , optional" id="email" name="email">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input">
    
                                <label data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample" for="ship"
                                    class="fw-bold statliches" id="otherShip">
                                    <input type="checkbox" id="ship" name="diff_address" class="form-check-input me-2">
                                    Ship to a different address?
                                </label>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="form-input mb-5">
                                            <label for="dif_first_name" class="fw-bold mb-4">First name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input" id="dif_first_name" name="dif_first_name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="form-input mb-5">
                                            <label for="dif_last_name" class="fw-bold mb-4">Last name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input" id="dif_last_name" name="dif_last_name">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_company_name" class="fw-bold mb-4">Company name (optional) <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input" id="dif_company_name" name="dif_company_name">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_country" class="fw-bold mb-4">Country / Region </label>
    
                                            <select name="dif_country" id="dif_country" class="form-control theme-input">
                                                <option value="India">India</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_street" class="fw-bold mb-4">Street address </label>
                                            <input type="text" class="form-control theme-input"
                                                placeholder="House number & Street name" id="dif_street" name="dif_street">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <input type="text" class="form-control theme-input"
                                                placeholder="Apartment,suite,unit, etc , optional" id="dif_suite" name="dif_house">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="" class="fw-bold mb-4">
                                                Postcode / ZIP <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input"
                                                placeholder="Apartment,suite,unit, etc , optional" id="dif_postcode" name="dif_postcode">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_town" class="fw-bold mb-4">
                                                Town / City<span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input"
                                                placeholder="Apartment,suite,unit, etc , optional" id="dif_town" name="dif_town">
                                        </p>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_phone" class="fw-bold mb-4">Phone <span class="text-center">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input"
                                                placeholder="Phone" id="dif_phone" name="dif_phone">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="" class="fw-bold mb-4">Email <span class="text-center">*</span>
                                            </label>
                                            <input type="email" class="form-control theme-input"
                                                placeholder="" id="dif_email" name="dif_email">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <p class="form-input mb-5">
                                <label for="">Order notes (optional)</label>
                                <textarea  id="" name="" rows="3" class="form-control theme-input"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border p-4" style="position: sticky; top:0;">
                        <h6 class="statliches mb-3">Your order</h6>
                        <div class="d-flex justify-content-between dashed-border-bottom pb-3">
                            <span class="fw-bold">
                                Product</span>
                            <span class="fw-bold">Subtotal</span>
                        </div>
    
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            <div class="d-flex justify-content-between noto-sans dashed-border-bottom pb-3 mb-3">
                                <div class="pe-4 py-4">
                                    {{ $details['name'] }} - {{ $details['pack_name'] }} × {{ $details['quantity'] }}
                                </div>
                                <div class="text-end lh-lg d-flex align-items-center fw-bold">
                                    ₹{{ $details['pack_price'] }}
                                </div>
                            </div>
                            {{-- hidden items  --}}
                            <input type="text" id="product_id" name="product_id[]" class="form-control" value="{{ $details['pid'] }}">
                            <input type="text" id="pack_id" name="pack_id[]" class="form-control" value="{{ $details['pack_id'] }}">
                            <input type="number" id="quantity" name="quantity[]" class="form-control" value="{{ $details['quantity'] }}">
                            <input type="number" id="price_per_unit" name="price_per_unit[]" class="form-control" value="{{ $details['pack_price_per_unit'] }}">
                            <input type="number" id="pack_price" name="pack_price[]" class="form-control" value="{{ $details['pack_price'] }}">
                            <input type="text" id="pname" name="pname[]" class="form-control" value="{{ $details['name'] }}">
                            {{-- hidden items  --}}
                            @endforeach
                        @endif
                        
    
    
                        <p class="d-flex justify-content-between ">
                            <span class="fw-bold"> Subtotal</span>
                            <span class="fw-bold">₹@if (session('tamnt')) {{ session('tamnt') }} @endif </span>
                        </p>
                        <p class="d-flex justify-content-between ">
                            <span class="fw-bold"> Shipping</span>
                            <span class="fw-bold text-end"></span>
                        </p>
                        <p class="d-flex justify-content-between ">
                            <span class="fw-bold"> Total</span>
                            <span class="fw-bold">₹@if (session('tamnt')) {{ session('tamnt') }} @endif </span>
                        </p>
                        <div class="payment">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Credit & Debit Cards / Net banking / UPI / EMI / Wallets
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <small class="text-muted">
                                                Pay securely with Credit or Debit Cards | Internet Banking | UPI |
                                                Google
                                                Pay | EMI Option | Bhim
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Pay with UPI QR Code
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <small class="text-muted mb-3 d-block">
                                                It uses UPI apps like BHIM, Paytm, Google Pay, PhonePe or any Banking
                                                UPI
                                                app to make payment.
                                            </small>
                                            <div class="row gx-3 mt-3">
                                                <div class="col-lg-6">
                                                    <label for="">UPI Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="" class="form-control theme-input" id="">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="">UPI Handle * <span
                                                            class="text-danger">*</span></label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">sdfdsf</option>
                                                        <option value="">sdfdsf</option>
                                                        <option value="">sdfdsf</option>
                                                        <option value="">sdfdsf</option>
                                                        <option value="">sdfdsf</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <p class="text-muted mt-3">
                            Your personal data will be used to process your order, support your experience throughout
                            this website, and for other purposes described in our <a href="{{route('privacy')}}" class="link txt-primary">privacy policy</a>.
                        </p>
                        <button type="submit"  class="btn-primary w-100 d-inline text-center py-3 d-block">
                            Proceed To payment
                        </button>
                    </div>
                </div>
                
            </div>
        </form>
        
    </div>
</section>
@endsection


@section('script')
    
@endsection