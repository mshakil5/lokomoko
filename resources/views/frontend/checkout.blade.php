
@extends('frontend.layouts.master')
@section('content')
<br>
<br>
<section class="py-5 default mt-5  ">
    <div class="container">
        <div class="row">
            <h2 class="statliches  text-dark mb-3">Checkout</h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h5 class="statliches  text-dark mb-5">Billing Details</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">First name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control theme-input">
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Last name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control theme-input">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Company name (optional) <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control theme-input">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Country / Region </label>

                            <select name="" id="" class="form-control theme-input">
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Street address </label>
                            <input type="text" class="form-control theme-input"
                                placeholder="House number & Street name">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <input type="text" class="form-control theme-input"
                                placeholder="Apartment,suite,unit, etc , optional">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">
                                Postcode / ZIP <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control theme-input"
                                placeholder="Apartment,suite,unit, etc , optional">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">
                                Town / City<span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control theme-input"
                                placeholder="Apartment,suite,unit, etc , optional">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Provience </label>
                            <select name="" id="" class="form-control theme-input">
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                                <option value="">sdf</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Phone <span class="text-center">*</span> </label>
                            <input type="text" class="form-control theme-input"
                                placeholder="Apartment,suite,unit, etc , optional">
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="" class="fw-bold mb-4">Email <span class="text-center">*</span> </label>
                            <input type="text" class="form-control theme-input"
                                placeholder="Apartment,suite,unit, etc , optional">
                        </p>
                    </div>
                    <!-- <div class="col-lg-12">
                        <p class="form-input mb-5">
                           
                            <label for="ship" class="fw-bold mb-4 statliches">
                                 <input type="checkbox" id="ship" class="form-check-input me-2" >
                                    Ship to a different address?
                                 </label>                               
                        </p>
                    </div> -->
                    <div class="col-lg-12">
                        <p class="form-input mb-5">
                            <label for="">Order notes (optional)</label>
                            <textarea name="" rows="3" class="form-control theme-input"
                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="border p-4" style="position: sticky; top:0;">
                    <h6 class="statliches mb-3">Your order</h6>
                    <div class="d-flex justify-content-between dashed-border-bottom pb-3">
                        <span class="fw-bold">
                            Product</span>
                        <span class="fw-bold">Subtotal</span>
                    </div>
                    <div class="d-flex justify-content-between noto-sans dashed-border-bottom pb-3 mb-3">
                        <div class="pe-4 py-4">
                            Cosmopolitan Non-alcoholic Sparkling Cocktail Mixers - Pack of 4 × 1
                        </div>
                        <div class="text-end lh-lg d-flex align-items-center fw-bold">
                            ₹432
                        </div>
                    </div>
                    <p class="d-flex justify-content-between ">
                        <span class="fw-bold"> Subtotal</span>
                        <span class="fw-bold">₹432 </span>
                    </p>
                    <p class="d-flex justify-content-between ">
                        <span class="fw-bold"> Shipping</span>
                        <span class="fw-bold text-end">Enter your address to view shipping options. </span>
                    </p>
                    <p class="d-flex justify-content-between ">
                        <span class="fw-bold"> Total</span>
                        <span class="fw-bold">₹432 </span>
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
                                        Pay securely with Credit or Debit Cards | Internet Banking | UPI | Google
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
                                        It uses UPI apps like BHIM, Paytm, Google Pay, PhonePe or any Banking UPI
                                        app to make payment.
                                       </small>
                                        <div class="row gx-3 mt-3">
                                            <div class="col-lg-6">
                                                <label for="">UPI Address <span class="text-danger">*</span></label>
                                                <input type="text" name="" class="form-control theme-input" id="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">UPI Handle * <span class="text-danger">*</span></label>
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
                        this website, and for other purposes described in our <a href=""
                            class="link txt-primary">privacy policy</a>.
                    </p>
                    <a href="#" class="btn-primary w-100 d-inline text-center py-3 d-block">
                        Proceed To payment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection


@section('script')
    
@endsection