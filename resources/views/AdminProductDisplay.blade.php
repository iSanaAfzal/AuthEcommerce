@include('Partials.style')
< @section('content') <main class="container mt-5">



        <!-- Main Wrapper Start -->
        <div id="main-wrapper" class="section">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Hero Slider Start-->
            <div class="hero-slider section fix">
                <!-- Hero Slide Item Start-->
                <div class="hero-item" style="background-image: url(images/hero/1.jpg)">

                    <!-- Hero Content Start-->
                    <div class="hero-content text-center m-auto">

                        <h2>Save 25%</h2>
                        <h1>Christmas Sale</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which.</p>
                        <a href="#">LEARN MORE</a>

                    </div><!-- Hero Content End-->


                </div><!-- Hero Slide Item End-->

                <!-- Hero Slide Item Start-->
                <div class="hero-item" style="background-image: url(images/hero/2.jpg)">

                    <!-- Hero Content Start-->
                    <div class="hero-content text-center m-auto">

                        <h2>Save 25%</h2>
                        <h1>Christmas Sale</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which.</p>
                        <a href="#">LEARN MORE</a>

                    </div><!-- Hero Content End-->


                </div><!-- Hero Slide Item End-->

            </div><!-- Hero Slider End-->


            <!-- Banner Section Start-->
            <div class="banner-section section pt-120">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-30">

                            <div class="single-banner">
                                <img src="{{ 'images/banner/1.jpg' }}" alt="banner">
                                <div class="banner-content right">
                                    <h1 class="white"><span>Gifts</span>Christmas</h1>
                                    <a href="#" class="button">Shop Now</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-12 mb-30">

                            <div class="single-banner">
                                <img src="{{ 'images/banner/2.jpg' }}" alt="banner">
                                <div class="banner-content left">
                                    <h2 class="black"><span class="small">Save <span class="red">25%</span></span><span
                                            class="red">Offer</span> Christmas</h2>
                                    <a href="#" class="link">Shop Now</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- Banner Section End-->

            <!-- Product Section Start-->
            <div class="product-section section pt-70 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center col mb-60">
                            <h1>Featured Products</h1>
                        </div>
                    </div>

                    <div class="row">
                        @foreach (\App\Models\Product::all() as $product)
                            <div class="col-lg-4 col-md-6 col-12 mb-60">
                                <div class="product">
                                    <div class="image">
                                        <a href="{{ route('product-details', ['id' => $product->id]) }}" class="img">
                                            <img src="{{ asset('storage/' . $product->Image) }}" alt="image"
                                                height="100%" width="100%">
                                        </a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                                    </div>

                                    <div class="content">
                                        <div class="head fix">
                                            <div class="title-category float-left">
                                                <h5 class="title">
                                                    <a
                                                        href="{{ route('product-details', ['id' => $product->id]) }}">{{ $product->Name }}</a>
                                                </h5>
                                                <a href="{{ route('shop', ['id' => $product->id]) }}"
                                                    class="category">{{ $product->Description }}</a>
                                            </div>
                                            <div class="price float-right">
                                                <span class="new">${{ $product->price }}</span>
                                            </div>
                                        </div>
                                        <form action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="Product_Name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="image" value="{{ asset($product->image) }}">
                                            <button type="submit" class="btn btn-dark">Add to Cart</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div><!-- Product Section End-->


            <!-- Testimonial Section Start-->
            <div class="testimonial-section section bg-gray pt-100 pb-65"
                style="background-image: url(img/bg/testimonial.png)">
                <div class="container">

                    <!-- Section Title Start-->
                    <div class="row">
                        <div class="section-title text-center col mb-60">
                            <h1>Customer Reviews</h1>
                        </div>
                    </div><!-- Section Title End-->

                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-12 ml-auto mr-auto">

                            <!-- Testimonial Slider Start -->
                            <div class="testimonial-slider text-center">

                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <img src="{{ 'images/testimonial/1.jpg' }}" alt="customer">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system.</p>
                                    <h5>Betty Moore</h5>
                                </div>

                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <img src="{{ 'images/testimonial/1.jpg' }}" alt="customer">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system.</p>
                                    <h5>Betty Moore</h5>
                                </div>

                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <img src="{{ 'images/testimonial/1.jpg' }}" alt="customer">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system.</p>
                                    <h5>Betty Moore</h5>
                                </div>

                            </div><!-- Testimonial Slider End -->

                        </div>
                    </div>

                </div>
            </div><!-- Testimonial Section End-->


            <!-- Newsletter Section Start-->
            <div class="newsletter-section section pt-100 pb-120">
                <div class="container">

                    <!-- Section Title Start-->
                    <div class="row">
                        <div class="section-title text-center col mb-55">
                            <h1>Newsletter</h1>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled
                                and demoralized by the charms of pleasure of the moment.</p>
                        </div>
                    </div><!-- Section Title End-->

                    <div class="row">
                        <div class="text-center col">

                            <!-- Newsletter Form -->
                            <form
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                class="subscribe-form validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                        placeholder="Your email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                            type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1"
                                            value="">
                                    </div>
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe"
                                        class="button">subscribe</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div><!-- Testimonial Section End-->


            <!-- Blog Section Start-->
            <div class="blog-section section bg-gray pt-100 pb-60">
                <div class="container">

                    <!-- Section Title Start-->
                    <div class="row">
                        <div class="section-title text-center col mb-60">
                            <h1>Christmas Blog</h1>
                        </div>
                    </div><!-- Section Title End-->

                    <div class="row">

                        <!-- Blog Item Start-->
                        <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">

                            <!-- Image -->
                            <a href="route{{ 'blog-details' }}" class="image"><img src="{{ 'images/blog/1.jpg' }}"
                                    alt="blog"></a>

                            <!-- Content -->
                            <div class="content fix">

                                <!-- Publish Date -->
                                <span class="publish"><span>Published on:</span> 25 May 2017</span>

                                <!-- Title -->
                                <h4 class="title"><a href="route{{ 'blog-details' }}">If you are going to use a
                                        passage.</a></h4>

                                <!-- Decs -->
                                <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't
                                    anything
                                    embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>

                                <!-- Read More Link -->
                                <a href="route{{ 'blog-details' }}" class="read-more">Read More</a>

                            </div>

                        </div><!-- Blog Item End-->

                        <!-- Blog Item Start-->
                        <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">

                            <!-- Image -->
                            <a href="route{{ 'blog-details' }}" class="image"><img src="{{ 'images/blog/2.jpg' }}"
                                    alt="blog"></a>

                            <!-- Content -->
                            <div class="content fix">

                                <!-- Publish Date -->
                                <span class="publish"><span>Published on:</span> 25 May 2017</span>

                                <!-- Title -->
                                <h4 class="title"><a href="route{{ 'blog-details' }}">Ut enim ad minima veniam,
                                        quis.</a></h4>

                                <!-- Decs -->
                                <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't
                                    anything
                                    embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>

                                <!-- Read More Link -->
                                <a href="route{{ 'blog-details' }}" class="read-more">Read More</a>

                            </div>

                        </div><!-- Blog Item End-->

                        <!-- Blog Item Start-->
                        <div class="blog-item col-lg-4 col-md-6 col-12 mb-60">

                            <!-- Image -->
                            <a href="blog-details.html" class="image"><img src="{{ 'images/blog/3.jpg' }}"
                                    alt="blog"></a>

                            <!-- Content -->
                            <div class="content fix">

                                <!-- Publish Date -->
                                <span class="publish"><span>Published on:</span> 25 May 2017</span>

                                <!-- Title -->
                                <h4 class="title"><a href="blog-details.html">At vero eos et accusamus et iusto</a>
                                </h4>

                                <!-- Decs -->
                                <p>If you are going to use a passage of Lorem Ipsum, yneed to be sure there isn't
                                    anything
                                    embarrassing hidden ithe middle text. All the Lorem Ipsum.</p>

                                <!-- Read More Link -->
                                <a href="blog-details.html" class="read-more">Read More</a>

                            </div>

                        </div><!-- Blog Item End-->

                    </div>

                </div>
            </div><!-- Blog Section End-->





            </main>
        @endsection
