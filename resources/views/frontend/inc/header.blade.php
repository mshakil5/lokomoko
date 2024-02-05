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
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="{{route('shop')}}">Shop</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Occasions

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('contact')}}"> Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center flex-wrap mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">
                                <iconify-icon icon="ph:currency-inr"></iconify-icon>
                                <iconify-icon icon="solar:cart-linear"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-default" aria-current="page" href="{{route('homepage')}}">
                                get litt now
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