

@extends('frontend.layouts.app')

@section('frontend-main')

@include('frontend.layouts.headerr')

<!-- Start of Main -->
<main class="main checkout">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav" style="background-color: #E3E8EC">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li><h2>Order Complete</h2></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
                <div class="row mb-9">
                    <div class="col-lg-12">
                        <div class="oorder" style="margin-top: 50px">
                            <h3 class="title text-uppercase ls-10">Your Order Details</h3>
                            <h4>Billing Address</h4>
                            <p style="margin: 0px;font-style:italic">{{$order->name}}, {{$order->email}}, {{$order->address}}</p>
                            <p style="font-style:italic">{{$order->city}}, {{$order->zip_code}}, {{$order->country}}</p>                                
                            <div class="ordersm" style="background-color: #E3E8EC;color:black;">
                                <table class="order-table" style="margin: 20px;">
                                    <thead style="text-align: center!important">
                                        <tr>
                                            <th>Product Name</th>
                                              <th>Quantity</th>
                                              <th>Delivery Date</th>
                                              <th style="text-align: center!important">Amount</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalprice =0; ?>
                                        <tr>
                                            <td>{{$order->product_title}}</td>
                                            <td>{{$order->quantity}} pcs</td>
                                            <td>{{ date('F d, Y', strtotime($order->created_at)) }}</td>
                                            <td style="text-align: center!important">{{$order->sprice}} taka</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                            <td><strong>Delivery Charge</strong></td>
                                            <td style="text-align: center!important"><strong>{{$order->delivery_charge}} taka</strong></td>
                                        </tr>
                                        <?php $totalprice = $order->sprice + $order-> delivery_charge?>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                            <td><strong>Total </strong></td>
                                            <td style="text-align: center!important"><strong>{{$totalprice}} taka</strong></td>
                                        </tr>
                                    </tbody>
                                </table>                               
                                <div class="my-3" style="text-align: center;margin-top:5px;">
                                    <a href="{{route('user.account')}}" class="btn btn-primary">Back</a>
                                </div>
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

@endsection
