
@extends('frontend.layouts.master')
@section('content')
    
@endsection



<section class="banner d-flex align-items-center"
style="background-image: url('{{ asset('product/img1.jpg')}}');">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center flex-column d-flex align-items-center justify-content-center">
            <div class="box text-uppercase fw-bold d-flex align-items-center fs-6">
                <small><a href="{{route('homepage')}}" class="text-white text-decoration-none  fs-6 hover-primary">Home</a></small>
                <iconify-icon icon="fluent:chevron-right-24-filled" class="text-white mx-2" width="1.2em"
                    height="1.2em"></iconify-icon>
                <small class="text-white fs-6">About</small>
            </div>
            <h1 class="statliches display-1 mt-4 text-light">About Us</h1>
        </div>

    </div>
</div>
</section>

<section class="py-5">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="statliches mb-4">About Us</h1>
            <h5 class="statliches mb-4">A BRIGHT IDEA TAKES PLACE</h5>

            <p class="sub-title " style="max-width:90%;">
                What do you get when you mix a foodie and a techie?
                A truly Litt entrepreneur!
            </p>
            <p class="sub-title " style="max-width:90%;">
                Meet Founder, Chairman & Managing Director Ravi Katwa, a New York Institute of Technology alumni
                and the brainchild behind Litt Non-alcoholic Sparkling Mixers. Apart from bringing a portable
                lounge experience, Ravi Katwa wants to bring some real excitement to both drinking &
                non-drinking people across India.
            </p>
            <p class="sub-title " style="max-width:90%;">
                Litt is a premium brand of ready-to-serve alcohol-free sparkling non-alcoholic mix. Litt is a
                subsidiary company of Katwa Group who has businesses in Cement, Construction, and Real Estate
                for the last 3 decades.
            </p>
            <a class="btn-primary mt-4 text-white d-inline-flex align-items-center" aria-current="page"
                href="#">
                Explore Product
            </a>
        </div>
        <div class="col-lg-6  bg-light d-flex align-items-center justify-content-center">
            <img src="./images/Ravi-Katwa-Litt-Cocktails.png" class="img-fluid" alt="">
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
            </div>
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
</section>



<section class="py-5" style="display: none">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="">
                <img src="./images/project-image-1.webp" class="img-fluid">
                <div class="inner p-5 bg-light">
                    <h3 class="statliches mb-4">Private Party</h3>
                    <p>
                        Who does not like to mix their drinks at a party? Become your own bartender and enjoy
                        the most fascinating non-alcoholic mixes by Litt. You will remember the party forever.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="">
                <img src="./images/project-image-2.webp" class="img-fluid">
                <div class="inner p-5 bg-light">
                    <h3 class="statliches mb-4">Birthday Party</h3>
                    <p>
                        Birthday parties are always special and Litt non-alcoholic mixers will ensure that the atmosphere is charged with excitement and high-spirited conversation.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
</section>



@section('script')
    
@endsection


