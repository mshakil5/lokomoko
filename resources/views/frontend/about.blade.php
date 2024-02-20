
@extends('frontend.layouts.master')
@section('content')
    
@endsection



<section class="banner d-flex align-items-center" style="background-image: url('{{ asset('product/about.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center flex-column d-flex align-items-center justify-content-center">
                <div class="box text-uppercase fw-bold d-flex align-items-center fs-6">
                    <small><a href="{{route('homepage')}}" class="text-white text-decoration-none  fs-6 hover-primary">Home</a></small>
                    <iconify-icon icon="fluent:chevron-right-24-filled" class="text-white mx-2" width="1.2em"
                        height="1.2em"></iconify-icon>
                    <small class="text-white fs-6">About</small>
                </div>
                <h1 class="statliches display-1 text-light">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <h1 class="statliches mb-4 text-center">About Us</h1>
                <h5 class="statliches mb-4 text-center">A BRIGHT IDEA TAKES PLACE</h5>

                <p class="sub-title " style="max-width:90%;">
                    Do you like alcohol-free fruit drinks?<br>
                    You must like lokomoko drinks.
                </p>
                <p class="sub-title text-justify" style="max-width:100%;text-align: justify;">
                    Meet Anthony Vodino, the visionary founder behind Lokomoko, a renowned company specializing in crafting exquisite fruit juices. With a passion for flavor and a commitment to quality, Anthony has curated a lineup of tantalizing options that cater to diverse tastes. At Lokomoko, innovation meets tradition, as Anthony combines classic ingredients like lemon and mint to create refreshing Mojito juice, or blends the sweetness of strawberries and red grapes for the irresistible Red Punch. And let's not forget the tropical allure of Blue Ocean, where blueberry and Curacao harmonize for a truly exotic experience. Under Anthony's leadership, Lokomoko has become synonymous with premium fruit juices that captivate the senses and elevate every occasion.
                </p>
                
                
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


