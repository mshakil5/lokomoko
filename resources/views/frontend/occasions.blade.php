
@extends('frontend.layouts.master')
@section('content')
   



<section class="banner d-flex align-items-center"
style="background-image: url('{{ asset('product/occasion.jpg')}}');">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center flex-column d-flex align-items-center justify-content-center">
            <div class="box text-uppercase fw-bold d-flex align-items-center fs-6">
                <small><a href="{{route('homepage')}}"
                        class="text-white text-decoration-none  fs-6 hover-primary">Home</a></small>
                <iconify-icon icon="fluent:chevron-right-24-filled" class="text-white mx-2" width="1.2em"
                    height="1.2em"></iconify-icon>
                <small class="text-white fs-6">Occasions</small>
            </div>
            <h1 class="statliches display-1 mt-4 text-light">Occasions</h1>
        </div>

    </div>
</div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-4">
                <h1 class="statliches mb-4">Delicious for Every <br> Parties</h1>
            </div>
            <div class="col-lg-8">
                <p class="sub-title " style="max-width:90%;">
                    Lokomoko non-alcoholic mixers were born for the very purpose of bringing the Revolution in the home
                    parties. To provide a quick, simple & easy way to make drinks for anyone who has never made any
                    mixer drinks before.
                </p>
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

                    <h3 class="statliches">Corporate <br>
                        Event
                    </h3>
                    <p class="sub-title">
                        Introducing Lokomoko Mocktails at corporate events fosters inclusivity and responsible enjoyment, catering to attendees who prefer non-alcoholic options or abstain from drinking.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-block py-5">
                    <iconify-icon icon="la:ring" width="1.2em" height="1.2em"></iconify-icon>
                    <h3 class="statliches">Wedding <br>
                        Reception</h3>
                    <p class="sub-title">
                        Incorporating Lokomoko Mocktails into wedding receptions offers a refined alternative to traditional alcoholic beverages, ensuring all guests, including non-drinkers and designated drivers, can partake in the celebration.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-block py-5">
                    <iconify-icon icon="fluent-mdl2:blowing-snow" width="1.2em" height="1.2em"></iconify-icon>
                    <h3 class="statliches">Birthday<br>
                        Party
                    </h3>
                    <p class="sub-title">
                        Lokomoko Mocktails into birthday parties ensures all guests, including children and non-drinkers, can enjoy flavorful beverages without alcohol.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-dark">
<div class="container">
    <div class="row py-5">
        @foreach (\App\Models\Product::select('id','big_image')->get() as $product)
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/product/'.$product->big_image)}}" class="img-fluid w-75" alt="">
        </div>
        @endforeach
        

    </div>
</div>
</section>

<section class="py-5">
<div class="container">
    <div class="row py-5">
        <div class="col-lg-6  ">
            <div class="testimonial my-5">

                @foreach (\App\Models\Product::select('id','big_image')->get() as $product)
                <div class="p-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/product/'.$product->big_image)}}" class="img-fluid w-75">
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="col-lg-6  d-flex align-items-center">
            <div class="pt-5 text-justify">
                <h1 class="statliches display-4">Let's enjoy with lokomoko.</h1>
                <p class="sub-title" style="max-width: 100%!important;">
                    Lokomoko Drinks offers a delightful trio of flavors to suit any palate. Indulge in the crisp and refreshing taste of our Mojito, crafted with a blend of zesty lemon and invigorating mint. Savor the sweetness of summer with our Red Punch, bursting with the juicy flavors of ripe strawberries and succulent red grapes. For a taste of the tropics, dive into our Blue Ocean, featuring the tantalizing fusion of luscious blueberries and exotic Curacao liqueur. Experience the perfect harmony of flavors with Lokomoko Drinks, where every sip is a journey of delicious discovery.
                </p>
                {{-- <p class="sub-title" style="max-width: 100%!important;">
                    Lokomoko Non-alcoholic Mixers are crafted by India’s award-winning Mixologists who have been
                    passionately making the best-tasting drinks.
                </p> --}}

            </div>

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
                you can find the perfect drink for any party.
            </div>
            <a href="{{route('shop')}}" width="160px" class="btn-primary text-white d-inline-flex align-items-center">Explore
                colection
                <iconify-icon icon="bi:arrow-right" class="ms-2" width="1.2em" height="1.2em"></iconify-icon>
            </a>
        </div>
    </div>
</div>
</section>



@endsection
@section('script')

<script>
    $(document).ready(function () {

        $('.testimonial').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            swipeToSlide: true,
            arrows: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true,
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ]
        });
    });

</script>
@endsection