<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Sharif-Wolmart</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="frontend/image/png" href="{{asset('frontend/assets/images/icons/favicon.png')}}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'frontend/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="{{asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/assets/fonts/wolmart87d5.woff?png09e')}}" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/nouislider/nouislider.min.css')}}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/demo1.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">

    {{-- Owl Carosal --}}
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/owl/owl.carousel.min.css')}}">

    

</head>
<body class="home">
    @include('sweetalert::alert')

    @section('frontend-main')        
    @show






    
<!-- Start of Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
    <a href="{{route('home.page')}}" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    <a href="#" class="sticky-link">
        <i class="w-icon-category"></i>
        <p>Shop</p>
    </a>
    <a href="{{route('user.account')}}" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="{{route('show.cart')}}" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Cart</p>
        </a>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Search</p>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
            r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg> </a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="{{route('home.page')}}">Home</a></li>
                    <li>
                        <a href="#">Shop</a>
                        <ul>
                            <li>
                                <a href="#">Shop Pages</a>
                                <ul>
                                    <li><a href="#">Banner With Sidebar</a></li>
                                    <li><a href="#">Boxed Banner</a></li>
                                    <li><a href="#">Full Width Banner</a></li>
                                    <li><a href="#">Horizontal Filter<span
                                                class="tip tip-hot">Hot</span></a></li>
                                    <li><a href="#">Off Canvas Sidebar<span
                                                class="tip tip-new">New</span></a></li>
                                    <li><a href="#">Infinite Ajax Scroll</a></li>
                                    <li><a href="#">Right Sidebar</a></li>
                                    <li><a href="#">Both Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Shop Layouts</a>
                                <ul>
                                    <li><a href="#">3 Columns Mode</a></li>
                                    <li><a href="#">4 Columns Mode</a></li>
                                    <li><a href="#">5 Columns Mode</a></li>
                                    <li><a href="#">6 Columns Mode</a></li>
                                    <li><a href="#">7 Columns Mode</a></li>
                                    <li><a href="#">8 Columns Mode</a></li>
                                    <li><a href="#">List Mode</a></li>
                                    <li><a href="#">List Mode With Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Pages</a>
                                <ul>
                                    <li><a href="product-variable.html">Variable Product</a></li>
                                    <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                    <li><a href="product-accordion.html">Data In Accordion</a></li>
                                    <li><a href="product-section.html">Data In Sections</a></li>
                                    <li><a href="product-swatch.html">Image Swatch</a></li>
                                    <li><a href="product-extended.html">Extended Info</a>
                                    </li>
                                    <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                    <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                class="tip tip-new">New</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layouts</a>
                                <ul>
                                    <li><a href="product-default.html">Default<span
                                                class="tip tip-hot">Hot</span></a></li>
                                    <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                    <li><a href="product-grid.html">Grid Images</a></li>
                                    <li><a href="product-masonry.html">Masonry</a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                    <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="vendor-dokan-store.html">Vendor</a>
                        <ul>
                            <li>
                                <a href="#">Store Listing</a>
                                <ul>
                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vendor Store</a>
                                <ul>
                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="https://www.portotheme.com/html/wolmart/blog-grid.html">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="post-single.html">Single Post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.html">Pages</a>
                        <ul>

                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="error-404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements.html">Elements</a>
                        <ul>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-titles.html">Titles</a></li>
                            <li><a href="element-typography.html">Typography</a></li>
                            <li><a href="element-categories.html">Product Category</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-accordions.html">Accordions</a></li>
                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonials.html">Testimonials</a></li>
                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                            <li><a href="element-instagrams.html">Instagrams</a></li>
                            <li><a href="element-cta.html">Call to Action</a></li>
                            <li><a href="element-vendors.html">Vendors</a></li>
                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    <li>
                        <a href="#">
                            <i class="w-icon-tshirt2"></i>Fashion
                        </a>
                        <ul>
                            <li>
                                <a href="#">Women</a>
                                <ul>
                                    <li><a href="#">New Arrivals</a>
                                    </li>
                                    <li><a href="#">Best Sellers</a>
                                    </li>
                                    <li><a href="#">Trending</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Accessories</a>
                                    </li>
                                    <li><a href="#">Jewlery &
                                            Watches</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Men</a>
                                <ul>
                                    <li><a href="#">New Arrivals</a>
                                    </li>
                                    <li><a href="#">Best Sellers</a>
                                    </li>
                                    <li><a href="#">Trending</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Accessories</a>
                                    </li>
                                    <li><a href="#">Jewlery &
                                            Watches</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-home"></i>Home & Garden
                        </a>
                        <ul>
                            <li>
                                <a href="#">Bedroom</a>
                                <ul>
                                    <li><a href="#">Beds, Frames &
                                            Bases</a></li>
                                    <li><a href="#">Dressers</a></li>
                                    <li><a href="#">Nightstands</a>
                                    </li>
                                    <li><a href="#">Kid's Beds &
                                            Headboards</a></li>
                                    <li><a href="#">Armoires</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Living Room</a>
                                <ul>
                                    <li><a href="#">Coffee Tables</a>
                                    </li>
                                    <li><a href="#">Chairs</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li><a href="#">Futons & Sofa
                                            Beds</a></li>
                                    <li><a href="#">Cabinets &
                                            Chests</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Office</a>
                                <ul>
                                    <li><a href="#">Office Chairs</a>
                                    </li>
                                    <li><a href="#">Desks</a></li>
                                    <li><a href="#">Bookcases</a></li>
                                    <li><a href="#">File Cabinets</a>
                                    </li>
                                    <li><a href="#">Breakroom
                                            Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Kitchen & Dining</a>
                                <ul>
                                    <li><a href="#">Dining Sets</a>
                                    </li>
                                    <li><a href="#">Kitchen Storage
                                            Cabinets</a></li>
                                    <li><a href="#">Bashers Racks</a>
                                    </li>
                                    <li><a href="#">Dining Chairs</a>
                                    </li>
                                    <li><a href="#">Dining Room
                                            Tables</a></li>
                                    <li><a href="#">Bar Stools</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-electronics"></i>Electronics
                        </a>
                        <ul>
                            <li>
                                <a href="#">Laptops &amp; Computers</a>
                                <ul>
                                    <li><a href="#">Desktop
                                            Computers</a></li>
                                    <li><a href="#">Monitors</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Hard Drives &amp;
                                            Storage</a></li>
                                    <li><a href="#">Computer
                                            Accessories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">TV &amp; Video</a>
                                <ul>
                                    <li><a href="#">TVs</a></li>
                                    <li><a href="#">Home Audio
                                            Speakers</a></li>
                                    <li><a href="#">Projectors</a></li>
                                    <li><a href="#">Media Streaming
                                            Devices</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Digital Cameras</a>
                                <ul>
                                    <li><a href="#">Digital SLR
                                            Cameras</a></li>
                                    <li><a href="#">Sports & Action
                                            Cameras</a></li>
                                    <li><a href="#">Camera Lenses</a>
                                    </li>
                                    <li><a href="#">Photo Printer</a>
                                    </li>
                                    <li><a href="#">Digital Memory
                                            Cards</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cell Phones</a>
                                <ul>
                                    <li><a href="#">Carrier Phones</a>
                                    </li>
                                    <li><a href="#">Unlocked Phones</a>
                                    </li>
                                    <li><a href="#">Phone & Cellphone
                                            Cases</a></li>
                                    <li><a href="#">Cellphone
                                            Chargers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-furniture"></i>Furniture
                        </a>
                        <ul>
                            <li>
                                <a href="#">Furniture</a>
                                <ul>
                                    <li><a href="#">Sofas & Couches</a>
                                    </li>
                                    <li><a href="#">Armchairs</a></li>
                                    <li><a href="#">Bed Frames</a></li>
                                    <li><a href="#">Beside Tables</a>
                                    </li>
                                    <li><a href="#">Dressing Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Lighting</a>
                                <ul>
                                    <li><a href="#">Light Bulbs</a>
                                    </li>
                                    <li><a href="#">Lamps</a></li>
                                    <li><a href="#">Celling Lights</a>
                                    </li>
                                    <li><a href="#">Wall Lights</a>
                                    </li>
                                    <li><a href="#">Bathroom
                                            Lighting</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Home Accessories</a>
                                <ul>
                                    <li><a href="#">Decorative
                                            Accessories</a></li>
                                    <li><a href="#">Candals &
                                            Holders</a></li>
                                    <li><a href="#">Home Fragrance</a>
                                    </li>
                                    <li><a href="#">Mirrors</a></li>
                                    <li><a href="#">Clocks</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Garden & Outdoors</a>
                                <ul>
                                    <li><a href="#">Garden
                                            Furniture</a></li>
                                    <li><a href="#">Lawn Mowers</a>
                                    </li>
                                    <li><a href="#">Pressure
                                            Washers</a></li>
                                    <li><a href="#">All Garden
                                            Tools</a></li>
                                    <li><a href="#">Outdoor Dining</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-heartbeat"></i>Healthy & Beauty
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-gift"></i>Gift Ideas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-gamepad"></i>Toy & Games
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-ice-cream"></i>Cooking
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-ios"></i>Smart Phones
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-camera"></i>Cameras & Photo
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="w-icon-ruby"></i>Accessories
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="font-weight-bold text-primary text-uppercase ls-25">
                            View All Categories<i class="w-icon-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Mobile Menu -->

<!-- Start of Newsletter popup -->
<div class="newsletter-popup mfp-hide">
    <div class="newsletter-content">
        <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
        <h2 class="ls-25">Sign up to Wolmart</h2>
        <p class="text-light ls-10">Subscribe to the Wolmart market newsletter to
            receive updates on special offers.</p>
        <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
            <input type="email" class="form-control email font-size-md" name="email" id="email2"
                placeholder="Your email address" required="">
            <button class="btn btn-dark" type="submit">SUBMIT</button>
        </form>
        <div class="form-checkbox d-flex align-items-center">
            <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                required="">
            <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
        </div>
    </div>
</div>
<!-- End of Newsletter popup -->


    <!-- Plugin JS File -->
    <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/zoom/jquery.zoom.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/skrollr/skrollr.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/sticky/sticky.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/zoom/jquery.zoom.js')}}"></script>

    <!-- Swiper JS -->
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('frontend/assets/js/main.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

    {{-- OWL carosal js --}}
    <script src="{{asset('frontend/owl/owl.carousel.min.js')}}"></script>

    {{-- Sweet Alert CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
      items:5,
      loop:true,
      autoplay:true,
      margin:8,
      autoplayTimeout:2000,
      autoplayHoverPause:true
});
    </script>


 <script>
    $('p#userlogout').click(function(){
        $('a#userlog').slideToggle(800);
    });
 </script>

<script>
    $('#indhaka').click(function(){
        `$totalprice = $totalprice + $cart ->sprice + $cart->indhaka`
    });
    $('#outdhaka').click(function(){
        `$totalprice = $totalprice + $cart ->sprice + $cart->outdhaka`
    });
 </script>

 <script>
    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title:"Are you sure to cancel  this product",
            text:"You will not be able to revert this!",
            icon:"warning",
            buttons:true,
            dangerMode:true,
        })
        .then((willCancel) => {
            if(willCancel){

                window.location.href = urlToRedirect;
            }
        });
        
    }
 </script>

 <script>
    (function($){
$(document).ready(function(){

//  Start Code Here

    let ab;
    let bc;
    let cd;
    let de;
    $('input#btn').click(function(){
        ab = $('input.ab').val();
        bc = $('input.bc').val();
        cd = $('input.cd').val();
        de = $('input.de').val();


    //  AB Start

    if( ab ==''){
        $('input.ab').css('border', 'red');
        $('p#aa').html('<i class="fas fa-exclamation"></i>');
            $('p#aa').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px',
            });
    }else{
        // $('p.ab').html('');
        $('input.ab').css('border-color', '#555');
        $('p#aa').html('');
            $('p#aa').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
    }

    // AB End

    // BC Start

    if( bc ==''){
        // $('p.ab').html('<span style="color:red;font-size:12px;"> * Required</span>');
        // $('p.ab').css('margin-left', '8px');
        $('input.bc').css('border-color', 'red');
        $('p#bb').html('<i class="fas fa-exclamation"></i>');
            $('p#bb').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
    }else{
        // $('p.ab').html('');
        $('input.bc').css('border-color', '#555');
        $('p#bb').html('');
            $('p#bb').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
    }

    // BC End

    // CD Start

    if( cd ==''){
        // $('p.ab').html('<span style="color:red;font-size:12px;"> * Required</span>');
        // $('p.ab').css('margin-left', '8px');
        $('input.cd').css('border-color', 'red');
        $('p#cc').html('<i class="fas fa-exclamation"></i>');
            $('p#cc').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
    }else{
        // $('p.ab').html('');
        $('input.cd').css('border-color', '#555');
        $('p#cc').html('');
            $('p#cc').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
    }

    // CD End

    // DE Start

    if( de ==''){
        // $('p.ab').html('<span style="color:red;font-size:12px;"> * Required</span>');
        // $('p.ab').css('margin-left', '8px');
        $('input.de').css('border-color', 'red');
        $('p#dd').html('<i class="fas fa-exclamation"></i>');
            $('p#dd').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
    }else{
        // $('p.ab').html('');
        $('input.de').css('border-color', '#555');
        $('p#dd').html('');
            $('p#dd').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
    }

    // DE End



    });


    $('.card-body input').blur(function(){



        let said = $(this).val();

        if( said =='' ){
            $(this).css('border-color', 'red');
        }else{
            $(this).css('border-color', '');
        }


    });

    $('.card-body input').keyup(function(){

        let said = $(this).val();

        if( said =='' ){
            $(this).css('border-color', 'red');
        }else{
            $(this).css('border-color', '');
        }


    });

    //  AA Blur Start

    let aa;
    

    $('input#aa').blur(function(){
         aa = $('input#aa').val();

        if( aa ==''){
            $('p#aa').html('<i class="fas fa-exclamation"></i>');
            $('p#aa').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
        }else{
            $('p#aa').html('');
             $('p#aa').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });          
        }        

    });

    // AA Blur End

    let aaa;
    

    $('input#aa').keyup(function(){
         aaa = $('input#aa').val();

        if( aaa ==''){
            $('p#aa').html('<i class="fas fa-exclamation"></i>');
            $('p#aa').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
        }else{
            $('p#aa').html('');
             $('p#aa').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });          
        }        

    });

    //  BB Blur Start

    let bb;

    $('input#bb').blur(function(){
        bb = $('input#bb').val();

       if( bb ==''){
           $('p#bb').html('<i class="fas fa-exclamation"></i>');
           $('p#bb').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#bb').html('');
          $('p#bb').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });


    let bbb;

    $('input#bb').keyup(function(){
        bbb = $('input#bb').val();

       if( bbb ==''){
           $('p#bb').html('<i class="fas fa-exclamation"></i>');
           $('p#bb').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#bb').html('');
          $('p#bb').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });

    //  BB Blur End

    //  CC Blur Start

    let cc;

    $('input#cc').blur(function(){
        cc = $('input#cc').val();

       if( cc ==''){
           $('p#cc').html('<i class="fas fa-exclamation"></i>');
           $('p#cc').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#cc').html('');
            $('p#cc').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });


    let ccc;

    $('input#cc').keyup(function(){
        ccc = $('input#cc').val();

       if( ccc ==''){
           $('p#cc').html('<i class="fas fa-exclamation"></i>');
           $('p#cc').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#cc').html('');
            $('p#cc').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });

     //  CC Blur End

    // DD Blur Start

    let dd;

    $('input#dd').blur(function(){
        dd = $('input#dd').val();

       if( dd ==''){
           $('p#dd').html('<i class="fas fa-exclamation"></i>');
           $('p#dd').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#dd').html('');
           $('p#dd').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });


    let ddd;

    $('input#dd').keyup(function(){
        ddd = $('input#dd').val();

       if( ddd ==''){
           $('p#dd').html('<i class="fas fa-exclamation"></i>');
           $('p#dd').css({
                'color' : 'white',
                'background-color' : 'red',
                'padding' : '5px 10px',                
                'border-radius' : '50%',
                'line-height' : '10px'
            });
       }else{
           $('p#dd').html('');
           $('p#dd').css({
                'color' : '',
                'background-color' : '',
                'padding' : '',                
                'border-radius' : '',
                'line-height' : ''
            });
       }        

   });

    // DD Blur End

//  End Code Here


});
})(jQuery)
 </script>

 <script>
    loadcart();
    function loadcart(){
        $.ajax({
            method: "GET",
            url: "/load-cart-data",
            success: function (response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // console.log();
            }
        });
    }
 </script>

 <script>
    $('#close').click(function(e){
        e.preventDefault();
        $('#close_mmodal').hide(300);
    });
 </script>


<script>
    /**
 * Vanilla JS Modal compatible with Bootstrap
 * modal-vanilla 0.12.0 <https://github.com/KaneCohen/modal-vanilla>
 * Copyright 2020 Kane Cohen <https://github.com/KaneCohen>
 * Available under BSD-3-Clause license
 */
import EventEmitter from 'events';

let _factory = null;

const _defaults = Object.freeze({
  el: null,               // Existing DOM element that will be 'Modal-ized'.
  animate: true,          // Show Modal using animation.
  animateClass: 'fade',   //
  animateInClass: 'show', //
  appendTo: 'body',       // DOM element to which constructed Modal will be appended.
  backdrop: true,         // Boolean or 'static', Show Modal backdrop blocking content.
  keyboard: true,         // Close modal on esc key.
  title: false,           // Content of the title in the constructed dialog.
  header: true,           // Show header content.
  content: false,         // Either string or an HTML element.
  footer: true,           // Footer content. By default will use buttons.
  buttons: null,          //
  headerClose: true,      // Show close button in the header.
  construct: false,       // Creates new HTML with a given content.
  transition: 300,        //
  backdropTransition: 150 //
});

const _buttons = deepFreeze({
  dialog: [
    {text: 'Cancel',
      value: false,
      attr: {
        'class': 'btn btn-default',
        'data-dismiss': 'modal'
      }
    },
    {text: 'OK',
      value: true,
      attr: {
        'class': 'btn btn-primary',
        'data-dismiss': 'modal'
      }
    }
  ],
  alert: [
    {text: 'OK',
      attr: {
        'class': 'btn btn-primary',
        'data-dismiss': 'modal'
      }
    }
  ],
  confirm: [
    {text: 'Cancel',
      value: false,
      attr: {
        'class': 'btn btn-default',
        'data-dismiss': 'modal'
      }
    },
    {text: 'OK',
      value: true,
      attr: {
        'class': 'btn btn-primary',
        'data-dismiss': 'modal'
      }
    }
  ]
});

const _templates = {
  container: '<div class="modal"></div>',
  dialog: '<div class="modal-dialog"></div>',
  content: '<div class="modal-content"></div>',
  header: '<div class="modal-header"></div>',
  headerClose: '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>',
  body: '<div class="modal-body"></div>',
  footer: '<div class="modal-footer"></div>',
  backdrop: '<div class="modal-backdrop"></div>'
};

function deepFreeze(obj) {
  for (let k in obj) {
    if (Array.isArray(obj[k])) {
      obj[k].forEach(v => {
        deepFreeze(v);
      });
    } else if (obj[k] !== null && typeof obj[k] === 'object') {
      Object.freeze(obj[k]);
    }
  }
  return Object.freeze(obj);
}

function guid() {
  return (((1 + Math.random()) * 0x10000) | 0).toString(16) +
    (((1 + Math.random()) * 0x10000) | 0).toString(16);
}

function data(el, prop, value) {
 let prefix = 'data';
 let elData = el[prefix] || {};
 if (typeof value === 'undefined') {
   if (el[prefix] && el[prefix][prop]) {
     return el[prefix][prop];
   } else {
     var dataAttr = el.getAttribute(`${prefix}-${prop}`);
     if (typeof dataAttr !== 'undefined') {
       return dataAttr;
     }
     return null;
   }
 } else {
   elData[prop] = value;
   el[prefix] = elData;
   return el;
 }
}

function build(html, all) {
  if (html.nodeName) return html;
  html = html.replace(/(\t|\n$)/g, '');

  if (!_factory) {
    _factory = document.createElement('div');
  }

  _factory.innerHTML = '';
  _factory.innerHTML = html;
  if (all === true) {
    return _factory.childNodes;
  } else {
    return _factory.childNodes[0];
  }
}

function calcScrollbarWidth() {
  let inner;
  let width;
  let outerWidth;
  let outer = document.createElement('div');
  Object.assign(outer.style, {
    visibility: 'hidden',
    width: '100px'
  });
  document.body.appendChild(outer);

  outerWidth = outer.offsetWidth;
  outer.style.overflow = 'scroll';

  inner = document.createElement('div');
  inner.style.width = '100%';
  outer.appendChild(inner);

  width = outerWidth - inner.offsetWidth;
  document.body.removeChild(outer);

  return width;
}

function getPath(node) {
  let nodes = [node];
  while (node.parentNode) {
    node = node.parentNode;
    nodes.push(node);
  }
  return nodes;
}

class Modal extends EventEmitter {
  static set templates(templates) {
    this._baseTemplates = templates;
  }

  static get templates() {
    return Object.assign({}, _templates, Modal._baseTemplates || {});
  }

  static set buttons(buttons) {
    this._baseButtons = buttons;
  }

  static get buttons() {
    return Object.assign({}, _buttons, Modal._baseButtons || {});
  }

  static set options(options) {
    this._baseOptions = options;
  }

  static get options() {
    return Object.assign({}, _defaults, Modal._baseOptions || {});
  }

  static get version() {
    return '0.12.0';
  }

  static alert(message, _options = {}) {
    let options = Object.assign({},
      _defaults,
      {
        title:  message,
        content: false,
        construct: true,
        headerClose: false,
        buttons: Modal.buttons.alert
      },
      _options
    );

    return new Modal(options);
  }

  static confirm(question, _options = {}) {
    let options = Object.assign({},
      _defaults,
      {
        title:  question,
        content: false,
        construct: true,
        headerClose: false,
        buttons: Modal.buttons.confirm
      },
      _options
    );

    return new Modal(options);
  }

  constructor(options = {}) {
    super();

    this.id = guid();
    this.el = null;
    this._html = {};
    this._events = {};
    this._visible = false;
    this._pointerInContent = false;
    this._options = Object.assign({}, Modal.options, options);
    this._templates = Object.assign({}, Modal.templates, options.templates || {});
    this._html.appendTo = document.querySelector(this._options.appendTo);
    this._scrollbarWidth = calcScrollbarWidth();

    if (this._options.buttons === null) {
      this._options.buttons = Modal.buttons.dialog;
    }

    if (this._options.el) {
      let el = this._options.el;
      if (typeof this._options.el == 'string') {
        el = document.querySelector(this._options.el);
        if (! el) {
          throw new Error(`Selector: DOM Element ${this._options.el} not found.`);
        }
      }
      data(el, 'modal', this);
      this.el = el;
    } else {
      this._options.construct = true;
    }

    if (this._options.construct) {
      this._render();
    } else {
      this._mapDom();
    }
  }

  _render() {
    let html = this._html;
    let o = this._options;
    let t = this._templates;
    let animate = o.animate ? o.animateClass : false;

    html.container = build(t.container);
    html.dialog = build(t.dialog);
    html.content = build(t.content);
    html.header = build(t.header);
    html.headerClose = build(t.headerClose);
    html.body = build(t.body);
    html.footer = build(t.footer);
    if (animate) html.container.classList.add(animate);

    this._setHeader();
    this._setContent();
    this._setFooter();

    this.el = html.container;

    html.dialog.appendChild(html.content);
    html.container.appendChild(html.dialog);

    return this;
  }

  _mapDom() {
    let html = this._html;
    let o = this._options;

    if (this.el.classList.contains(o.animateClass)) {
      o.animate = true;
    }

    html.container = this.el;
    html.dialog = this.el.querySelector('.modal-dialog');
    html.content = this.el.querySelector('.modal-content');
    html.header = this.el.querySelector('.modal-header');
    html.headerClose = this.el.querySelector('.modal-header .close');
    html.body = this.el.querySelector('.modal-body');
    html.footer = this.el.querySelector('.modal-footer');

    this._setHeader();
    this._setContent();
    this._setFooter();

    return this;
  }

  _setHeader() {
    let html = this._html;
    let o = this._options;

    if (o.header && html.header) {
      if (o.title.nodeName) {
        html.header.innerHTML = o.title.outerHTML;
      } else if (typeof o.title === 'string') {
        html.header.innerHTML = `<h4 class="modal-title">${o.title}</h4>`;
      }
      // Add header close button only to constructed modals.
      if (this.el === null && html.headerClose && o.headerClose) {
        html.header.appendChild(html.headerClose);
      }
      if (o.construct) {
        html.content.appendChild(html.header);
      }
    }
  }

  _setContent() {
    let html = this._html;
    let o = this._options;

    if (o.content && html.body) {
      if (typeof o.content === 'string') {
        html.body.innerHTML = o.content;
      } else {
        html.body.innerHTML = o.content.outerHTML;
      }
      if (o.construct) {
        html.content.appendChild(html.body);
      }
    }
  }

  _setFooter() {
    let html = this._html;
    let o = this._options;

    if (o.footer && html.footer) {
      if (o.footer.nodeName) {
        html.footer.ineerHTML = o.footer.outerHTML;
      } else if (typeof o.footer === 'string') {
        html.footer.innerHTML = o.footer;
      } else if (! html.footer.children.length) {
        o.buttons.forEach((button) => {
          let el = document.createElement('button');
          data(el, 'button', button);
          el.innerHTML = button.text;
          el.setAttribute('type', 'button');
          for (let j in button.attr) {
            el.setAttribute(j, button.attr[j]);
          }
          html.footer.appendChild(el);
        });
      }
      if (o.construct) {
        html.content.appendChild(html.footer);
      }
    }

  }

  _setEvents() {
    let o = this._options;
    let html = this._html;

    this._events.keydownHandler = this._handleKeydownEvent.bind(this);
    document.body.addEventListener('keydown',
      this._events.keydownHandler
    );

    this._events.mousedownHandler = this._handleMousedownEvent.bind(this);
    html.container.addEventListener('mousedown',
      this._events.mousedownHandler
    );

    this._events.clickHandler = this._handleClickEvent.bind(this);
    html.container.addEventListener('click',
      this._events.clickHandler
    );

    this._events.resizeHandler = this._handleResizeEvent.bind(this);
    window.addEventListener('resize',
      this._events.resizeHandler
    );
  }

  _handleMousedownEvent(e) {
    this._pointerInContent = false;
    let path = getPath(e.target);
    path.every(node => {
      if (node.classList && node.classList.contains('modal-content')) {
        this._pointerInContent = true;
        return false;
      }
      return true;
    });
  }

  _handleClickEvent(e) {
    let path = getPath(e.target);
    path.every(node => {
      if (node.tagName === 'HTML') {
        return false;
      }
      if (this._options.backdrop !== true && node.classList.contains('modal')) {
        return false;
      }
      if (node.classList.contains('modal-content')) {
        return false;
      }
      if (node.getAttribute('data-dismiss') === 'modal') {
        this.emit('dismiss', this, e, data(e.target, 'button'));
        this.hide();
        return false;
      }

      if (!this._pointerInContent && node.classList.contains('modal')) {
        this.emit('dismiss', this, e, null);
        this.hide();
        return false;
      }
      return true;
    });

    this._pointerInContent = false;
  }

  _handleKeydownEvent(e) {
    if (e.which === 27 && this._options.keyboard) {
      this.emit('dismiss', this, e, null);
      this.hide();
    }
  }

  _handleResizeEvent(e) {
    this._resize();
  }

  show() {
    let o = this._options;
    let html = this._html;
    this.emit('show', this);

    this._checkScrollbar();
    this._setScrollbar();
    document.body.classList.add('modal-open');

    if (o.construct) {
      html.appendTo.appendChild(html.container);
    }

    html.container.style.display = 'block';
    html.container.scrollTop = 0;

    if (o.backdrop !== false) {
      this.once('showBackdrop', () => {
        this._setEvents();

        if (o.animate) html.container.offsetWidth; // Force reflow

        html.container.classList.add(o.animateInClass);

        setTimeout(() => {
          this._visible = true;
          this.emit('shown', this);
        }, o.transition);
      });
      this._backdrop();
    } else {
      this._setEvents();

      if (o.animate) html.container.offsetWidth; // Force reflow

      html.container.classList.add(o.animateInClass);

      setTimeout(() => {
        this._visible = true;
        this.emit('shown', this);
      }, o.transition);
    }
    this._resize();

    return this;
  }

  toggle() {
    if (this._visible) {
      this.hide();
    } else {
      this.show();
    }
  }

  _resize() {
    var modalIsOverflowing =
      this._html.container.scrollHeight > document.documentElement.clientHeight;

    this._html.container.style.paddingLeft =
      ! this.bodyIsOverflowing && modalIsOverflowing ? this._scrollbarWidth + 'px' : '';

    this._html.container.style.paddingRight =
      this.bodyIsOverflowing && ! modalIsOverflowing ? this._scrollbarWidth + 'px' : '';
  }

  _backdrop() {
    let html = this._html;
    let t = this._templates;
    let o = this._options;
    let animate = o.animate ? o.animateClass : false;

    html.backdrop = build(t.backdrop);
    if (animate) html.backdrop.classList.add(animate);
    html.appendTo.appendChild(html.backdrop);

    if (animate) html.backdrop.offsetWidth;

    html.backdrop.classList.add(o.animateInClass);

    setTimeout(() => {
      this.emit('showBackdrop', this);
    }, this._options.backdropTransition);
  }

  hide() {
    let html = this._html;
    let o = this._options;
    let contCList = html.container.classList;
    this.emit('hide', this);

    contCList.remove(o.animateInClass);

    if (o.backdrop) {
      let backCList = html.backdrop.classList;
      backCList.remove(o.animateInClass);
    }

    this._removeEvents();

    setTimeout(() => {
      document.body.classList.remove('modal-open');
      document.body.style.paddingRight = this.originalBodyPad;
    }, o.backdropTransition);

    setTimeout(() => {
      if (o.backdrop) {
        html.backdrop.parentNode.removeChild(html.backdrop);
      }
      html.container.style.display = 'none';

      if (o.construct) {
        html.container.parentNode.removeChild(html.container);
      }

      this._visible = false;
      this.emit('hidden', this);
    }, o.transition);

    return this;
  }

  _removeEvents() {
    if (this._events.keydownHandler) {
      document.body.removeEventListener('keydown',
        this._events.keydownHandler
      );
    }

    this._html.container.removeEventListener('mousedown',
      this._events.mousedownHandler
    );

    this._html.container.removeEventListener('click',
      this._events.clickHandler
    );

    window.removeEventListener('resize',
      this._events.resizeHandler
    );
  }

  _checkScrollbar() {
    this.bodyIsOverflowing = document.body.clientWidth < window.innerWidth;
  }

  _setScrollbar() {
    this.originalBodyPad = document.body.style.paddingRight || '';
    if (this.bodyIsOverflowing) {
      let basePadding = parseInt(this.originalBodyPad || 0, 10);
      document.body.style.paddingRight = basePadding + this._scrollbarWidth + 'px';
    }
  }
}

export default Modal;
</script>

{{-- <script>
  $("a#show_data").click(function(e){
    e.preventDefault();
  });
</script> --}}

</body>


</html>