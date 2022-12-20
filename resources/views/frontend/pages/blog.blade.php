@extends('frontend.layouts.app')


@section('frontend-main')
@include('frontend.layouts.headerr')
<?php
    $posts = App\Models\Post::all();
?>
<main class="main mb-10 pb-1">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav container">
        <ul class="breadcrumb bb-no">
            <li><a href="{{route('home.page')}}">Home</a></li>
            <li>Products</li>
        </ul>
    </nav>
    <!-- End of Breadcrumb -->
    
    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content">
                    <div class="product product-single row">
                        <div class="col-md-6 mb-6">
                            <div class="product-gallery product-gallery-sticky">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">

                                    <div class="swiper-wrapper " id="swiper-wrapper-84e6b903102e8e333" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                        
                                        @php
                                            $featured = json_decode($single_post -> featured);
                                        @endphp
                                        {{-- For Gallery Post --}}
                                        @if($featured -> post_type == 'Standard')
                                        <div class="swiper-slide " role="group" aria-label="1 / 6" style="width: 455px;">
                                            <figure class="product-image" style="position: relative; overflow: hidden; cursor: pointer;">
                                            <img src="{{url('storage/posts/' .$featured -> standard)}}" data-zoom-image="{{url('storage/posts/' .$featured -> standard)}}" alt="Electronics Black Wrist Watch" width="488" height="549"></figure>
                                        </div>
                                        @endif
                                        
                                    </div>
                                    <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-84e6b903102e8e333" aria-disabled="false"></button>
                                    <button class="swiper-button-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-84e6b903102e8e333" aria-disabled="true"></button>
                                    <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <div class="product-thumbs-wrap swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="product-thumbs swiper-wrapper   " id="swiper-wrapper-5364863a8ee808f2" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                        
                                        <div class="product-thumb swiper-slide swiper-slide-thumb-active swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 6" style="width: 106.25px; margin-right: 10px;">
                                            <img src="{{url('storage/posts/' .$single_post -> photo)}}" data-zoom-image="{{url('storage/posts/' .$featured -> standard)}}" alt="Electronics Black Wrist Watch" width="488" height="549">
                                        </div>

                                    </div>
                                    <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-5364863a8ee808f2" aria-disabled="false"></button>
                                    <button class="swiper-button-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-5364863a8ee808f2" aria-disabled="true"></button>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-6">
                            <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                <h1 class="product-title">{{ $single_post -> title }}</h1>
                                <div class="product-bm-wrapper">
                                    <figure class="brand">
                                        <img src="{{asset('frontend/assets/images/products/brand/brand-1.jpg')}}" alt="Brand" width="102" height="48">
                                    </figure>
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category:
                                                <span class="product-category"><a href="#">{{ $single_post -> title }}</a></span>                                                
                                        </div>
                                        <div class="product-sku">
                                            SKU: <span>{{ $single_post -> pcount }}</span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="product-divider">

                                <div class="product-price">
                                    @if($single_post -> rprice==null)
                                    <ins class="new-price">{{ $single_post -> sprice }} tk</ins>
                                    @else
                                    <ins class="new-price">{{ $single_post -> sprice }} tk</ins>
                                    <del class="old-price">{{ $single_post -> rprice }} tk</del>
                                    @endif
                                </div>

                                
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                        Reviews)</a>
                                </div>

                                <div class="product-short-desc">
                                    <ul class="list-type-check list-style-none">
                                        <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                        <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                        <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                    </ul>
                                </div>

                                <hr class="product-divider">
                                
                                {{-- <div class="product-variation-price">
                                    <span>{{ $single_post -> sprice }} taka</span>
                                </div> --}}

                                <div class="sticky-content-wrapper"><div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="product-form container">
                                        <div class="product product-list-sm mr-auto">
                                            <figure class="product-media">
                                                {{-- <img src="{{url('storage/posts/' .$featured -> standard)}}" alt="Product" width="85" height="85"> --}}
                                            </figure>
                                            <div class="product-details pt-0 pl-2 pr-2">
                                                {{-- <h4 class="product-name font-weight-normal mb-1">Electronics Black Wrist Watch</h4> --}}
                                            <div class="product-price mb-0">
                                                @if ( $single_post -> sprice  )
                                                {{-- <div class="product-price"><ins class="new-price">{{ $single_post -> rprice }}TK</ins></div> --}}
                                                @else
                                                    <div class="product-price"><ins class="new-price">{{ $single_post -> rprice }}TK</ins></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @include('validate')
                                    <form action="{{route('add.cart', $single_post -> id)}}" style="display: flex" method="POST">
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
                                        
                                    </div>
                                </div>
                            </div>

                                <div class="social-links-wrapper">
                                    <div class="social-links">
                                        <div class="social-icons social-no-color border-thin">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
                <div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">
                    <div class="widget widget-icon-box mb-6">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Free Shipping &amp; Returns</h4>
                                <p>For all orders over $99</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Secure Payment</h4>
                                <p>We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                <p>Any back within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Widget Icon Box -->

                    <div class="widget widget-banner mb-9">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="{{asset('frontend/assets/images/shop/banner3.jpg')}}" alt="Banner" width="266" height="220" style="background-color: #1D2D44;">
                            </figure>
                            <div class="banner-content">
                                <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                    40<sup class="font-weight-bold">%</sup><sub class="font-weight-bold text-uppercase ls-25">Off</sub>
                                </div>
                                <h4 class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                    Ultimate Sale</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End of Widget Banner -->

                    @php
                        $posts = App\Models\Post::latest() -> take(3) -> get();
                    @endphp
         
                    <div class="widget widget-products">
                        <div class="title-link-wrapper mb-2">
                            <h4 class="title title-link font-weight-bold">More Products</h4>
                        </div>

                        <div class="swiper nav-top">
                            <div class="swiper-container swiper-theme nav-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                'slidesPerView': 1,
                                'spaceBetween': 20,
                                'navigation': {
                                    'prevEl': '.swiper-button-prev',
                                    'nextEl': '.swiper-button-next'
                                }
                            }">
                                <div class="swiper-wrapper" id="swiper-wrapper-8d7cdfe734b1aebe" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="widget-col swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" style="width: 280px; margin-right: 20px;">
                                        
                                        
                                        @foreach ($posts as $post)
                                        <div class="product product-widget">
                                            @php
                                            $featured = json_decode($post -> featured);
                                        @endphp
                                        {{-- For Standard Post --}}
                                        @if($featured -> post_type == 'Standard')
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{url('storage/posts/' .$featured -> standard)}}" alt="Product" width="100" height="113">
                                                </a>
                                            </figure>
                                            @endif
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Smart Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top">5.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$80.00 - $90.00</div>
                                            </div>
                                        </div>
                                        @endforeach                                       
                                    </div>
                                </div>
                                <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-8d7cdfe734b1aebe" aria-disabled="false"></button>
                                <button class="swiper-button-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-8d7cdfe734b1aebe" aria-disabled="true"></button>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
@include('frontend.layouts.footer')
@endsection