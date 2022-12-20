@extends('frontend.layouts.app')


@section('frontend-main')

    @include('frontend.layouts.headerr')

    <!-- Start of Main -->
    <main class="main cart">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="active"><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg mb-10">
                    <div class="col-lg-8 pr-lg-4 mb-6">
                        <table class="shop-table cart-table">
                            <thead>
                                <tr>
                                    <th class="product-name"><span>Product</span></th>
                                    <th></th>
                                    <th class="product-price"><span>Price</span></th>
                                    <th class="product-quantity"><span>Quantity</span></th>
                                    <th class="product-subtotal"><span>Action</span></th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center">
                                <?php $totalprice = 0; ?>
                                @foreach ($carts as $cart)
                                @php
                                     $posts = json_decode($cart -> photo);
                                 @endphp
                                <tr>
                                    <td class="product-thumbnail">
                                        <div class="p-relative">
                                            @if( $posts -> post_type == 'Standard' )
                                            <a href="">
                                                <figure>
                                                    <img src="{{url('storage/posts/' .$posts -> standard)}}" alt="product"
                                                        width="300" height="338">
                                                </figure>
                                            </a>
                                            @endif
                                            <a href="{{route('remove.cart', $cart->id)}}" style="position: absolute" class="btn btn-close" onclick="confirmation(event)"><i
                                                    class="fas fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <a href="product-default.html">
                                            {{$cart ->product_title}}
                                        </a>
                                    </td>
                                    <td class="product-price"><span class="amount"> {{$cart ->sprice}} taka</span></td>
                                    {{-- <td class="product-quantity">{{$cart ->quantity}} pcs</td> --}}
                                    <td>
                                        <form action="{{route('add.cart', $cart -> product_id)}}" style="display: flex" method="POST">
                                            @csrf
                                            <div class="product-qty-form" style="position: relative">
                                                <div class="input-group">
                                                    <input class="quantity form-control" name="quantity" type="number" min="1" max="10000000" style="height: 83%">
                                                    <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:60px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:8px"  class="quantity-plus w-icon-plus"></span>
                                                    <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:88px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:8px" class="quantity-minus w-icon-minus"></span>
                                                </div>
                                            </div>
                                            <button class="btn-product-icon" style="cursor: pointer;width: 50%;font-size:13px" type="submit">Update</button>                                       
                                        </form>
                                    </td>
                                    <td class="product-subtotal">
                                        <a href="{{route('remove.cart', $cart->id)}}" class="btn btn-sm shadow" style="color: white;background-color:red" onclick="confirmation(event)"><i class="fa fa-trash" ></i></a>
                                    </td>
                                </tr>
                                <?php $totalprice = $totalprice + $cart ->sprice ?>
                                @endforeach
                               
                            </tbody>
                        </table>

                        <div class="cart-action mb-6">
                            <a href="#" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                            {{-- <button type="submit" class="btn btn-rounded btn-default btn-clear" name="clear_cart" value="Clear Cart">Clear Cart</button> 
                            <button type="submit" class="btn btn-rounded btn-update disabled" name="update_cart" value="Update Cart">Update Cart</button> --}}
                        </div>

                        {{-- <form class="coupon">
                            <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
                            <input type="text" class="form-control mb-4" placeholder="Enter coupon code here..." required />
                            <button class="btn btn-dark btn-outline btn-rounded">Apply Coupon</button>
                        </form> --}}
                    </div>
                    <div class="col-lg-4 sticky-sidebar-wrapper">
                        <div class="sticky-sidebar">
                            <div class="cart-summary mb-4">
                                <h3 class="cart-title text-uppercase">Cart Totals</h3>
                  

                                <hr class="divider mb-6">
                                <div class="order-total d-flex justify-content-between align-items-center">
                                    <label>Total</label>
                                    <span class="ls-50">{{ $totalprice }} taka</span>
                                </div>
                                <a href="{{route('checkout.page')}}"
                                    class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                    Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->

 @include('frontend.layouts.footer')
</div>
<!-- End of Page-wrapper-->

@endsection