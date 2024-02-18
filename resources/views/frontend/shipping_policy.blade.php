
@extends('frontend.layouts.master')
@section('content')
    

<section class="banner d-flex align-items-center" style="background-image: url('{{ asset('product/about.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center flex-column d-flex align-items-center justify-content-center">
                <div class="box text-uppercase fw-bold d-flex align-items-center fs-6">
                    <small><a href="{{route('homepage')}}" class="text-white text-decoration-none  fs-6 hover-primary">Home</a></small>
                    <iconify-icon icon="fluent:chevron-right-24-filled" class="text-white mx-2" width="1.2em"
                        height="1.2em"></iconify-icon>
                    <small class="text-white fs-6">Shipping Policy</small>
                </div>
                <h1 class="statliches display-1 text-light">Shipping Policy</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 text-justify">
                <h1 class="statliches mb-4">Shipping Policy</h1>

                {{-- <h5 class="statliches mb-4">A BRIGHT IDEA TAKES PLACE</h5> --}}

                  
    <h3 class="stk-block-heading__text">What are the Shipping Charges?</h3>
    
    
    
    <p>Shipping charges are decided by our logistic partners like Amazon etc.</p>
    
    
    
    <h3>How Long does it take&nbsp;for an Order to get Shipped?</h3>
    
    
    
    <p>All orders get shipped within 3-5 working days and you can expect the delivery in 5-7 working days to reach in all cities in India.</p>
    
    
    
    <h3>How Long does&nbsp;it take&nbsp;for an Order to get Delivered?</h3>
    
    
    
    <p>You can expect the delivery in 5-7 working days to reach in all parts of India.</p>
    
    
    
    <h3>How to Track the Status of my Order?</h3>
    
    
    
    <p>You will receive the tracking link in your email as soon as your order is dispatched. It takes 12 to 24hrs for the status of the shipment to update on the tracking link.</p>
    
    
    
    <h3>How to change an incorrect shipping address?</h3>
    
    
    
    <p>If you have entered a wrong or incorrect shipping address, and if your order has not been dispatched then you can update us with your correct shipping address immediately by emailing us at support@littcocktails.com</p>
    
    
    
    <h3>What is your Return Policy?</h3>
    
    
    
    <p>All shipping and handling charges are non-refundable. All returns made should be aligned with our refund policies and guidelines.</p>

                
            </div>
        </div>
    </div>
</section>




@endsection
@section('script')
    
@endsection





