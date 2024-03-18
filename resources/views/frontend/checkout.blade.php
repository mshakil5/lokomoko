
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form  id="paymentForm" method="POST">
            @csrf
            <div class="row">
            
                <div class="col-lg-6">
                    <h5 class="statliches  text-dark mb-5">Billing Details</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="form-input mb-5">
                                <label for="first_name" class="fw-bold mb-4">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="@if (session('first_name') !== 'Null') {{session('first_name')}} @else {{ old('first_name') }} @endif">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="form-input mb-5">
                                <label for="last_name" class="fw-bold mb-4">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="@if (session('last_name') !== 'Null') {{session('last_name')}} @else {{ old('last_name') }} @endif">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="company_name" class="fw-bold mb-4">Company name (optional) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control theme-input" id="company_name" name="company_name">
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="country" class="fw-bold mb-4">Country / Region </label>
                                <select name="country" id="country" class="form-control theme-input @error('country') is-invalid @enderror">
                                    <option value="India">India</option>
                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="street" class="fw-bold mb-4">Street address </label>
                                <input type="text" class="form-control theme-input @error('street') is-invalid @enderror" placeholder="House number & Street name"  id="street" name="street" value="@if (session('street') !== 'Null') {{session('street')}} @else {{ old('street') }} @endif">
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <input type="text" class="form-control theme-input @error('suite') is-invalid @enderror" placeholder="Apartment,suite,unit, etc , optional" id="suite" name="suite" value="@if (session('suite') !== 'Null') {{session('suite')}} @else {{ old('suite') }} @endif">
                                    @error('suite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="" class="fw-bold mb-4">
                                    Postcode / ZIP <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control theme-input @error('postcode') is-invalid @enderror" placeholder="" id="postcode" name="postcode" value="@if (session('postcode') !== 'Null') {{session('postcode')}} @else {{ old('postcode') }} @endif">
                                @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="" class="fw-bold mb-4">
                                    Town / City<span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control theme-input @error('town') is-invalid @enderror" placeholder="" id="town" name="town"  value="@if (session('town') !== 'Null') {{session('town')}} @else {{ old('town') }} @endif">
                                    @error('town')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </p>
                        </div>
                        
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="phone" class="fw-bold mb-4">Phone <span class="text-center">*</span> </label>
                                <input type="text" class="form-control theme-input @error('phone') is-invalid @enderror" placeholder="" id="phone" name="phone"  value="@if (session('phone') !== 'Null') {{session('phone')}} @else {{ old('phone') }} @endif">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-input mb-5">
                                <label for="email" class="fw-bold mb-4">Email <span class="text-center">*</span> </label>
                                <input type="text" class="form-control theme-input @error('email') is-invalid @enderror" placeholder="" id="email" name="email"  value="@if (session('email') !== 'Null') {{session('email')}} @else {{ old('email') }} @endif">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                            <label for="dif_first_name" class="fw-bold mb-4">First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input @error('dif_first_name') is-invalid @enderror" id="dif_first_name" name="dif_first_name" value="@if (session('dif_first_name') !== 'Null') {{session('dif_first_name')}} @else {{ old('dif_first_name') }} @endif">
                                            @error('dif_first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="form-input mb-5">
                                            <label for="dif_last_name" class="fw-bold mb-4">Last name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input @error('dif_last_name') is-invalid @enderror" id="dif_last_name" name="dif_last_name" value="@if (session('dif_last_name') !== 'Null') {{session('dif_last_name')}} @else {{ old('dif_last_name') }} @endif">
                                            @error('dif_last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_company_name" class="fw-bold mb-4">Company name (optional) <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control theme-input @error('dif_company_name') is-invalid @enderror" id="dif_company_name" name="dif_company_name">
                                            @error('dif_company_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_country" class="fw-bold mb-4">Country / Region </label>
    
                                            <select name="dif_country" id="dif_country" class="form-control theme-input @error('dif_country') is-invalid @enderror">
                                                <option value="India">India</option>
                                            </select>
                                            @error('dif_country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_street" class="fw-bold mb-4">Street address </label>
                                            <input type="text" class="form-control theme-input @error('dif_street') is-invalid @enderror" placeholder="House number & Street name" id="dif_street" name="dif_street" value="@if (session('dif_street') !== 'Null') {{session('dif_street')}} @else {{ old('dif_street') }} @endif">
                                            @error('dif_street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <input type="text" class="form-control theme-input @error('dif_house') is-invalid @enderror" placeholder="Apartment,suite,unit, etc , optional" id="dif_suite" name="dif_house" value="@if (session('dif_house') !== 'Null') {{session('dif_house')}} @else {{ old('dif_house') }} @endif">
                                                @error('dif_house')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="" class="fw-bold mb-4">
                                                Postcode / ZIP <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input @error('dif_postcode') is-invalid @enderror" placeholder="" id="dif_postcode" name="dif_postcode" value="@if (session('dif_postcode') !== 'Null') {{session('dif_postcode')}} @else {{ old('dif_postcode') }} @endif">
                                            @error('dif_postcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_town" class="fw-bold mb-4">
                                                Town / City<span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input @error('dif_town') is-invalid @enderror" placeholder="" id="dif_town" name="dif_town" value="@if (session('dif_town') !== 'Null') {{session('dif_town')}} @else {{ old('dif_town') }} @endif">
                                            @error('dif_town')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="dif_phone" class="fw-bold mb-4">Phone <span class="text-center">*</span>
                                            </label>
                                            <input type="text" class="form-control theme-input @error('dif_phone') is-invalid @enderror"
                                                placeholder="Phone" id="dif_phone" name="dif_phone" value="@if (session('dif_phone') !== 'Null') {{session('dif_phone')}} @else {{ old('dif_phone') }} @endif">
                                                @error('dif_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="form-input mb-5">
                                            <label for="" class="fw-bold mb-4">Email <span class="text-center">*</span>
                                            </label>
                                            <input type="email" class="form-control theme-input @error('dif_email') is-invalid @enderror"
                                                placeholder="" id="dif_email" name="dif_email" value="@if (session('dif_email') !== 'Null') {{session('dif_email')}} @else {{ old('dif_email') }} @endif">
                                                @error('dif_email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <p class="form-input mb-5">
                                <label for="">Order notes (optional)</label>
                                <textarea  id="order_note" name="order_note" rows="3" class="form-control theme-input" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border p-4" style="position: sticky; top:0;">
                        <h5 class="statliches mb-3">Your order</h5>
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
                            <input type="hidden" id="product_id" name="product_id[]" class="form-control" value="{{ $details['pid'] }}">
                            <input type="hidden" id="pack_id" name="pack_id[]" class="form-control" value="{{ $details['pack_id'] }}">
                            <input type="hidden" id="quantity" name="quantity[]" class="form-control" value="{{ $details['quantity'] }}">
                            <input type="hidden" id="price_per_unit" name="price_per_unit[]" class="form-control" value="{{ $details['pack_price_per_unit'] }}">
                            <input type="hidden" id="pack_price" name="pack_price[]" class="form-control" value="{{ $details['pack_price'] }}">
                            <input type="hidden" id="pname" name="pname[]" class="form-control" value="{{ $details['name'] }}">
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
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fw-bold fs-6 text-black cursor-pointer d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="outline: 0; box-shadow: none;">
                                            <label for="card" class="d-flex align-items-center">
                                                <input type="radio" name="payment" value="phonepe"
                                                    class="form-check-input me-2" id="card">
                                                <small>Pay securely with Credit or Debit Cards | Phonepe</small>
                                                <img width="25px" class="ms-3" src="https://im-testing.im-cdn.com/assets/images/favicon.6d3d153d920c.png" alt="">
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <small class="text-dark">
                                                Pay securely with Credit or Debit Cards | Phonepe
                                            </small>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <label for="upi" class="d-flex align-items-center">
                                                <input type="radio" name="payment" value="cash"
                                                    class="form-check-input me-2" id="upi">
                                                <small class="text-black">Pay with UPI QR Code</small>
                                                <img width="25px" class="ms-3"
                                                    src="https://im-testing.im-cdn.com/assets/images/favicon.6d3d153d920c.png"
                                                    alt="">
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <small class="text-dark mb-3 d-block">
                                                It uses UPI apps like BHIM, Paytm, Google Pay, PhonePe or any Banking
                                                UPI
                                                app to make payment.
                                            </small>
                                            <div class="row gx-3 mt-3">
                                                <div class="col-lg-6">
                                                    <label for=""><b>UPI Address</b> <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Eg: mobile number" name=""
                                                        class="form-control theme-input" id="">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for=""><b>UPI Handle</b> * <span
                                                            class="text-danger">*</span></label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">===select====</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <label for="cash" class="d-flex align-items-center text-black">
                                                <input type="radio" name="payment" value="cash"
                                                    class="form-check-input me-2" id="cash" checked>
                                                <small>Cash on delivery</small>
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pay with cash upon delivery.
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("paymentForm");
        const cashRadio = document.querySelector('input[value="cash"]');
        const upiRadio = document.querySelector('input[value="phonepe"]');
        
        cashRadio.addEventListener("change", function() {
            form.action = "{{ route('order.store') }}";
        });
        
        upiRadio.addEventListener("change", function() {
            form.action = "{{ route('order.phonepe') }}";
        });
    });
</script>
@endsection