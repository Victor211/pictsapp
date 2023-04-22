@extends("layouts.authLayout")
@section("style")

@endsection
@section('content')

<div class="row vh-100 ">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg">
                <div class="card-body">
                    <div class="px-3">
                        {{-- <div class="auth-logo-box">
                            <a href="{{ url('home') }}" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo.png')}}" height="55" alt="logo" class="auth-logo"></a>
                        </div> --}}
                        <img src="{{ URL::asset('assets/images/error-404.png')}}" alt="" class="d-block mx-auto mt-4" height="250">
                        <div class="text-center auth-logo-text mb-4">
                            <h4 class="mt-0 mb-3 mt-5">Al parecer se encuentra perdido...</h4>
                            <a href="{{ url('home') }}" class="btn btn-sm btn-gradient-warning">Volver al Inicio</a> 
                        </div>
                    </div>                                
                </div>                         
            </div>
        </div>
    </div>         
</div>

@endsection

@section('script')

@stop
