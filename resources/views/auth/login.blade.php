@extends('layouts.app')
@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <img class="img-fluid logo-dark mb-2" src="{{ URL::to('assets/img/logo.png') }}" alt="Logo">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form method="POST" action="{{ route('login') }}" class="md-float-material">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter useranme">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cb1">
                                            <label class="custom-control-label" for="cb1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="forgot-link" href="{{ route('forget-password') }}">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-block btn-primary" type="submit">Login</button>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>
                            <div class="social-login mb-3">
                                <span>Login with</span>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"class="google"><i class="fab fa-google"></i></a>
                            </div>
                            <div class="text-center dont-have">Don't have an account yet? <a href="{{route('register')}}">Register</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
