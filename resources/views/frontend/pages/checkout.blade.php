@extends('frontend.layouts.app')


@section('frontend-main')

    @include('frontend.layouts.headerr')
    <!-- Start of Main -->
        <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="#">Shopping Cart</a></li>
                        <li class="active"><a href="#">Checkout</a></li>
                        <li><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    @include('validate')
                    <form class="form checkout-form" action="{{route('user.cash.order')}}" method="POST">
                        @csrf
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>                                
                                <div class="row gutter-sm">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" class="form-control form-control-md" name="fullname"
                                                 value="{{Auth::guard('Customer') -> user() ->fullname}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="text" class="form-control form-control-md" name="email"
                                                required readonly value="{{Auth::guard('Customer') -> user() ->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input type="text" class="form-control form-control-md" name="address" value="{{Auth::guard('Customer') -> user() ->address}}">
                                </div> 
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" class="form-control form-control-md" name="phone" required value="{{Auth::guard('Customer') -> user() ->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Town / City *</label>
                                            <input type="text" class="form-control form-control-md" name="city" required value="{{Auth::guard('Customer') -> user() ->city}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Zip Code *</label>
                                                <input type="text" class="form-control form-control-md" name="zip_code" required value="{{Auth::guard('Customer') -> user() ->zip_code}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Country *</label>
                                            <input type="text" class="form-control form-control-md" name="country" required value="Bangladesh" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="ordernote" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                                
                            </div>


                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th class="product-name"><b>Product</b></th>
                                                    <th class="product-quantity" style="text-align: center"><span>Quantity</span></th>
                                                    <th class="product-price" style="text-align: center"><span>Price</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $totalprice = 0; ?>
                                                @foreach ($carts as $cart)
                                                <tr>
                                                    <td class="product-name" style="text-align: left">{{$cart ->product_title}}</td>
                                                    <td class="product-quantity" style="text-align: center">{{$cart ->quantity}} pcs</td>                                                    
                                                    <td class="product-price" style="text-align: center">{{$cart ->sprice}} taka</td>
                                                </tr>
                                                <?php $totalprice = $totalprice + $cart ->sprice ?>
                                                @endforeach

                                                <tr>
                                                    <td></td>
                                                    <td ><strong>Total</strong></td>
                                                    <td style="text-align: center"><strong> = {{ $totalprice }} taka</strong></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>

                                        <div class="delivery" style="margin-top: 10px">
                                            <ul class="shipping-methods mb-2">
                                                <li>
                                                    <label class="shipping-title text-dark font-weight-bold">Shipping Charge</label>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="free-shipping" class="custom-control-input" name="delivery_charge" value="100">
                                                        <label for="free-shipping" class="custom-control-label color-dark">In-Side Dhaka 100 tk</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="local-pickup" class="custom-control-input" name="delivery_charge" value="150">
                                                        <label for="local-pickup" class="custom-control-label color-dark">Out-Side Dhaka 150tk</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="delivery" style="margin-top: 10px">
                                            <ul class="shipping-methods mb-2">
                                                <li>
                                                    <label class="shipping-title text-dark font-weight-bold">Payment Methods</label>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" id="flat-rate" required class="custom-control-input" name="delivery_status" value="Cash On Delivery">
                                                        <label for="flat-rate" class="custom-control-label color-dark">Cash On Delivery</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Confirm Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

    @include('frontend.layouts.footer')
</div>
<!-- End of Page-wrapper-->

@endsection