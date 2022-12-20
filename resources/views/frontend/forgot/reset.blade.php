@extends('frontend.layouts.app')
@section('frontend-main')
@include('frontend.layouts.headerr')


    <!-- Start of Main -->
    <main class="main login-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0">Change Password</h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('home.page')}}">Home</a></li>
                    <li>Change Password</li>
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
                                <h3>Change Password</h3>
                                <p style="line-height:0px">Enter your new Password</p>
                            </div>
                            <div class="tab-pane active" id="sign-in">
                                @include('validate')
                                <form action="{{route('customer.reset.password')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <div class="my-3" style="display: flex">
                                            <input name="email" class="form-control" value="{{ $email }}" type="email" Readonly >
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label>New Password *</label>
                                        <div class="my-3" style="display: flex">
                                            <input name="password" class="form-control" type="password" placeholder="New Password">
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password *</label>
                                        <div class="my-3" style="display: flex">
                                            <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password">
                                        </div>                                        
                                    </div>
                                    <button type="submit" style="width: 100%" class="btn btn-primary">Change password</button>
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