
<!-- site header start -->
<header class="site-header active" id="header">
    <section class="container">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="{{ asset('assets/frontend/images/logo.png')}}" width="130px" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navCustom" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{route('about')}}">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('shop')}}" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                
                                @foreach (\App\Models\Product::select('id', 'name','slug')->get() as $product)
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('productDetails', $product->slug)}}">{{$product->name}}</a></li>
                                @endforeach
                                
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('occasions')}}">Occasions

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('contact')}}"> Contact
                            </a>
                        </li>
                    </ul>
                    

                    <ul class="navbar-nav ms-auto position-relative d-flex align-items-center flex-wrap mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('cart')}}">
                                <iconify-icon icon="ph:currency-inr"></iconify-icon>@if (session('tamnt')) {{ session('tamnt') }} @endif
                                <iconify-icon icon="solar:cart-linear"></iconify-icon>
                            </a>
                            <div class="mega-menu p-4 bg-dark">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./images/product-slider/Litt-Cocktail-Mixers-Online-Buy-Mumbai-India-1.png"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-7">
                                        <a href="#" class="link txt-primary">Blue Lagoon Non-alcoholic Sparkling
                                            Cocktail Mixers </a>
                                        <small class="d-block text-light fw-bold">
                                            1 × ₹432
                                        </small>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <iconify-icon class="cursor-pointer text-danger" icon="tabler:trash-filled" width="1.2em"
                                            height="1.2em"></iconify-icon>
                                    </div>
                                </div>
                                <hr style="border-bottom: 1px dashed #fde9e9;">
                                <div class="row justify-content-between fw-bold text-light">
                                    <small class="col-lg-6">SUBTOTAL: </small>
                                    <small class="col-lg-6 text-end">₹@if (session('tamnt')) {{ session('tamnt') }} @endif </small>
                                </div>
                                <div class="row mt-4 justify-content-between fw-bold text-light">
                                    <div class="col-lg-6"> 
                                        <a href="{{route('cart')}}" class="btn-primary my-1 fw-bold d-block text-center">View cart </a>
                                    </div>
                                    <div class="col-lg-6"> 
                                        <a href="{{route('checkout')}}" class="btn-primary my-1 fw-bold d-block text-center">Checkout</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn-default" aria-current="page" href="{{route('shop')}}">
                                get lokomoko now
                            </a>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </nav>
    </section>
</header>
<!-- site header end -->
