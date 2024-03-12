
<!doctype html>
<html lang="en">

<head>
    <!-- seo activities -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="b3JBEB_Tp6NzGBZBo-wCS3L3RNdS1WNSiqZdCdt0gDw" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property='og:title' content="Lokomoko mocktails" />
    <meta property='og:image' content='https://www.thelokomoko.com/product/img1.jpg' />
    <meta property='og:description' content='The Lokomoko mocktails' />
    <meta property='og:url' content='ashiqulemu.netlify.app' />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website' />
    <title>Lokomoko</title>
    <link rel="icon" href="https://www.thelokomoko.com/product/img1.jpg">

    <!-- css -->
    <link href="{{ asset('assets/frontend/css/bootstrap-5.2.3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css')}}" />

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick-theme.css')}}" />

    <!--js animation -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- iconify icon -->
    <script src="{{ asset('assets/frontend/js/iconify.min.js')}}"></script>
</head>

<body onscroll="scroller()">

    @php
        $companydetails = \App\Models\CompanyDetail::first();
    @endphp

    <!-- site header start -->
    @if (URL::current() == "https://www.localhost/work/lokomoko")
        
    @include('frontend.inc.header')
    @else
    @include('frontend.inc.single_header')
    @endif
    <!-- site header end -->

    @yield('content')

    <!-- site footer start -->

    @include('frontend.inc.footer')

    <!-- jQuery -->
    {{-- <script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- latest js bootstrap-5 -->
    <script src="{{ asset('assets/frontend/js/bootstrap-5.2.3-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/app.js')}}"></script>

    @yield('script')

    <script type="text/javascript">
   
        $(".cart_update").change(function (e) {
            e.preventDefault();
       
            var ele = $(this);
       
            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                   window.location.reload();
                }
            });
        });
       
        $(".cart_remove").click(function (e) {
            e.preventDefault();
       
            var ele = $(this);
            
       
            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id"),
                        price: ele.parents("tr").attr("data-price"),
                        qty: ele.parents("tr").attr("data-qty")
                    },
                    success: function (response) {
                        console.log(response);
                          $(".msgshow").html(response.message);
                          window.setTimeout(function(){location.reload()},2000)
                    }
                });
            }
        });
       
    </script>
</body>

</html>