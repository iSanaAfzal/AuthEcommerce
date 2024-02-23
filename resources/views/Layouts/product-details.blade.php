@extends('Layouts.master')
@section('content')


<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">





    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">

                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>Product details</h1>
                </div><!-- Page Title End -->

            </div>
        </div>
    </div><!-- Page Banner Section End-->


    <!-- Product Section Start-->
    <div class="product-section section pt-110 pb-90">
        <div class="container">

            <!-- Product Wrapper Start-->
            <div class="row">

                <!-- Product Image & Thumbnail Start -->
                <div class="col-lg-7 col-12 mb-30">

                    <!-- Product Thumbnail -->
                    <div class="single-product-thumbnail product-thumbnail-slider float-left">
                        <div class="single-thumb"><img src="{{('images/product-details/thumb-1.jpg')
                        }}" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-2.jpg" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-3.jpg" alt=""></div>
                        <div class="single-thumb"><img src="img/product-details/thumb-4.jpg" alt=""></div>
                    </div>

                    <!-- Product Image -->
                    <div class="single-product-image product-image-slider fix">
                        <div class="single-image"><img src="img/product-details/1.jpg" alt=""></div>
                        <div class="single-image"><img src="img/product-details/2.jpg" alt=""></div>
                        <div class="single-image"><img src="img/product-details/3.jpg" alt=""></div>
                        <div class="single-image"><img src="img/product-details/4.jpg" alt=""></div>
                    </div>

                </div><!-- Product Image & Thumbnail End -->

                <!-- Product Content Start -->
                <div class="single-product-content col-lg-5 col-12 mb-30">

                    <!-- Title -->
                    <h1 class="title">Holiday Candle</h1>

                    <!-- Product Rating -->
                    <span class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>

                    <!-- Price -->
                    <span class="product-price">€ 120.0</span>

                    <!-- Description -->
                    <div class="description">
                        <p>There are many variations of passages of Lorem Ipsum avaable,majority have suffered alteration in some form, by injected humour, or rdomised words which don't look even slightly believable.</p>
                    </div>

                    <!-- Color -->
                    <div class="product-color fix">
                        <h5>Select Color</h5>
                        <form action="#">
                            <div class="color-box"><input type="radio" name="color" id="color-1"><label for="color-1" style="background-color: #51bd99;">color 1</label></div>
                            <div class="color-box"><input type="radio" name="color" id="color-2"><label for="color-2" style="background-color: #83a931;">color 2</label></div>
                            <div class="color-box"><input type="radio" name="color" id="color-3"><label for="color-3" style="background-color: #c8001e;">color 3</label></div>
                            <div class="color-box"><input type="radio" name="color" id="color-4"><label for="color-4" style="background-color: #414141;">color 4</label></div>
                        </form>
                    </div>

                    <!-- Quantity & Cart Button -->
                    <div class="product-quantity-cart fix">
                        <div class="product-quantity">
                            <input type="text" value="0" name="qtybox">
                        </div>
                        <button class="add-to-cart">add to cart</button>
                    </div>

                    <!-- Action Button -->
                    <div class="product-action-button fix">
                        <button><i class="ion-ios-email-outline"></i>Email to a friend</button>
                        <button><i class="ion-ios-heart-outline"></i>Wishlist</button>
                        <button><i class="ion-ios-printer-outline"></i>Print</button>
                    </div>

                    <!-- Social Share -->
                    <div class="product-share fix">
                        <h6>Share :</h6>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>

                </div><!-- Product Content End -->

            </div><!-- Product Wrapper End-->

            <!-- Product Additional Info Start-->
            <div class="row">

                <!-- Nav tabs -->
                <div class="col-12 mt-30">
                    <ul class="pro-info-tab-list nav">
                        <li><a class="active" data-toggle="tab" href="#more-info">More info</a></li>
                        <li><a data-toggle="tab" href="#data-sheet">Data sheet</a></li>
                        <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content col-12">

                    <div class="pro-info-tab tab-pane active" id="more-info">
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention.</p>
                    </div>

                    <div class="pro-info-tab tab-pane" id="data-sheet">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="odd">
                                    <td>Compositions</td>
                                    <td>Cotton</td>
                                </tr>
                                <tr class="even">
                                    <td>Styles</td>
                                    <td>Casual</td>
                                </tr>
                                <tr class="odd">
                                    <td>Properties</td>
                                    <td>Short Sleeve</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pro-info-tab tab-pane" id="reviews">
                        <a class="button" href="#">Be the first to write your review!</a>
                    </div>

                </div>

            </div><!-- Product Additional Info End-->

        </div>
    </div><!-- Product Section End-->


    <!-- Footer Section Start-->
    <div class="footer-section section bg-dark" style="background-image: url(img/bg/footer-bg.png)">
        <div class="container">

            <div class="row">
                <div class="col">

                    <!-- Footer Top Start -->
                    <div class="footer-top section pt-80 pb-50">
                        <div class="row">

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">

                                <img class="footer-logo" src="img/footer-logo.png" alt="logo">
                                <p>Contrary to popular belief, Lorem Ipsum is nosimply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over Lorem Ipsum is nosimply random text.</p>

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-2 col-md-3 col-12 mb-40">

                                <h4 class="widget-title">Information</h4>

                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Team member</a></li>
                                    <li><a href="#">Clinet</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-2 col-md-3 col-12 mb-40">

                                <h4 class="widget-title">Categories</h4>

                                <ul>
                                    <li><a href="#">Costumes</a></li>
                                    <li><a href="#">Lights</a></li>
                                    <li><a href="#">Lights</a></li>
                                    <li><a href="#">Christmas Trees</a></li>
                                    <li><a href="#">Decorations</a></li>
                                </ul>

                            </div>

                            <!-- Footer Widget -->
                            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">

                                <h4 class="widget-title">Contact Us</h4>

                                <ul>
                                    <li><span>Address:</span> ur address goes here,street Crossroad 123</li>
                                    <li><span>Phone:</span> +99 859 658 589 . +69 587 456 25</li>
                                    <li><span>Eax:</span> +55 784 7585 . + 985 698 586</li>
                                    <li><span>Email:</span> christ@email.com</li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- Footer Top End -->

                    <!-- Footer Bottom Start -->
                    <div class="footer-bottom section text-center">
                        <p><a href="templateshub.net">Templates Hub</a></p>
                    </div><!-- Footer Bottom End -->

                </div>
            </div>

        </div>
    </div><!-- Footer Section End-->


</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>


</html>