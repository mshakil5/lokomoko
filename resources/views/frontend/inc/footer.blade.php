<footer class="default">
    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('images/company/'.$companydetails->footer_logo)}}" alt="" class="img-fluid" width="109" height="100">
                <p class="sub-title text-white mt-3">
                    {{$companydetails->footer_content}}
                </p>
            </div>
            <div class="col-lg-3">
                <h4 class="text-light statliches">
                    Quick Links
                </h4>
                <ul>
                    <li><a href="{{route('homepage')}}" data-type="page" data-id="513">Home</a></li>



                    <li><a href="{{route('about')}}" data-type="page" data-id="13">About Us</a></li>



                    <li><a href="{{route('homepage')}}" data-type="page" data-id="514">Services</a>
                    </li>



                    <li><a href="{{route('contact')}}" data-type="page" data-id="17">Contact Us</a>
                    </li>



                    {{-- <li><a href="{{route('homepage')}}" data-type="URL" data-id="{{route('homepage')}}">Blogs</a></li> --}}
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="text-light statliches">
                    Support
                </h4>
                <ul>
                    <li><a href="{{route('privacy')}}" data-type="page" data-id="513">Privacy Policy</a></li>



                    <li><a href="{{route('returnPolicy')}}" data-type="page" data-id="13">Return Policy </a>
                    </li>



                    <li><a href="{{route('shippingPolicy')}}" data-type="page" data-id="514">Shipping
                            Policy</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="text-light statliches">
                    Contact Us
                </h4>
                <p class=" text-white">
                    Address: {{$companydetails->address1}}
                </p>

                <p class="  text-white">
                    Contact No: {{$companydetails->phone1}}
                </p>

                <p class=" text-white">
                    Email: {{$companydetails->email1}}
                </p>
            </div>
        </div>
        


    </div>

</footer>