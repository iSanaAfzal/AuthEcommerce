@extends('Layouts.master')
@section('content')
<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
<!-- Page Banner Section Start-->
 <div class="page-banner-section section" style="background-image: url(images/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">

                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>shop page</h1>
                </div><!-- Page Title End -->

            </div>
        </div>
    </div><!-- Page Banner Section End-->


    <!-- Product Section Start-->
    <div class="product-section section pt-120 pb-120">
        <div class="container">

            <!-- Product Wrapper Start-->
            <div class="row">

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="{{route('product-details')}}" class="img"><img src="{{'images/product/1.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <span class="label">New</span>
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="{{route('product-details')}}">Holiday Candle</a></h5>
                                    <a href="{{route('shop')}}" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="route{{'product-details'}}" class="img"><img src="{{'images/product/2.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <!-- <span class="label">New</span> -->
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="route{{'product-details'}}">Christmas Tree</a></h5>
                                    <a href="route{{'shop'}}" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="route{{'product-details'}}" class="img"><img src="{{'images/product/3.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <!-- <span class="label">New</span> -->
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="route{{'product-details'}}">Santa Claus Doll</a></h5>
                                    <a href="route{{'product-details'}}" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="route{{'product-details'}}" class="img"><img src="{{'images/product/4.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <span class="label">New</span>
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="route{{'product-details'}}">Holiday Cap</a></h5>
                                    <a href="route{{'shop'}} class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="route{{'product-details'}}" class="img"><img src="{{'images/product/5.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <!-- <span class="label">New</span> -->
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="route{{'product-details'}}">Holiday Doll</a></h5>
                                    <a href="route{{'shop'}}" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Product Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-60">

                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="route{{'product-details'}}" class="img"><img src="{{'images/product/6.jpg'}}" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <!-- <span class="label">New</span> -->
                        </div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Head Content -->
                            <div class="head fix">

                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="product-details.html">Holiday Candle</a></h5>
                                    <a href="route{{'shop.html'}}" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new">$38</span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>

                            </div>

                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="#">add to cart</a>
                            </div>

                        </div>

                    </div>

                </div><!-- Product End-->

                <!-- Pagination Start -->
                <div class="pagination col-12 mt-20">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="arrows"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div><!-- Pagination End -->

            </div><!-- Product Wrapper End-->

        </div>
    </div><!-- Product Section End-->


    <!-- Footer Section Start-->


@endsection

