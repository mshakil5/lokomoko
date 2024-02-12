
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
                            <a class="nav-link" aria-current="page" href="./occasions.html">Occasions

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('contact')}}"> Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center flex-wrap mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('cart')}}">
                                <iconify-icon icon="ph:currency-inr"></iconify-icon>@if (session('tamnt')) {{ session('tamnt') }}
                                    
                                @endif
                                <iconify-icon icon="solar:cart-linear"></iconify-icon>
                            </a>
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
