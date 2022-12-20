 {{-- Quick View Start --}}
 @extends('frontend.layouts.app')

@section('frontend-main')
 
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-product mfp-fade mfp-ready" tabindex="-1" style="overflow: hidden auto;"><div class="mfp-container mfp-s-ready mfp-inline-holder"><div class="mfp-content"><div class="product product-single product-popup">
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
                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<button title="Close (Esc)" type="button" class="mfp-close">×</button></div></div><div class="mfp-preloader">Loading...</div></div></div>

@endsection
{{-- Quick View End --}}