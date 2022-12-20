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
                            <h4 class="card-title">All Orders</h4>
                            <a href="" class="font-weight-bold btn btn-danger">Trash Order <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="card-body">
                            @include('validate')
                            <div class="table-responsive">
                                <table class="table mb-0 text-center data-table-said table-bordered table-info">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>                                            
                                            <th>Product Title</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Payment Status</th>
                                            <th>Delivery Status</th>
                                            <th>Created-Time</th>
                                            <th>Photo</th>
                                            <th>Delivered</th>
                                            <th>Print PDF</th>
                                            <th>SEND Email</th>
                                            <th>Action</th>
                                            <th>Order Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($orders as $item)
                                        @php
                                            $posts = json_decode($item -> photo);
                                        @endphp
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>{{ $item -> name }}</td>                                                
                                                <td>{{ $item -> email }}</td>                                                
                                                <td>{{ $item -> phone }}</td>                                                
                                                <td>{{ $item -> address }}</td>                                         
                                                <td>{{ $item -> product_title }}</td>                                                
                                                <td>{{ $item -> quantity }}</td>                                                
                                                <td>{{ $item -> sprice }} taka</td>                                                
                                                <td>{{ $item -> payment_status }}</td>                                                
                                                <td>{{ $item -> delivery_status }}</td>                                                
                                                <td>{{ $item -> created_at ->diffForHumans() }}</td>
                                                <td> 
                                                    <img style="max-width: 150px;box-shadow:0px 0px 10px 0px rgba(0,0,0,0.5);border-radius:5%;padding:3px;border:1px solid red" src="{{ url('storage/posts/'. $posts -> standard) }}" alt="">
                                                 </td>  
                                                <td>
                                                    @if($item -> delivery_status=='processing')
                                                     <a href="{{route('user.delivered', $item->id)}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure this product is delivered!!!')">Delivered</a>
                                                     @else
                                                     <p style="color: white;border:1px solid black;background-color:black;border-radius:10px;font-weight:bold">Delivered</p>
                                                     @endif
                                                </td>
                                                <td><a href="{{route('user.print', $item->id)}}" class="btn btn-white btn-sm">Print PDF</a></td>
                                                <td><a href="{{route('send.email', $item->id)}}" class="btn btn-dark btn-sm">SEND Email</a></td>
                                                <td>
                                                    <a href="{{route('user.delete', $item->id)}}" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash" ></i></a>
                                                </td>
                                                <td><p>{{ $item -> ordernote }}</p></td>
                                            </tr>
                                        @empty                                            
                                        @endforelse
                                        
                                    </tbody>
                                </table>
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