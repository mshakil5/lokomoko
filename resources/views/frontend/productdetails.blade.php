
@extends('frontend.layouts.master')
@section('content')
    
@endsection


<section class="product-details mt-5 default">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-box position-relative text-center">
                    <span
                        class="badge bg-success text-uppercase  position-absolute top-0 start-0 fs-6 fw-normal py-2 rounded-1 ">Sale!</span>
                    <img src="./images/products/Blue-Lagoon.jpg" class="img-fluid w-90">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="statliches text-black mb-4">Blue Lagoon Non-alcoholic Sparkling Cocktail Mixers</h3>
                <h4 class="statliches text-black mb-4">₹432 – ₹1,152</h4>
                <h3 class="statliches text-black mb-4 ">Highlights</h3>
                <h6 class=" text-black mb-4">Blue Curacao + Lemonade</h6>
                <hr class="opacity-25 my-5">
                <h6 class=" text-black mb-4">Qty</h6>
                <select class="form-control select-styles mb-5">
                    <option value="">Choose an option</option>
                    <option value="pack-of-4">Pack of 4</option>
                    <option value="pack-of-8">Pack of 8</option>
                    <option value="pack-of-12">Pack of 12</option>
                </select>
                <h4 class="statliches  text-dark mb-4 ">₹480 <del class="text-muted fs-6">₹432</del></h4>
                <div class="d-flex d-block ">
                    <div class="counter ">
                        <div class="count">-</div>
                        <div class="count-val  ">12</div>
                        <div class="count">+</div>
                    </div>
                    <a href=""
                        class="btn-primary w-100 text-center d-flex align-items-center justify-content-center"> Add
                        to cart</a>
                </div>
                <hr class="opacity-25 my-5">
                <h6 class="mt-4 text-black statliches mb-4">
                    SKU: N/A <br>
                    CATEGORY: COCKTAIL MIXERS
                </h6>
            </div>
        </div>
    </div>
</section>

<section class="product-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <div class="nav nav-tabs d-flex justify-content-center " id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DESCRIPTION</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ADDITIONAL INFORMATION</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">REVIEWS (0)</button>
                      
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">content </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">content </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">content </div>
                    
                  </div>
            </div>
        </div>
    </div>
</section>

<!-- site footer start -->

@section('script')
    
@endsection