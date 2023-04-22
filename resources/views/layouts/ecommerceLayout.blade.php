<!DOCTYPE html>
<html lang="es">
<head>
    <title>FERBA INGENIERIA</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/ferba (1).png">
    
    @include("inc.styles")
    @yield("style")
</head>
<body>
    <div class="topbar">
        <div class="topbar-left">
            <a href="{{ url('home') }}" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/ferba (1).png') }}" alt="logo-large" class="logo-sm"> 
                </span>
            </a>
        </div>
        <nav class="navbar-custom">    
            <ul class="list-unstyled topbar-nav float-right mb-0">

            </ul>
        </nav>
    </div>
    <div class="page-wrapper">
        {{-- <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu">
            </ul>
        </div> --}}
        <div class="page-content">
            <div class="container-fluid">
                    @yield("content")
                @include("inc.footer")
            </div>
        </div>
    </div>
    @include("inc.scripts")
    
    @yield("script")    

</body>
</html>
