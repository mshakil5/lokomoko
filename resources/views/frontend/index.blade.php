
@extends('frontend.layouts.master')
@section('content')
    

<section class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title display-1 fw-bold text-uppercase text-white statliches">
                    Lokomoko <br> Mocktails
                </div>
                <h5 class="text-white my-4">Crafting Refreshing Mocktails, Where Every Sip IS A Burst Of Flavor Without The Buzz.</h5>
                <div class="d-flex ">
                    <a href="{{route('shop')}}" class="btn-primary me-3">get started</a>
                    <a href="{{route('about')}}" class="btn-default me-3 d-flex align-items-center">know more
                        <iconify-icon class="ms-2" icon="solar:arrow-right-linear" width="1.2em" height="1.2em"></iconify-icon></a>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>




<section class="flavour py-5">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                Choose Your Flavour
            </div>
            <div class="sub-title text-center mx-auto">
                Introducing a trio of tantalizing drink options: Red Punch, Mojito, and Blue Ocean. Each beverage offers a unique flavor experience, catering to diverse preferences and occasions. Whether you crave the fruity sweetness of Red Punch, the refreshing minty kick of Mojito, or the exotic allure of Blue Ocean, there's something for everyone. With their vibrant colors and exquisite tastes, these drinks are sure to elevate any gathering or celebration. Indulge in the deliciousness of our drink selection and embark on a journey of sensory delight with Red Punch, Mojito, and Blue Ocean.
            </div>
        </div>
        {{-- @if ($products->count() > 0)
        
        @endif --}}

        <div class="row py-5">

            @foreach ($products as $item)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('images/product/'.$item->image)}}" class="w-100 " alt="">
                    <div class="title">{{ $item->name }}</div>
                    <div class="desc" style="height: 380px">{!! $item->description !!}</div>
                    <a href="{{route('productDetails', $item->slug)}}" class="btn-primary fw-bold">know more</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>


<section class="revolution py-5 d-flex align-items-center">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center text-white">
                    Mocktails Revolution
                </div>
                <div class="sub-title text-center mx-auto mb-5  text-white">
                    The mocktail revolution in India has transformed the drinking culture, offering innovative and alcohol-free alternatives for all occasions. With a growing focus on health and wellness, mocktails provide flavorful options that cater to diverse tastes while promoting responsible consumption. From refreshing fruity blends to sophisticated herbal concoctions, mocktails have become a popular choice, sparking a delightful revolution in India's beverage scene.
                </div>
                <a href="{{route('about')}}" width='160px' class="btn-default-dark text-white d-inline-flex align-items-center "> Read More
                    <iconify-icon icon="bi:arrow-right" class="ms-2" width="1.2em" height="1.2em"></iconify-icon>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="occation default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center ">
                    Mocktails for any occasion
                </div>
                <div class="sub-title text-center mx-auto mb-5  ">
                    Mocktails for Any Occasion: Make your next party or gathering a hit with our foolproof drinks recipes. Whether you’re looking for something classic or something new, we’ve got you covered.
                </div>
            </div>
            <div class="col-lg-6">
                <div class="photobox">
                    <div class="photo">
                        <img src="{{ asset('product/Private-Party.jpg')}}" class="img-fluid" alt="">
                        <div class="info left">
                            <div class="text-center">
                                <h3 class="statliches text-center">Private Party</h3>
                                <p class="sub-title text-justify mx-auto w-100">Using Lokomoko Mocktails at private parties adds a touch of sophistication and excitement, providing guests with delicious alcohol-free options that cater to various tastes and preferences. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="photobox">
                    <div class="photo">
                        <img src="{{ asset('product/Wedding-Reception.jpg')}}" class="img-fluid" alt="">
                        <div class="info right">
                            <div class="text-center">
                                <h3 class="statliches text-center">Wedding Reception</h3>
                                <p class="sub-title text-center mx-auto w-100">Incorporating Lokomoko Mocktails into wedding receptions offers a refined alternative to traditional alcoholic beverages, ensuring all guests, including non-drinkers and designated drivers, can partake in the celebration. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="photobox">
                    <div class="photo">
                        <img src="{{ asset('product/Corporate-Event.jpg')}}" class="img-fluid" alt="">
                        <div class="info left">
                            <div class="text-center">
                                <h3 class="statliches text-center">Corporate Event</h3>
                                <p class="sub-title text-center mx-auto w-100">
                                    Introducing Lokomoko Mocktails at corporate events fosters inclusivity and responsible enjoyment, catering to attendees who prefer non-alcoholic options or abstain from drinking. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="photobox">
                    <div class="photo">
                        <img src="{{ asset('product/Birthday-Party.jpg')}}" class="img-fluid" alt="">
                        <div class="info right">
                            <div class="text-center">
                                <h3 class="statliches text-center">Birthday Party</h3>
                                <p class="sub-title text-center mx-auto w-100">Lokomoko Mocktails into birthday parties ensures all guests, including children and non-drinkers, can enjoy flavorful beverages without alcohol.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="quick-menu default d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center text-white">
                    Quick menu
                </div>
                <div class="sub-title text-center mx-auto mb-5  text-white">
                    Lokomoko Mocktails is ready to serve. Sparkling, Non-alchoholic drinks. It's a fun lifestyle alternative – enjoy on every occasion!
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <!-- loop start -->
                @foreach ($products as $item)
                <div class="menu-row">
                    <img src="{{ asset('images/product/'.$item->image)}}" alt="">
                    <div class="inner">
                        <div class="box">
                            <h3>{{ $item->name }}</h3>
                            <h3>RS.20</h3>
                        </div>
                        <h5 class="text-muted mb-0">{{ $item->ingredient }}</p>
                    </div>
                </div>

                @endforeach
                


                

            </div>

        </div>
    </div>
</section>






<section class="occation default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center ">
                    Moktails for any occasion
                </div>
            </div>

            
            <div class="row  justify-content-md-center">
                <div class="col-lg-8">
                    <div class="row">


                        <div class="col-lg-6">
                            <div class="photobox">
                                <div class="photo">
                                    <img src="{{ asset('product/img1.jpg')}}" class="img-fluid" alt="">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="photobox">
                                <div class="photo">
                                    <img src="{{ asset('product/img2.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="photobox">
                                <div class="photo">
                                    <img src="{{ asset('product/img3.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="photobox">
                                <div class="photo">
                                    <img src="{{ asset('product/img4.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
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
                    flavors, so you can find the perfect drink for any party.
                </div>
                <a href="{{route('shop')}}" width="160px" class="btn-primary text-white d-inline-flex align-items-center">Explore colection
                    <iconify-icon icon="bi:arrow-right" class="ms-2" width="1.2em" height="1.2em"></iconify-icon>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
    
@endsection