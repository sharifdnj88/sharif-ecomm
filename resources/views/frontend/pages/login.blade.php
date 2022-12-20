@extends('frontend.layouts.app')
@section('frontend-main')
@include('frontend.layouts.headerr')
    <!-- Start of Main -->
    <main class="main login-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0">My Account</h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('home.page')}}">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <div class="page-content">
            <div class="container">
                <div class="login-popup">
                    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                            <li class="nav-item">
                                <a href="#sign-in" class="nav-link active">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sign-up" class="nav-link">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content card-body">
                            <div class="tab-pane active" id="sign-in">
                                @include('validate')
                                <form action="{{route('customer.login')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email / Mobile *</label>
                                        <div class="my-3" style="display: flex">
                                            <input  name="email" type="text" class="form-control bc" placeholder="Email">
				                            <p  class="bc" style="margin:13px 0px 8px -30px "></p>
                                        </div>                                        
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password *</label>
                                        <div class="my-3" style="display: flex">
                                            <input name="password" type="password" class="form-control de" placeholder="Password">
				                            <p  class="de" style="margin:13px 0px 8px -30px"></p>
                                        </div>
                                    </div>   
                                    <div class="form-checkbox d-flex align-items-center justify-content-between">                                        
                                        <a href="{{route('customer.forgot.password.page')}}">Forgot your password?</a>
                                    </div>
                                    <button type="submit" style="width: 100%" class="btn btn-primary">Sign In</button>
                                </form>

                            </div>
                            
                            <div class="tab-pane" id="sign-up">
                                @include('validate')
                                <form action="{{route('customer.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Username * <span style="color: #336699 !important">max:10</span> </label>
                                        <div class="my-3" style="display: flex">
                                            <input id="aa" name="name" type="text" class="form-control ab" placeholder="Username">
                                            <p id="aa" class="ab" style="margin:13px 0px 8px -30px "></p>
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <div class="my-3" style="display: flex">
                                            <input id="bb" name="email" type="email" class="form-control bc" placeholder="Email">
				                            <p id="bb" class="bc" style="margin:13px 0px 8px -30px "></p>
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile *</label>
                                        <div class="my-3" style="display: flex">
                                            <input name="phone" type="number" class="form-control bc" placeholder="Mobile number">
				                            <p class="bc" style="margin:13px 0px 8px -30px "></p>
                                        </div>                                        
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password *</label>
                                        <div class="my-3" style="display: flex">
                                            <input id="dd" name="password" type="password" class="form-control de" placeholder="Password">
				                            <p id="dd" class="de" style="margin:13px 0px 8px -30px"></p>
                                        </div>
                                    </div>                               
                                    <button id="btn" type="submit" style="width: 100%" class="btn btn-primary">Register</button>
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