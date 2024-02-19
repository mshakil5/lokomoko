
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
                    <small class="text-white fs-6">Return Policy</small>
                </div>
                <h1 class="statliches display-1 text-light">Return Policy</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 text-justify">
                <h1 class="statliches mb-4">Return Policy</h1>

                {{-- <h5 class="statliches mb-4">A BRIGHT IDEA TAKES PLACE</h5> --}}

                
                <p>Thank you for your purchase. We hope you are happy with your purchase. However, if you are not completely satisfied with your purchase for any reason, you may return it to us for a full refund. Please see below for more information on our return policy.</p>


                
                
                            
                <p>All returns must be postmarked within 30 days of the purchase date. All returned items must be in new and unused condition, with all original tags and labels attached.</p>
                
                
                
                <div><h3 class="">RETURN PROCESS</h3></div>
                
                
                
                <p>To return an item, please e mail support@thelokomoko.com to obtain a Return Merchandise Authorization (RMA) number. After receiving a RMA number, place the item securely in its original packaging and [include your proof of purchase / the return form provided / other], and mail your return to the following address:</p>
                
                
                
                <p>Velanka Food And Beverages.</p>
                
                
                
                <h3>Attn: Returns</h3>
                
                
                
                <p>601/b Gp No-4453 Near Indian Petrol Pump, Jyoti Nagar,jamboti Road Machhe, Belgaum-590014<br></p>
                
                
                
                <p>Please note, you will be responsible for all return shipping charges. We strongly recommend that you use a trackable method to mail your return. / You may also use the prepaid shipping label enclosed with your package.</p>
                
                
                
                <h3>REFUNDS</h3>
                
                
                
                <p>After receiving your return and inspecting the condition of your item, we will process your refund. Please allow at least 7 days from the receipt of your item to process your refund. Refunds may take 1-2 billing cycles to appear on your credit card statement, depending on your credit card company. We will notify you by email when your return has been processed.</p>
                
                
                
                <h3 class="stk-block-heading__text">QUESTIONS</h3>
                
                
                
                <p>If you have any questions concerning our return policy, please contact us at:</p>
                
                
                
                <p>+91-886-765-7154</p>
                
                
                
                <p>support@thelokomoko.com</p>
                </div>




                
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
    
@endsection





