   <!-- Start of Footer -->
   @php
        $subscribe = App\Models\Subscribe::all();
        // $i = 1;
    @endphp
   <footer class="footer appear-animate" data-animation-options="{
    'name': 'fadeIn'
}">
    <div class="footer-newsletter bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="icon-box icon-box-side text-white">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-envelop3"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">Subscribe To
                                Our Newsletter</h4>
                            <p class="text-white">Get all the latest information on Events, Sales and Offers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="{{route('subscribe.store')}}" method="POST"
                        class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        @csrf
                        <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                            placeholder="Your E-mail Address" />
                        <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                class="w-icon-long-arrow-right"></i></button>
                    </form>
                    <marquee scrollamount="1" behavior="alternate" direction=""> <p> <h5 style="font-weight:bold;color:#FFF!important"><i class="w-icon-account"></i> Subscribe Member   {{count($subscribe)}} K</h5>  </p> </marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about">
                        <a href="{{route('user.login.page')}}" class="logo-footer">
                            <img src="{{asset('frontend/assets/images/logo_footer.png')}}" alt="logo-footer" width="144"
                                height="45" />
                        </a>
                        <div class="widget-body">
                            <p class="widget-about-title">Support 24/7</p>
                            <a href="{{route('user.login.page')}}" class="widget-about-call">+8801738153971</a>
                            <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                & coupons ster now toon.
                            </p>

                            <div class="social-icons social-icons-colored">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-body">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="{{route('user.login.page')}}">View Cart</a></li>
                            <li><a href="{{route('user.login.page')}}">Sign In</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    @include('frontend.layouts.clock')
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright © 2022 khalifameditech Store. All Rights Reserved. Design by-<span style="font-weight:bold">Sharif</span></p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">We're using safe payment for</span>
                <figure class="payment">
                    <img src="{{asset('frontend/assets/images/payment.png')}}" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->