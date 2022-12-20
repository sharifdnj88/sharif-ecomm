@extends('frontend.layouts.app')

@php
    if( isset( $_GET['search'] ) ){
      $key  = $_GET['search'];
        $posts = App\Models\Post::where('title', 'LIKE', '%'.$key.'%') -> orWhere('content', 'LIKE', '%'.$key.'%') -> paginate(9);
    }
@endphp
@section('frontend-main')
@include('frontend.layouts.headerr')



<div class="shop-content row gutter-lg mb-10" style="margin: 0px 35px 0px 40px">
    <!-- Start of Sidebar, Shop Sidebar -->
    <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
        <!-- Start of Sidebar Overlay -->
        <div class="sidebar-overlay"></div>
        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

        <!-- Start of Sidebar Content -->
        @include('frontend.layouts.shop-sidebar')
        <!-- End of Sidebar Content -->
    </aside>
    <!-- End of Shop Sidebar -->

    <!-- Start of Shop Main Content -->
    <div class="main-content">
        <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
            @foreach ($posts as $post)
                
            
            <div class="product-wrap">
                <div class="product text-center">
                    @php
                        $featured = json_decode($post -> featured);
                    @endphp
                 {{-- For Standard Post --}}
                 @if( $featured -> post_type == 'Standard' )
                 <figure class="product-media">
                     <a href="{{route('post.single.page', $post -> slug)}}">
                         <img src="{{url('storage/posts/' .$featured -> standard)}}" alt="Product" width="300" height="338">
                         <img src="{{url('storage/posts/' .$post -> photo)}}" alt="Product" width="300" height="338">
                     </a>
                     <div class="product-action-vertical">                                
                         @include('validate')
                             <form action="{{route('add.cart', $post -> id)}}" style="display: flex" method="POST">
                                 @csrf
                                 <div class="product-qty-form" style="position: relative">
                                     <div class="input-group" style="display: none">
                                         <input class="quantity form-control" name="quantity" type="number" value="1" min="1" max="10000000">
                                         <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:85px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px"  class="quantity-plus w-icon-plus"></span>
                                         <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:110px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px" class="quantity-minus w-icon-minus"></span>
                                     </div>
                                 </div>
                                 <button class="btn-product-icon" style="cursor: pointer" type="submit"><i class="w-icon-cart"></i></button>                                       
                             </form>
                         <a href="{{route('quick.view', $post -> id)}}" id="show_data" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>                               

                     </div>
                 </figure>
                 @endif
                 <div class="product-details">
                    <h4 class="product-name"><a href="{{route('post.single.page', $post -> slug)}}">{{ $post -> title }}</a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 60%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="{{route('post.single.page', $post -> slug)}}" class="rating-reviews">(1 Reviews)</a>
                    </div>
                    <div class="product-price">
                        @if($post -> rprice==null)
                        <ins class="new-price">{{ $post -> sprice }} tk</ins>
                        @else
                        <ins class="new-price">{{ $post -> sprice }} tk</ins>
                        <del class="old-price">{{ $post -> rprice }} tk</del>
                        @endif
                    </div>
                    
                </div>
                </div>
            </div>
            @endforeach
        </div>

        @php
            $posts = App\Models\Post::paginate(2);
        @endphp
        <div class="dvi" style="display:flex;justify-content:space-between">
            <div class="idiv" style="margin-top: 35px">
                Showing {{$posts->count()}} - {{$posts->total()}} of {{$posts->total()}} Products
            </div>            
            {{$posts->links('pages.paginate')}}    
        </div>
        
    </div>
    
    <!-- End of Shop Main Content -->
</div>



@include('frontend.layouts.footer')
@endsection