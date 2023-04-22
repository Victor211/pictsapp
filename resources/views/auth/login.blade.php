@extends('layouts.authLayout')
@section('headerStyle')

@stop

@section('content')
<div class="row vh-100">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg">
                <div class="card-body">
                    <div class="px-3">
                        <div class="auth-logo-box">
                            <a class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                        </div>
                        <div class="text-center auth-logo-text">
                            <h4 class="mt-0 mb-3 mt-5">PicstApp</h4>
                            <p class="text-muted mb-0">Inicia Sesion para ingresar al Sistema.</p>
                        </div>
                        <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <div class="input-group mb-3">
                                    <span class="auth-form-icon">
                                        <i class="dripicons-user"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <span class="auth-form-icon">
                                        <i class="dripicons-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--end form-group-->
                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit"> INICIAR SESION<i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="account-social text-center mt-4">
                <h6 class="my-4">Diseño y Desarrollo</h6>
                <h6 class="my-4">Victor Avila & Ivan Gamarra</h6>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerScript')
<script type="text/javascript">
    //  $( document ).ready() block.
    $(document).ready(function() {
        document.body.classList.add('bg-card');
    });
</script>
@stop