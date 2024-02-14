
@extends('frontend.layouts.master')
@section('content')
   
@php
    $companydetails = \App\Models\CompanyDetail::first();
@endphp
<section class="banner d-flex align-items-center" style="background-image: url('{{ asset('product/contact.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center flex-column d-flex align-items-center justify-content-center">
                <div class="box text-uppercase fw-bold d-flex align-items-center fs-6">
                    <small><a href="{{route('homepage')}}"
                            class="text-white text-decoration-none  fs-6 hover-primary">Home</a></small>
                    <iconify-icon icon="fluent:chevron-right-24-filled" class="text-white mx-2" width="1.2em"
                        height="1.2em"></iconify-icon>
                    <small class="text-white fs-6">contact</small>
                </div>
                <h1 class="statliches display-1 mt-4 text-light">Contact Us</h1>
            </div>

        </div>
    </div>
</section>



<section class=" contact">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-4">
                <div class="contact-block py-5">
                    <iconify-icon icon="ph:map-pin-light" width="1.2em" height="1.2em"></iconify-icon>

                    <h3 class="statliches">
                        Address
                    </h3>
                    <p class="sub-title">
                        {{$companydetails->address1}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-block py-5">
                    <iconify-icon icon="fontisto:email" width="1.2em" height="1.2em"></iconify-icon>
                    <h3 class="statliches"> 
                        Email</h3>
                    <p class="sub-title">
                        {{$companydetails->email1}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-block py-5">
                    <iconify-icon icon="carbon:phone-filled" width="1.2em" height="1.2em"></iconify-icon>
                    <h3 class="statliches">Contact <br>
                        Number</h3>
                    <p class="sub-title">
                        {{$companydetails->phone1}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="quick-menu default d-flex align-items-center" style="background-image: url(./images/reservation-background.webp);background-size: 148% 125%;
background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center">
                    Share Your Queries &Feedback
                </div>
                <div class="sub-title text-center mx-auto mb-5 ">
                    You’re not going to hit a ridiculously long phone menu when you call us. Your email isn’t going to the inbox storage, never to be seen or heard from again. We try to provide the exceptional service.
                </div>
            </div>

            <div class="col-lg-12 contact-form">
                <form action="">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb-3 py-3" placeholder="Your name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control mb-3 py-3" placeholder="Email address">
                        </div>
                        <div class="col-lg-6">
                            <input type="number" class="form-control mb-3 py-3" placeholder="Contact Number">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control mb-3 py-3" placeholder="Subject">
                        </div>
                        <div class="col-lg-12">
                            <textarea name=""  placeholder="Your Message"  class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-lg-12 text-center">
                            <input type="submit" value="submit"class="btn-primary rounded-3 mt-4">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>






<section class="">
    <div class="container">
        <div class="row footer-top text-white default">
            <div class="col-lg-12 text-center">
                <div class="section-title text-white text-center">
                    Choose Your Flavour
                </div>
                <div class="sub-title text-white text-center mx-auto mb-5">
                    Find your perfect party drink! Our non-alcoholic sparkling mixers come in four delicious
                    flavors, so
                    you can find the perfect drink for any party. Whether you’re looking for something sweet, sour,
                    or
                    even a little bit spicy, we have a mixer that will suit your taste.
                </div>
                <a href="" width="160px" class="btn-primary text-white d-inline-flex align-items-center">Explore
                    colection
                    <iconify-icon icon="bi:arrow-right" class="ms-2" width="1.2em" height="1.2em"></iconify-icon>
                </a>
            </div>
        </div>
    </div>
</section>





@endsection
@section('script')
    
@endsection