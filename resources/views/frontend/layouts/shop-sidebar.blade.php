<div class="sidebar-content scrollable">
    <!-- Start of Sticky Sidebar -->
    <div class="pin-wrapper" style="height: 1813.3px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">

        {{-- Search Form Start --}}
        <div class="widget widget-search-form">
            <div class="widget-body">
                <form class="input-wrapper input-wrapper-inline">
                    <input type="text" class="form-control" name="search" placeholder="Search in Product" autocomplete="off" required="">
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i></button>
                </form>
            </div>
        </div>
        {{-- Search Form End --}}

            @php
                $category = App\Models\Categorypost::paginate(9);
            @endphp
        <!-- Start of Collapsible widget -->
        <div class="widget widget-collapsible">
            <h3 class="widget-title"><label>All Categories</label><span class="toggle-btn"></span></h3>
            <ul class="widget-body filter-items search-ul">
                @foreach ($category as $cat)
                <li><a href="{{ route('blog.post.category', $cat -> slug) }}">{{$cat-> name}}</a></li>                    
                @endforeach
            </ul>
        </div>
        <!-- End of Collapsible Widget -->

            @php
                $tags = App\Models\Tag::paginate(9);
            @endphp
        <!-- Start of Collapsible widget -->
        <div class="widget widget-collapsible">
            <h3 class="widget-title"><label>All Tags</label><span class="toggle-btn"></span></h3>
            <ul class="widget-body filter-items search-ul">
                @foreach ($tags as $tag)
                <li><a href="{{ route('blog.post.tag', $tag -> slug)}}">{{$tag-> name}}</a></li>                    
                @endforeach
            </ul>
        </div>
        <!-- End of Collapsible Widget -->



        <!-- Start of Collapsible Widget -->
        @php
            $posts = App\Models\Post::latest() -> take(3) -> get();
        @endphp
        <div class="widget widget-collapsible">
            <h3 class="widget-title"><label>Popular Products</label><span class="toggle-btn"></span></h3>                                           
                                            
                <div class="product product-widget">
                    @foreach ($posts as $item)                       
                    <ul>
                @php
                    $featured = json_decode($item -> featured);
                 @endphp
                 {{-- For Standard Post --}}
                 @if( $featured -> post_type == 'Standard' )
                    <figure class="product-media">
                        <a href="#">
                        <img src="{{url('storage/posts/' .$featured -> standard)}}" alt="Product" width="100" height="113">
                        </a>
                    </figure>
                    @endif
                        <div class="product-details">
                            <h4 class="product-name">
                            <a href="#">{{$item->title}}</a>
                            </h4>
                            <div class="ratings-container">
                            <div class="ratings-full">
                            <span class="ratings" style="width: 100%;"></span>
                            <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                            </div>
                            <div class="product-price">{{$item->sprice}} taka</div>
                        </div>
                        @endforeach
                    </ul>
                    </div>


            
                </div>
        <!-- End of Collapsible Widget -->

 
    </div></div>
    <!-- End of Sidebar Content -->
</div>