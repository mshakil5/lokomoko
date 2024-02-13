<header class="site-header" id="header">
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
                            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{route('about')}}">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{route('shop')}}">Shop</a>
                        </li> --}}


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
                            @if(session('cart'))
                            <div class="mega-menu p-4 bg-dark">
                                <div class="row">
                                    <table class="table">
                                        @foreach(session('cart') as $id => $details)
                                        <tr data-id="{{ $id }}" data-price="{{ $details['pack_price'] }}" data-qty="{{ $details['quantity'] }}">
                                            <td class="p-3">
                                                <img src="{{ asset('images/product') }}/{{ $details['image'] }}" class="img-fluid" style="width: 80px">
                                            </td>
                                            <td>
                                                <a href="#" class="link text-white">
                                                    {{ $details['name'] }} - {{ $details['pack_name'] }}
                                                </a>
                                                <span class="d-block text-white mt-2">₹{{ $details['pack_price'] }}</span>
                                            </td>
                                            <td class="p-3"> 
                                                <iconify-icon class="text-white hover-red fs-6 cart_remove" icon="tabler:trash-filled" width="1.2em" height="1.2em"></iconify-icon>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
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
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="btn-default" aria-current="page" href="{{route('shop')}}">
                                get lokomoko now
                            </a>
                        </li>

                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                </div>
            </div>
        </nav>
    </section>
</header>