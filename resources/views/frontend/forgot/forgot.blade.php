@extends('frontend.layouts.app')
@section('frontend-main')
@include('frontend.layouts.headerr')

        <!-- Start of Main -->
        <main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Reset Password</h1>
                </div>
            </div>
            <!-- End of Page Header -->
    
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home.page')}}">Home</a></li>
                        <li>Reset Password</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <div class="tab-content card-body">
                                <div class="card-header" style="text-align: center">
                                    <h3>Forgot Password ?</h3>
                                    <p style="line-height:0px">Enter your email to get a password reset link</p>
                                </div>
                                <div class="tab-pane active" id="sign-in">
                                    @include('validate')
                                    <form action="{{route('customer.forgot.password')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <div class="my-3" style="display: flex">
                                                <input  name="email" type="text" class="form-control bc" placeholder="Email">
                                                <p  class="bc" style="margin:13px 0px 8px -30px "></p>
                                            </div>                                        
                                        </div>
                                        <div class="form-checkbox">                                        
                                            Already have an Account <strong><a href="{{route('user.login.page')}}">Login</a></strong>
                                        </div>
                                        <button type="submit" style="width: 100%" class="btn btn-primary">Forgot password</button>
                                    </form>
    
                                </div>
                                
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->

    @include('frontend.layouts.footer')
@endsection