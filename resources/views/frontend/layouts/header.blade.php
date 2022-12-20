    <!-- Start of Header -->
    <header class="header">      
        @php
            $product = App\Models\Categorypost::all();
        @endphp

        {{-- Header Top Start --}}
        <div class="header-top">
            <div class="container" id="ht" style="display: flex;justify-content:space-between">
                <div class="said-left">
                    <p class="welcome-msg">Keraniganj (Model Town), Kodomtoli, Dhaka-1310</p>
                </div>
                <div class="said-right" style="display: flex">
                    <!-- End of DropDown Menu -->

                    <div class="social-icons social-icons-colored said-icon" style="color: white">
                        <a href="#" class="social-icon social-facebook w-icon-facebook" style="justify-content: center"></a>
                        <a href="#" class="social-icon social-twitter w-icon-twitter" style="justify-content: center"></a>
                        <a href="#" class="social-icon social-youtube w-icon-youtube" style="justify-content: center"></a>
                    </div>
                    <!-- End of Dropdown Menu -->
                </div>
            </div>
        </div>
        {{-- Header Top End --}}


        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                    </a>
                    <a href="{{route('home.page')}}" class="logo ml-lg-0">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo" width="144" height="45" />
                    </a>
                    <form
                        class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        <div class="select-box">                            
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                @foreach ($product as $item)                               
                                <option value="4">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                            required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">                   
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:+8801738153971" class="w-icon-call"></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="#" class="text-capitalize">Live Chat</a> or :</h4>
                            <a href="tel:+8801738153971"  class="phone-number font-weight-bolder ls-50">+8801738153971</a>
                        </div>
                    </div>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                        <div class="cart-overlay"></div>
                        <a href="{{route('show.cart')}}" class="cart-toggle label-down link">
                            <i class="w-icon-cart">
                                <span class="cart-count">0</span>
                            </i>
                            <span class="cart-label">Cart</span>
                        </a>
                        <div class="dropdown-box">
                            <div class="cart-header">
                                <span>Shopping Cart</span>
                                <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                           @if( Auth::guard('Customer') -> check() )
                           <?php
                           $id = Auth::guard('Customer') -> user() ->id;
                           $carts = App\Models\Cart::where('user_id', $id) ->take(3) ->get();
                       ?>
                       <?php $totalprice = 0; ?>
                       @foreach ($carts as $item)
                       @php
                                $posts = json_decode($item -> photo);
                       @endphp
                       <div class="products" style="position: relative">
                           <div class="product product-cart">
                               <div class="product-detail">
                                   <a href="product-default.html" class="product-name">{{$item->product_title}}</a>
                                   <div class="price-box">
                                       <span class="product-quantity">{{$item->quantity}}</span>
                                       <span class="product-price">{{$item->sprice}} taka</span>
                                   </div>
                               </div>
                               <figure class="product-media">
                                   <a href="product-default.html">
                                       @if( $posts -> post_type == 'Standard' )
                                       <a href="">
                                           <img src="{{url('storage/posts/' .$posts -> standard)}}" alt="product"
                                                   width="94" height="84">
                                       </a>
                                       @endif
                                   </a>
                               </figure>
                               {{-- <button class="btn btn-link btn-close" aria-label="button">
                                   <i class="fas fa-times"></i>
                               </button> --}}
                               <a href="{{route('remove.cart', $item->id)}}" style="position: absolute;padding:0px 0px 0px 4px" class="btn btn-close" onclick="confirmation(event)"><i
                                class="fas fa-times"></i></a>
                           </div>
                       </div>
                       <?php $totalprice = $totalprice + $item ->sprice ?>
                       @endforeach
                       <div class="cart-total">
                           <label>Subtotal:</label>
                           <span class="price">{{ $totalprice }} taka</span>
                       </div>
                           @endif

                           @if( !Auth::guard('Customer') -> check() )
                           <div class="cart-action" style="justify-content:center">
                               <a href="{{route('user.login.page')}}" class="btn btn-dark btn-outline btn-rounded">Log in</a>
                           </div>
                           @endif
                          @if( Auth::guard('Customer') -> check() )
                           <div class="cart-action" style="justify-content:center">
                               <a href="{{route('show.cart')}}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                           </div>
                           @endif

                        </div>
                        <!-- End of Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left">
                        <div class="dropdown category-dropdown has-border" data-visible="true">
                            <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" data-display="static"
                                title="Browse Categories">
                                <i class="w-icon-category"></i>
                                <span>Browse Categories</span>
                            </a>

                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-tshirt2"></i>Fashion
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Women</h4>
                                                <hr class="divider">
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
                                                <h4 class="menu-title">Men</h4>
                                                <hr class="divider">
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
                                                <div class="banner-fixed menu-banner menu-banner2">
                                                    <figure>
                                                        <img src="frontend/assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                            width="235" height="347" />
                                                    </figure>
                                                    <div class="banner-content">
                                                        <div class="banner-price-info mb-1 ls-normal">Get up to
                                                            <strong
                                                                class="text-primary text-uppercase">20%Off</strong>
                                                        </div>
                                                        <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                        <a href="#"
                                                            class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-home"></i>Home & Garden
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Bedroom</h4>
                                                <hr class="divider">
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

                                                <h4 class="menu-title mt-1">Living Room</h4>
                                                <hr class="divider">
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
                                                <h4 class="menu-title">Office</h4>
                                                <hr class="divider">
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

                                                <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                                <hr class="divider">
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
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner3">
                                                    <figure>
                                                        <img src="frontend/assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                            width="235" height="461" />
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-white mb-1">
                                                            Restroom</h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-white ls-normal">
                                                            Furniture Sale</h3>
                                                        <div
                                                            class="banner-price-info text-white font-weight-normal ls-25">
                                                            Up to <span
                                                                class="text-secondary text-uppercase font-weight-bold">25%
                                                                Off</span></div>
                                                        <a href="#"
                                                            class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-electronics"></i>Electronics
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                <hr class="divider">
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

                                                <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                <hr class="divider">
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
                                                <h4 class="menu-title">Digital Cameras</h4>
                                                <hr class="divider">
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

                                                <h4 class="menu-title mt-1">Cell Phones</h4>
                                                <hr class="divider">
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
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner4">
                                                    <figure>
                                                        <img src="frontend/assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                            width="235" height="433" />
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                            Week</h4>
                                                        <h3 class="banner-title text-white">Save On Smart EarPhone
                                                        </h3>
                                                        <div
                                                            class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                            20% Off</div>
                                                        <a href="#"
                                                            class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-furniture"></i>Furniture
                                        </a>
                                        <ul class="megamenu type2">
                                            <li class="row">
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Furniture</h4>
                                                    <hr class="divider" />
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
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lighting</h4>
                                                    <hr class="divider" />
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
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Home Accessories</h4>
                                                    <hr class="divider" />
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
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Garden & Outdoors</h4>
                                                    <hr class="divider" />
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
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="frontend/assets/images/menu/banner-5.jpg" alt="Banner"
                                                                width="410" height="123"
                                                                style="background-color: #D2D2D2;" />
                                                        </figure>
                                                        <div class="banner-content text-right y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                New Arrivals</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                Amazing Sofa</h3>
                                                            <div
                                                                class="banner-price-info font-weight-normal ls-normal">
                                                                Starting at <strong>$125.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="frontend/assets/images/menu/banner-6.jpg" alt="Banner"
                                                                width="410" height="123"
                                                                style="background-color: #9F9888;" />
                                                        </figure>
                                                        <div class="banner-content y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                Best Seller</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                Chair &amp; Lamp</h3>
                                                            <div
                                                                class="banner-price-info font-weight-normal ls-normal text-white">
                                                                From <strong>$165.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
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
                        <nav class="main-nav">
                            <ul class="menu active-underline">
                                <li class="active">
                                    <a href="{{route('home.page')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('shop.page.view')}}">Shop</a>

                                </li>

                                <li>
                                    <a href="#">Blog</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right" style="margin-right:30px">
                        @if( !Auth::guard('Customer') -> check() )
                        <div class="ritaaaaa">
                            <a href="{{route('user.login.page')}}" class="sign_in" style="margin-right: 0px;"> <i class="w-icon-account" style="margin-right:4px;margin-top:-2px; "></i> Sign In</a>
                            <span style="margin: 0px 3px;color:red;"> or </span>
                            <a href="{{route('user.login.page')}}" class="sign_in">Register</a>
                        </div>
                        @endif

                        @if( Auth::guard('Customer') -> check() )
                            <div class="user d-flex" style="margin-top: 5px;position:relative">
                                <i class="w-icon-account" style="margin-right:5px;margin-top:4px; "></i><p style="cursor: pointer;" id="userlogout">{{Auth::guard('Customer') ->user() -> name}}</p>
                                <div class="mx-5" style="position:absolute;top:20px;width:100px;z-index:9;">
                                    <a class="logoutlog" href="{{route('user.account')}}" id="userlog" style="color:black">My account</a>
                                    <a class="logoutlog" href="{{route('user.logout')}}" id="userlog" style="color:red;margin-top:3px;">Logout</a>
                                </div>
                            </div>
                        @endif

                    </div>





                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->