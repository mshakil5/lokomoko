
@extends('frontend.layouts.master')
@section('content')
    

<section class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title display-1 fw-bold text-uppercase text-white statliches">
                    Lokomoko <br> Moktails
                </div>
                <h5 class="text-white my-4">Crafting Refreshing Mocktails, Where Every Sip IS A Burst Of Flavor Without The Buzz.</h5>
                <div class="d-flex ">
                    <a href="" class="btn-primary me-3">get started</a>
                    <a href="" class="btn-default me-3 d-flex align-items-center">know more
                        <iconify-icon class="ms-2" icon="solar:arrow-right-linear" width="1.2em"
                            height="1.2em"></iconify-icon></a>
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
                Find your perfect party drink! Our non-alcoholic sparkling mixers come in four delicious flavors, so
                you can find the perfect drink for any party. Whether you’re looking for something sweet, sour, or
                even a little bit spicy, we have a mixer that will suit your taste.
            </div>
        </div>
        @if ($products->count() > 0)
        
        @endif

        <div class="row py-5">



            

            @foreach ($products as $item)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('images/product/'.$item->image)}}" class="w-100 " alt="">
                    <div class="title">{{ $item->name }}</div>
                    <div class="desc">{!! $item->description !!}</div>
                    <a href="{{route('productDetails', $item->slug)}}" class="btn-primary fw-bold">know more</a>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('product/mojito.png')}}" class="w-100" alt="">
                    <div class="title">Hurricane</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam fugiat harum
                        nesciunt quasi recusandae accusamus adipisci dicta nemo tenetur voluptatibus modi architecto
                        inventore, cum facilis?</div>
                    <a href="" class="btn-primary fw-bold">know more</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('product/red-1.png')}}" class="w-100" alt="">
                    <div class="title">Cosmopolitan</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam fugiat harum
                        nesciunt quasi recusandae accusamus adipisci dicta nemo tenetur voluptatibus modi architecto
                        inventore, cum facilis?</div>
                    <a href="" class="btn-primary fw-bold">know more</a>
                </div>
            </div> --}}


            

        </div>
    </div>
</section>


<section class="revolution py-5 d-flex align-items-center">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title text-center text-white">
                    Cocktail Revolution
                </div>
                <div class="sub-title text-center mx-auto mb-5  text-white">
                    Litt non-alcoholic mixes are crafted by India’s award-winning Mixologists who have been
                    passionately making the best-tasting mixers. Our non-alcoholic mixers are made with imported
                    ingredients & natural sugar with fewer calories & Zero artificial Sweeteners.
                </div>
                <a href="" width='160px' class="btn-default-dark text-white d-inline-flex align-items-center "> Read
                    More
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
                    Cocktail for any occasion
                </div>
                <div class="sub-title text-center mx-auto mb-5  ">
                    Cocktail for Any Occasion: Make your next party or gathering a hit with our foolproof drinks
                    recipes. Whether you’re looking for something classic or something new, we’ve got you covered.
                </div>
            </div>
            <div class="col-lg-6">
                <div class="photobox">
                    <div class="photo">
                        <img src="{{ asset('product/Private-Party.jpg')}}" class="img-fluid" alt="">
                        <div class="info left">
                            <div class="text-center">
                                <h3 class="statliches text-center">Private Party</h3>
                                <p class="sub-title text-center mx-auto w-75">Who does not like to mix their drinks at a party? Become your own bartender and enjoy the most fascinating cocktail mixes by Litt.</p>
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
                                <p class="sub-title text-center mx-auto w-75">This is a perfect time for celebration. With exciting non-alcoholic mixes from Litt, you can be sure that everybody is in high spirits during the joyous moments.</p>
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
                                <p class="sub-title text-center mx-auto w-75">You need to act sober but enjoy the splendid variety of Litt non-alcoholic mixers. This finely crafted mix will ensure that you are on top of your game.</p>
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
                                <p class="sub-title text-center mx-auto w-75">Birthday parties are always special and Litt mixers will ensure that the atmosphere is charged with excitement and high-spirited conversation.</p>
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
                    Litt is a ready-to-serve Sparkling, Alcohol-Free Mixer. It is a fun lifestyle alternative –
                    enjoy on every occasion!
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




<section class="flavour default pb-4" style="display: none">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                Choose Your Flavour
            </div>
            <div class="sub-title text-center mx-auto">
                Find your perfect party drink! Our non-alcoholic sparkling mixers come in four delicious flavors, so
                you can find the perfect drink for any party. Whether you’re looking for something sweet, sour, or
                even a little bit spicy, we have a mixer that will suit your taste.
            </div>
        </div>


        

        <div class="row pt-5">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('assets/frontend/images/profiles/2.jpg')}}" width="100" class=" rounded-circle" alt="">
                    <div class="title">Blue Lagoon</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam fugiat harum
                        nesciunt quasi recusandae accusamus adipisci dicta nemo tenetur voluptatibus modi architecto
                        inventore, cum facilis?</div>
                    <div>
                        <h6 class="text-center statliches">Profile Name</h6>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('assets/frontend/images/profiles/2.jpg')}}" width="100" class=" rounded-circle" alt="">
                    <div class="title">Cosmopolitan</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam fugiat harum
                        nesciunt quasi recusandae accusamus adipisci dicta nemo tenetur voluptatibus modi architecto
                        inventore, cum facilis?</div>
                    <div>
                        <h6 class="text-center statliches text-uppercase  ">Profile Name</h6>
                        <p>Customer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="flavour-box">
                    <img src="{{ asset('assets/frontend/images/profiles/3.jpg')}}" width="100" class=" rounded-circle" alt="">
                    <div class="title">Virgin Mojito</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam fugiat harum
                        nesciunt quasi recusandae accusamus adipisci dicta nemo tenetur voluptatibus modi architecto
                        inventore, cum facilis?</div>
                    <div>
                        <h6 class="text-center statliches">Profile Name</h6>
                        <p>Customer</p>
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