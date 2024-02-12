
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
    <meta property='og:title' content="Ashiqul Islam Emu Portfolio" />
    <meta property='og:image' content='./images/ashiqulemu-vue-emu-js.jpg' />
    <meta property='og:description' content='Ashiqul Islam Emu, frontend developer Jashore' />
    <meta property='og:url' content='ashiqulemu.netlify.app' />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website' />
    <title>Lokomoko</title>
    <link rel="icon" href="{{ asset('assets/frontend/images/favi.png')}}">

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
    <script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
    <!-- latest js bootstrap-5 -->
    <script src="{{ asset('assets/frontend/js/bootstrap-5.2.3-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/app.js')}}"></script>

    @yield('script')
</body>

</html>