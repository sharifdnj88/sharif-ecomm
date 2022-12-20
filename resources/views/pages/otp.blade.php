@extends('admin.layouts.app')

@section('main')
    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>OTP Verification</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <!-- Form -->
                            @include('validate')
                            <form action="{{route('admin.otp')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input name="otp" class="form-control" type="text" placeholder="OTP">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit OTP</button>
                                </div>
                            </form>
                            <!-- /Form -->
                            
                            <div class="text-center forgotpass"><a href="{{route('login.page')}}">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection