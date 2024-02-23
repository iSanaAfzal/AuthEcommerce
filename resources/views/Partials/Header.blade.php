<header>
    <div id="main-wrapper" class="section">


        <!-- Header Section Start -->
        <div class="header-section section">

            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Header Top Wrapper Start -->
                            <div class="header-top-wrapper">
                                <div class="row">

                                    <!-- Header Social -->
                                    <div class="header-social col-md-4 col-12">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>

                                    <!-- Header Logo -->
                                    <div class="header-logo col-md-4 col-12">
                                        <a href="{{ route('index') }}" class="logo"><img
                                                src="{{ asset('images/logo.PNG') }}"alt="logo"></a>
                                    </div>

                                    <!-- Account Menu -->
                                    <div class="account-menu col-md-4 col-12">
                                        <ul>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li>
                                                @guest <!-- Check if the user is a guest (not logged in) -->
                                                    <a href="{{ route('login') }}">Sign In</a>
                                                    <a href="{{ route('register') }}">Register</a>
                                                @else
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                @endguest
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="dropdown">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="num">
                                                        @auth
                                                            {{ App\Models\UserCart::where('user_id', auth()->id())->count() }}
                                                        @else
                                                            0
                                                        @endauth
                                                    </span>
                                                </a>
                                            </li>
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    @forelse ($cartItems ?? [] as $cartItem)
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-image">
                                                                <a
                                                                    href="{{ route('cart.show', $cartItem->product_id) }}">
                                                                    <img src="{{ asset($cartItem->Image) }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="cart-info">
                                                                <h5><a
                                                                        href="{{ route('cart.show', $cartItem->product_id) }}">{{ $cartItem->product_name }}</a>
                                                                </h5>
                                                                <p>{{ $cartItem->quantity }} x
                                                                    £{{ number_format($cartItem->price, 2) }}</p>
                                                                <a href="{{ route('cart.remove', $cartItem->id) }}"
                                                                    class="cart-delete" title="Remove this item">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p>No items in the cart</p>
                                                    @endforelse
                                                </div>

                                                <!-- Cart Total -->
                                                @php
                                                    $totalAmount = isset($cartItems)
                                                        ? $cartItems->sum(function ($item) {
                                                            return $item->price * $item->quantity;
                                                        })
                                                        : 0;
                                                @endphp
                                                <div class="cart-totals">
                                                    <h5>Total <span>£{{ number_format($totalAmount, 2) }}</span></h5>
                                                </div>

                                                <!-- Cart Button -->
                                                <div class="cart-bottom clearfix">
                                                    <a href="{{ route('cart.show') }}">Check out</a>
                                                </div>
                                            </div>




                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div><!-- Header Top Wrapper End -->

                        </div>
                    </div>
                </div>
            </div><!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom section">
                <div class="container">
                    <div class="row">

                        <!-- Header Bottom Wrapper Start -->
                        <div class="header-bottom-wrapper text-center col">

                            <!-- Header Bottom Logo -->
                            <div class="header-bottom-logo">
                                <a href="{{ route('index') }}" class="logo"><img
                                        src="{{ asset('images/logo.png') }}" alt="logo"></a>
                            </div>

                            <!-- Main Menu -->
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="{{ route('index') }}">home</a></li>
                                    <li><a href="{{ route('shop') }}">shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('shop') }}">shop page</a></li>
                                            {{-- <li><a href="{{route('product-details')}}">product details</a></li> --}}
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">about</a></li>
                                    <li><a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('cart.show') }}">cart</a></li>
                                            @php
                                                $firstProduct = \App\Models\Product::first();
                                            @endphp

                                            @if ($firstProduct)
                                                <li>
                                                    <a
                                                        href="{{ route('checkout', ['product_id' => $firstProduct->id]) }}">checkout</a>
                                                </li>
                                            @endif

                                            <li><a href=#>wishlist</a></li>
                                            <li><a href="{{ route('under-construction') }}">Under Construction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('blog') }}">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('blog') }}">blog page</a></li>
                                            <li><a href="{{ route('blog-details') }}">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                </ul>
                            </nav>

                            <!-- Header Search -->
                            <div class="header-search">

                                <!-- Search Toggle -->
                                <button class="search-toggle"><i class="ion-ios-search-strong"></i></button>

                                <!-- Search Form -->
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>

                            </div>

                            <!-- Mobile Menu -->
                            <div class="mobile-menu section d-md-none"></div>

                        </div><!-- Header Bottom Wrapper End -->

                    </div>
                </div>
            </div><!-- Header Bottom End -->

        </div><!-- Header Section End -->
</header>
