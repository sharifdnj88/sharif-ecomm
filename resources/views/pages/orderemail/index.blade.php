@extends('admin.layouts.app')

@section('main')

    <!-- Main Wrapper -->
<div class="main-wrapper">
		
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
            
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
        <div class="content container-fluid">
            
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ Auth::guard('admin') -> User() -> name }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Send Email to <span style="color: red">{{$order->email}}</span></h4>
                            <a href="" class="font-weight-bold btn btn-danger">Trash Order <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="card-body">
                            @include('validate')
                            <div class="table-responsive">
                                <form action="{{route('send.user.email', $order->id)}}" method="POST">
                                    @csrf
                                    <div class="my-3">
                                        <label for="">User Name</label>
                                        <input name="uname" type="text" class="form-control" value="Hi, {{$order->name}}">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Message</label>
                                        <input name="message" type="text" class="form-control" value="Just to let you know — we've received your order ID#{{$order->product_id}}, and it is now being processed:">
                                    </div>                                    
                                    <div class="my-3">
                                        <label for="">Product Name</label>
                                        <input name="pnane" type="text" class="form-control" value="Product Name: {{$order->product_title}}">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Product ID</label>
                                        <input name="pid" type="text" class="form-control" value="Product ID: #{{$order->product_id}}">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Product Quantity</label>
                                        <input name="pquantity" type="text" class="form-control" value="Product Quantity: {{$order->quantity}} pcs">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Product Price</label>
                                        <input name="pprice" type="text" class="form-control" value="Product Price: {{$order->sprice}} taka">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Delivery Charge</label>
                                        <input name="dcharge" type="text" class="form-control" value="Delivery Charge: {{$order->delivery_charge}} taka">
                                    </div>
                                    <?php $totalprice = 0; ?>	
                                    <?php $totalprice = $order->delivery_charge + $order ->sprice ?>
                                    <div class="my-3">
                                        <label for="">Total Price</label>
                                        <input name="tprice" type="text" class="form-control" value="Total Price: {{$totalprice}} taka">
                                    </div>
                                    <div class="my-3">
                                        <label for="">Note</label>
                                        <input name="pnote" type="text" class="form-control" value="{{$order->ordernote}} ">
                                    </div>                                  
                                    <div class="my-3">
                                        <button class="btn btn-primary btn-sm" type="submit">Send Email</button>
                                        <a href="{{route('user.order')}}" class="btn btn-warning btn-sm">Back</a>
                                    </div>                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            
        </div>			
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

@endsection