<html>
<head>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>
    <!-- Theme JavaScript -->
    <script src="{{asset('js/clean-blog.min.js')}}"></script>


    <tittle>@yield('tittle')| My Blog</tittle>
</head>
        <body>
        @include('layouts.partials.navigation')
<div class="container">
    @yield('content')
</div>
</body>
</html>