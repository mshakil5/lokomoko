
@extends('frontend.layouts.master')
@section('content')
  

<section class="py-5 default shop-all   ">
    <h2 class="statliches  text-dark mb-0">SHOP</h2>
</section>


<section class="products default">
    <div class="container">
        <div class="row">
            
            @foreach (\App\Models\Product::orderby('id','DESC')->get() as $product)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  text-center mb-5"> 
                <a href="{{route('productDetails', $product->slug)}}" class="text-decoration-none d-block pt-4 position-relative">
                    <span class="badge bg-success text-uppercase  position-absolute top-0 start-0 fs-6 fw-normal py-2 rounded-1 ">Sale!</span>
                    <div >
                        <img src="{{ asset('images/product/'.$product->image)}}" class="img-fluid mb-5">
                        <h5 class="title statliches text-dark text-decoration-none" style="letter-spacing: 0.2px;">
                            {{$product->name}}</h5>
                        <h6 class="text-dark my-3 fw-bold">₹{{$product->pack()->orderBy('price', 'asc')->first()->price}} – ₹{{$product->pack()->orderBy('price', 'desc')->first()->price}}</h6>
                    </div> 
                </a> 
                <a href="{{route('productDetails', $product->slug)}}" class="btn-primary py-3 mt-3 d-inline-block">Select option</a> 
            </div>

            @endforeach
            
       
        </div>
    </div>
</section>

<!-- site footer start -->


@endsection

@section('script')
    
@endsection