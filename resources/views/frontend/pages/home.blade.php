@extends('frontend.layouts.app')
@php
    if( isset( $_GET['search'] ) ){
      $key  = $_GET['search'];
        $posts = App\Models\Post::where('title', 'LIKE', '%'.$key.'%') -> orWhere('content', 'LIKE', '%'.$key.'%') -> paginate(2);
    }
@endphp

@section('frontend-main')

<div class="page-wrapper">
    <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
    @include('frontend.layouts.header')

    <!-- Start of Main-->
    <main class="main">
        <section class="intro-section">
            <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                data-swiper-options="{
                'slidesPerView': 1,
                'autoplay': {
                    'delay': 8000,
                    'disableOnInteraction': false
                }
            }">
            @php
                $sliders = App\Models\Slider::latest() -> get();
            @endphp
                <div class="swiper-wrapper">
                    @foreach ($sliders as $item)                       
                    
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                        style="background-image: url(frontend/assets/images/sharif.png); background-color: #ebeef2;background-size: contain, cover; background-repeat: no-repeat; background-position: right;">
                        <div class="container">
                            <figure class="slide-image skrollable slide-animate">
                                <img src="{{url('storage/sliders/' .$item -> photo)}}" alt="Banner"
                                    data-bottom-top="transform: translateY(10vh);"
                                    data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                            </figure>
                            <div class="banner-content y-50 text-right" style="margin-top:10%">
                                <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                    data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'duration': '1s',
                                'delay': '.2s'
                            }">
                                    {{-- Custom <span class="p-relative d-inline-block">Men’s</span> --}}
                                </h5>
                                <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                    data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'duration': '1s',
                                'delay': '.4s'
                            }">
                                    {{-- RUNNING SHOES --}}
                                </h3>
                                <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'duration': '1s',
                                'delay': '.6s'
                                }">
                                    {{-- Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span> --}}
                                </p>

                                <a href="{{url('http://localhost:8000/shop-page')}}"
                                    class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                    data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'duration': '1s',
                                'delay': '.8s'
                            }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                            </div>
                            <!-- End of .banner-content -->
                        </div>
                        <!-- End of .container -->
                    </div>
                    @endforeach
                    <!-- End of .intro-slide1 -->
                </div>
                <div class="swiper-pagination"></div>
                <button class="swiper-button-next"></button>
                <button class="swiper-button-prev"></button>
            </div>
            <!-- End of .swiper-container -->
        </section>
        <!-- End of .intro-section -->

        @include('frontend.layouts.news-letter')

        @php
            $all_post = App\Models\Post::latest() ->get();
        @endphp

        <div class="container">        
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Latest Products</h2>
                <a href="#" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row owl-carousel">
                @foreach ($all_post as $post)
                <div class="product-wrap" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);border-radius:20px!important">
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
                                {{-- <a href="{{route('add.cart', $post -> id)}}" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a> --}}
                                @include('validate')
                                    <form action="{{route('add.cart', $post -> id)}}" style="display: flex" method="POST">
                                        @csrf
                                        <div class="product-qty-form" style="position: relative">
                                            <div class="input-group" style="display: none">
                                                <input class="quantity form-control" name="quantity" type="number" min="1" max="10000000">
                                                <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:85px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px"  class="quantity-plus w-icon-plus"></span>
                                                <span style="background-color: #F4F4F4;width:20px;height:20px;margin-left:110px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px" class="quantity-minus w-icon-minus"></span>
                                            </div>
                                        </div>
                                        <button class="btn-product-icon" style="cursor: pointer" type="submit"><i class="w-icon-cart"></i></button>                                       
                                    </form>
                                <a href="{{route('post.single.page', $post -> slug)}}" id="show_data" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>                               

                            </div>
                        </figure>
                        @endif
                        <div class="product-details" style="border-radius:20px">
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


        </div>

        <div class="container">
            <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                'slidesPerView': 1,
                'loop': false,
                'breakpoints': {
                    '576': {
                        'slidesPerView': 2
                    },
                    '768': {
                        'slidesPerView': 3
                    },
                    '1200': {
                        'slidesPerView': 4
                    }
                }
            }">

            

                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">               


                    <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Secure Shipping & Returns</h4>
                            <p class="text-default">For all orders</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 5 days</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Iocn Box Wrapper -->
        </div>

        <div class="container">        
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Medical &amp; Equipment</h2>
                <a href="#" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>

            @if( $form_type == 'create' )
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
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
                                                <input class="quantity form-control" name="quantity" type="number" min="1" max="10000000">
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

            
            <div class="dvi" style="display:flex;justify-content:space-between">
                <div class="idiv" style="margin-top: 35px">
                    Showing {{$posts->count()}} - {{$posts->total()}} of {{$posts->total()}} Products
                </div>
                {{$posts->links('pages.paginate')}}
            </div>
            @endif    

            


            @if( $form_type == 'edit' )
            <div id="close_mmodal" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-product mfp-fade mfp-ready" tabindex="-1" style="overflow: hidden auto;"><div class="mfp-container mfp-s-ready mfp-inline-holder"><div class="mfp-content"><div class="product product-single product-popup">
                <div class="row gutter-lg">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper " id="swiper-wrapper-daf7c8843cf7ec3a" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 395px;">
                                        @php
                                            $featured = json_decode($product -> featured);
                                        @endphp
                                        <figure class="product-image" style="position: relative; overflow: hidden; cursor: pointer;">
                                            <img src="{{url('storage/posts/' .$featured -> standard)}}" data-zoom-image="{{url('storage/posts/' .$featured -> standard)}}" alt="Electronics Black Wrist Watch" width="488" height="549"></figure>
                                    </div>
                                </div>
                                <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-daf7c8843cf7ec3a" aria-disabled="false"></button>
                                <button class="swiper-button-prev swiper-button-disabled" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-daf7c8843cf7ec3a" aria-disabled="true" disabled=""></button>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="product-thumbs-wrap swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="product-thumbs swiper-wrapper   " id="swiper-wrapper-32f8e9f3aac771038" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                    <div class="product-thumb swiper-slide swiper-slide-thumb-active swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 4" style="width: 91.25px; margin-right: 10px;">
                                        <img src="{{url('storage/posts/' .$product -> photo)}}" alt="Product Thumb" width="103" height="116">
                                    </div>
                                </div>
                                <button class="swiper-button-next swiper-button-disabled" tabindex="-1" aria-label="Next slide" aria-controls="swiper-wrapper-32f8e9f3aac771038" aria-disabled="true" disabled=""></button>
                                <button class="swiper-button-prev swiper-button-disabled" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-32f8e9f3aac771038" aria-disabled="true" disabled=""></button>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                    <div class="col-md-6 overflow-hidden p-relative">
                        <div class="product-details scrollable pl-0">
                            <h2 class="product-title">{{$product->title}}</h2>
                            <div class="product-bm-wrapper">
                                <figure class="brand">
                                    <img src="{{asset('frontend/assets/images/products/brand/brand-1.jpg')}}" alt="Brand" width="102" height="48">
                                </figure>
                                <div class="product-meta">
                                    <div class="product-categories">
                                        Category:
                                        <span class="product-category"><a href="#">Electronics</a></span>
                                    </div>
                                    <div class="product-sku">
                                        SKU: <span>{{$product->pcount}}</span>
                                    </div>
                                </div>
                            </div>
            
                            <hr class="product-divider">
            
                            <div class="product-price">{{$product->sprice}} taka</div>
            
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                            </div>
            
                            <div class="product-short-desc">
                                <ul class="list-type-check list-style-none">
                                    <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                    <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                    <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                </ul>
                            </div>
            
                            <hr class="product-divider">
                            @include('validate')
                            <form action="{{route('add.cart', $product -> id)}}" style="display: flex" method="POST">
                                @csrf
                                <div class="product-qty-form" style="position: relative">
                                    <div class="input-group">
                                        <input class="quantity form-control" name="quantity" type="number" min="1" max="10000000">
                                        <span style="background-color: #eee;width:20px;height:20px;margin-left:85px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px"  class="quantity-plus w-icon-plus"></span>
                                        <span style="background-color: #eee;width:20px;height:20px;margin-left:110px;text-align:center;line-height:21px;color:black;border-radius:10px 10px;cursor: pointer;z-index:9;position:absolute;margin-top:10px" class="quantity-minus w-icon-minus"></span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" style="margin-top: 13px;margin-bottom:20px;font-size:16px" type="submit"><i class="w-icon-cart"></i> Add to Cart</button>                                       
                            </form>
            
                            <div class="social-links-wrapper">
                                <div class="social-links">
                                    <div class="social-icons social-no-color border-thin">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                        <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                        <a href="{{route('home.page')}}" style="border-radius: 20px" class="btn btn-warning btn-sm">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <button title="Close (Esc)" type="button" class="mfp-close" id="close">×</button>
                    </div>
                </div>
            <div class="mfp-preloader">Loading...</div></div></div>
            @endif    


        </div>

       

        

        <!--End of Catainer -->
    </main>

    
    <!-- End of Main -->

 @include('frontend.layouts.footer')
</div>

<!-- End of Page-wrapper-->

@endsection