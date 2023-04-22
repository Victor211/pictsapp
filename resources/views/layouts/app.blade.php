<!DOCTYPE html>
<html lang="es">
<head>
    <title>PICTSAPP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    @include("inc.styles")
    @yield("style")
    {{-- @livewireStyles--}}
</head>
<body>
    <div class="topbar">
        @include("inc.nav")
    </div>
    <div class="page-wrapper">
        @include("inc.sidebar")
        <div class="page-content">
            <div class="container-fluid">
                    @yield("content")
                @include("inc.footer")
            </div>
        </div>
    </div>
    @include("inc.scripts")
    
    @yield("script")
    {{-- @livewireScripts --}}
    
    @yield("script-component")

</body>
</html>
