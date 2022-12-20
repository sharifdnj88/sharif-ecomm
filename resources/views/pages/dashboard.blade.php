@extends('admin.layouts.app')
@section('title', 'Management Dashboard')
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
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>{{$total_product}}</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Total Products</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fe fe-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>{{$total_order}}</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Total Orders</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-danger border-danger">
                                        <i class="fe fe-money"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>{{$total_custom}}</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Total Customers</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-warning border-warning">
                                        <i class="fe fe-folder"></i>
                                    </span>
                                    <div class="dash-count">
                                        <p style="font-weight: bold">{{$total_revenue}} taka</p>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Total Revenue</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-warning border-warning">
                                        <i class="fe fe-folder"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>{{$total_delivered}}</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Total Delivered</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-warning border-warning">
                                        <i class="fe fe-folder"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>{{$total_processing}}</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Order Processing</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
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