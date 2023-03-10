@extends('frontend.layouts.app')

@section('frontend-main')

@include('frontend.layouts.headerr')
   <!-- Start of Main -->
   <main class="main">
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
                <li><a href="demo1.html">Home</a></li>
                <li>My account</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content pt-2">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">
                <ul class="nav nav-tabs mb-6" role="tablist">
                    <li class="nav-item">
                        <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-orders" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-downloads" class="nav-link">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-addresses" class="nav-link">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-details" class="nav-link">Account details</a>
                    </li>
                    <li class="link-item">
                        <a href="{{route('user.logout')}}">Logout</a>
                    </li>
                </ul>

                <div class="tab-content mb-6">
                    <div class="tab-pane active in" id="account-dashboard">       

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="#account-orders" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-orders">
                                            <i class="w-icon-orders"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Orders</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="#account-downloads" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-download">
                                            <i class="w-icon-download"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Downloads</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="#account-addresses" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-address">
                                            <i class="w-icon-map-marker"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Addresses</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="#account-details" class="link-to-tab">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-account">
                                            <i class="w-icon-user"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Account Details</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                <a href="{{route('user.logout')}}">
                                    <div class="icon-box text-center">
                                        <span class="icon-box-icon icon-logout">
                                            <i class="w-icon-logout"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="text-uppercase mb-0">Logout</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane mb-4" id="account-orders">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-orders">
                                <i class="w-icon-orders"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                            </div>
                        </div>

                        <table class="shop-table account-orders-table mb-6" style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="order-id">Order</th>
                                    <th class="order-date">Date</th>
                                    <th class="order-status">Status</th>
                                    <th class="order-total">Total</th>
                                    <th class="order-actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)                                   
                                
                                <tr>
                                    <td class="order-id">#{{$item->product_id}}</td>
                                    <td class="order-date">{{ date('F d, Y', strtotime($item->created_at)) }}</td>
                                    <td class="order-status">{{$item->delivery_status}}</td>
                                    <td class="order-total">
                                        <span class="order-price">{{$item->sprice}} tk</span> for
                                        <span class="order-quantity"> {{$item->quantity}}</span> item
                                    </td>
                                    <td class="order-action">
                                        <a href="{{route('product.show', $item->id)}}"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
                            Shop<i class="w-icon-long-arrow-right"></i></a>
                    </div>

                    <div class="tab-pane" id="account-downloads">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-downloads mr-2">
                                <i class="w-icon-download"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title ls-normal">Downloads</h4>
                            </div>
                        </div>
                        <p class="mb-4">No downloads available yet.</p>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
                            Shop<i class="w-icon-long-arrow-right"></i></a>
                    </div>

                    <div class="tab-pane" id="account-addresses">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-map-marker">
                                <i class="w-icon-map-marker"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title mb-0 ls-normal">Addresses</h4>
                                <hr>
                            </div>
                        </div>
                        <p>The following addresses will be used on the checkout page
                            by default.</p>
                        <div class="row">                            
                            <div class="col-sm-6 mb-6">
                                <div class="ecommerce-address shipping-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
                                    <address class="mb-4">
                                        <table class="address-table">
                                            <tbody>
                                                <tr>
                                                    <th>Name:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->address}}</td>
                                                </tr>
                                                <tr>
                                                    <th>City:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->city}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->country}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Postcode:</th>
                                                    <td>{{Auth::guard('Customer') -> user() ->zip_code}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                    <a href="#"
                                        class="btn btn-link btn-underline btn-icon-right text-primary">Edit your
                                        shipping address<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="account-details">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-account mr-2">
                                <i class="w-icon-user"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
                            </div>
                        </div>
                        <form action="{{route('user.account.profile')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Full Name *</label>
                                        <input type="text" name="fullname" placeholder="enter your nane"
                                            class="form-control form-control-md" value="{{Auth::guard('Customer') -> user() ->fullname}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email *</label>
                                        <input type="text" name="email" value="{{Auth::guard('Customer') -> user() ->email}}"
                                            class="form-control form-control-md" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Phone *</label>
                                        <input type="text" name="phone" placeholder="enter your mobile number"
                                            class="form-control form-control-md" value="{{Auth::guard('Customer') -> user() ->phone}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">City *</label>
                                        <input type="text" name="city" value="{{Auth::guard('Customer') -> user() ->city}}"
                                            class="form-control form-control-md" placeholder="enter your city">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="display-name">Address *</label>
                                <input type="text" id="display-name" name="address" placeholder="enter your address"
                                    class="form-control form-control-md mb-0" value="{{Auth::guard('Customer') -> user() ->address}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Zip Code *</label>
                                        <input type="text" name="zip_code" placeholder="enter your zip code"
                                            class="form-control form-control-md" value="{{Auth::guard('Customer') -> user() ->zip_code}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: 5px">
                                        <label for="lastname">Country *</label>
                                        <input type="text" name="country" value="Bangladesh" readonly
                                            class="form-control form-control-md" placeholder="enter your city">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->
@include('frontend.layouts.footer')

@endsection