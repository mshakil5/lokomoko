
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
                    <img src="{{ asset('images/product/'.$product->big_image)}}" class="img-fluid w-90">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="statliches text-black mb-4">{{$product->name}} </h3>
                <h4 class="statliches text-black mb-4">₹{{$product->pack()->orderBy('price', 'asc')->first()->price}} – ₹{{$product->pack()->orderBy('price', 'desc')->first()->price}}</h4>
                <h3 class="statliches text-black mb-4 ">Highlights</h3>
                <h6 class=" text-black mb-4">{{$product->ingredient}}</h6>
                <hr class="opacity-25 my-5">
                <h6 class=" text-black mb-4">Qty</h6>
                <select class="form-control select-styles mb-5" id="pack" name="pack">
                    @foreach ($product->pack as $pack)
                    <option value="{{$pack->id}}">{{$pack->title}}</option>
                    @endforeach
                </select>
                {{-- hidden items  --}}
                <input type="hidden" name="pack_id" id="pack_id" value="{{$product->pack()->orderBy('price', 'asc')->first()->id}}">
                {{-- hidden items  --}}
                <h4 class="statliches  text-dark mb-4 ">₹<span id="priceShow">{{$product->pack()->orderBy('price', 'asc')->first()->price}}</span></h4>
                <div class="d-flex d-block ">
                    <div class="counter ">
                        <div class="count">-</div>
                        <div class="count-val  ">1</div>
                        <div class="count">+</div>
                    </div>
                    <a href="" class="btn-primary w-100 text-center d-flex align-items-center justify-content-center"> Add to cart</a>
                </div>
                <hr class="opacity-25 my-5">
                <h6 class="mt-4 text-black statliches mb-4">
                    SKU: N/A <br>
                    CATEGORY: {{$product->category->name}}
                </h6>
            </div>
        </div>
    </div>
</section>

<section class="product-information ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <div class="nav nav-tabs d-flex justify-content-center " id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">DESCRIPTION</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">ADDITIONAL INFORMATION</button>
                        {{-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">REVIEWS (0)</button> --}}

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active   py-5" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab" tabindex="0">

                        <h5 class="statliches text-black mb-5">description</h5>
                        <h2 class="statliches text-black mb-4">{{$product->name}}</h2>
                        <h5 class="statliches text-black mb-4">{{$product->ingredient}}</h5>

                        <div class="sub-title ">
                            {!! $product->description !!}
                        </div>

                        {{-- <h5 class="statliches text-black my-4">Tasting Notes</h5>
                        <div class="sub-title ">
                            Cosmopolitan is a combination of Cranberry + Lemon + Orange balanced perfectly. An
                            amazing combination to start the evening with a dash of your favorite drink.
                        </div> --}}
                    </div>
                    <div class="tab-pane fade py-5" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab" tabindex="0">
                        <h5 class="statliches text-black mb-4">Additional information</h5>
                        <div class="d-flex border mb-5">
                            <div class="col-2 border-end p-2">Qty</div>
                            <div class="col-10 p-2">
                                @foreach ($product->pack as $pack)
                                    {{$pack->title}},
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane  fade py-5" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab" tabindex="0">

                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="statliches text-black mb-2">Reviews</h5>
                                <small class="text-muted">There are no reviews yet.</small>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="noto-sans text-dark mb-4 fw-bold lh-base">Be the first to review
                                    “Cosmopolitan Non-alcoholic Sparkling Cocktail Mixers”</h5>

                                <small class="text-muted mb-3 d-block">Your email address will not be published.
                                    Required
                                    fields
                                    are marked <span class="text-danger">*</span></small>

                                <small class="text-muted mb-5 d-block">YOUR RATING
                                    <span class="text-danger">*</span>
                                </small>
                                <p class="form-input mb-5">
                                    <label for="">Your review <span class="text-danger">*</span></label>
                                    <textarea name="" rows="3" class="form-control theme-input"></textarea>
                                </p>
                                <div class="row  ">
                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <span class="required">*</span>
                                            <input type="text" placeholder="Name"
                                                class="form-control theme-input py-4">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <span class="required">*</span>
                                            <input type="text" placeholder="Email"
                                                class="form-control theme-input py-4">
                                        </div>
                                    </div>
                                </div>
                                <label class="d-flex align-items-center my-4">
                                    <input type="checkbox" class="form-check me-2 noto-sans">
                                    <small>Save my name, email, and website in this browser for the next time I
                                        comment.</small>
                                </label>
                                <br>
                                <a href="" class="btn-primary fw-bold py-4">Submit</a>
                            </div>
                        </div>

                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>


<!-- site footer start -->

@section('script')
<script>
    $(document).ready(function () {
        
        
        //header for csrf-token is must in laravel
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        //


          // category wise product show
        $("body").delegate("#pack","change",function () {
            var url = "{{URL::to('/get-product-price')}}";
            var id = $('#pack').val();
            console.log(id);
            var form_data = new FormData();			
            form_data.append("id", id);

            $.ajax({
                url:searchurl,
                method: "POST",
                type: "POST",
                contentType: false,
                processData: false,
                data:form_data,
                success: function(d){
                    $("#get_product").html(d.product);
                    // console.log((d.min));
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
        // category wise product show
       
    });
  </script>
@endsection