<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/ferba (1).png') }}">

        <!-- App css -->
        <link href="{{ URL::asset('assets/css/bootstrap/bootstrap.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{ URL::asset('assets/css/dist/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/metismenu/metisMenu.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{ URL::asset('assets/css/dist/style.css')}}" rel="stylesheet" type="text/css" />
        @yield('headerStyle')
    </head>
@section('body')
@show
    <body class="account-body accountbg">

        <!-- content -->
        @yield('content')

        <!-- jQuery  -->
        <script src="{{ URL::asset('assets/js/jquery/jquery.js')}}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap/bootstrap.bundle.js')}}"></script>
        <script src="{{ URL::asset('assets/js/sweetalert2/sweetalert2.js')}}"></script><!-- SWEET ALERT 2 -->

        <script src="{{ URL::asset('assets/js/metismenu/metisMenu.js')}}"></script>
        <script src="{{ URL::asset('assets/js/waves/waves.js')}}"></script>    
        <script src="{{ URL::asset('assets/js/slimscroll/jquery.slimscroll.js')}}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('js/app.js') }}"></script>
        
    </body>

</html>