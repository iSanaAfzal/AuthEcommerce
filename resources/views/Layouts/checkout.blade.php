@extends('Layouts.master')

@section('content')
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="section">
        <!-- Page Banner Section Start-->
        <div class="page-banner-section section" style="background-image:url(images/bg/page-banner.jpg)">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="page-title text-center col">
                        <h1>Checkout</h1>
                    </div><!-- Page Title End -->
                </div>
            </div>
        </div><!-- Page Banner Section End-->

        <!-- Checkout Section Start-->
        <div class="cart-section section pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center"> <!-- Center the row -->
                    <div class="col-lg-6 col-12 mb-30">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card" style="background-color: #83a931; padding: 20px; border-radius: 10px;">
                            <form action="{{ route('process') }}" method="post" class="checkout-form">
                                @csrf

                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <h4 class="form-title" style="color: #ffffff;">Personal Information</h4>
                                <div class="row">
                                    <div class="input-box col-12 mb-20">
                                        <label for="name" style="color: #ffffff;">Your Name</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name"
                                            required>
                                    </div>
                                    <div class="input-box col-12 mb-20">
                                        <label for="email" style="color: #ffffff;">Email Address</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email"
                                            required>
                                    </div>
                                    <div class="input-box col-12 mb-20">
                                        <label for="phone" style="color: #ffffff;">Phone Number</label>
                                        <input type="text" id="phone" name="phone_no"
                                            placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="input-box col-12 mb-20">
                                        <label for="address" style="color: #ffffff;">Address</label>
                                        <input type="text" id="address" name="address" placeholder="Enter your address"
                                            required>
                                    </div>
                                    <div class="input-box col-12 mb-20">
                                        <label for="country" style="color: #ffffff;">Country</label>
                                        <input type="text" id="country" name="country" placeholder="Enter your country"
                                            required>
                                    </div>
                                    <div class="input-box col-12 mb-20">
                                        <label for="city" style="color: #ffffff;">City</label>
                                        <input type="text" id="city" name="city" placeholder="Enter your city"
                                            required>
                                    </div>

                                    @php
                                        $firstProduct = \App\Models\Product::first();
                                    @endphp
                                    @if ($firstProduct)
                                        <input type="hidden" name="product_id" value="{{ $firstProduct->id }}" required>
                                        <div class="input-box col-12 mb-20 text-center">
                                            <button type="submit" class="btn btn-dark">Submit and Checkout</button>
                                        </div>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Section End-->
    </div>
@endsection
