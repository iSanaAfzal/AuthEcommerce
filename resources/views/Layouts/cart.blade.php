 @extends('Layouts.master')
 @section('content')
     <!-- Main Wrapper Start -->

     <div id="main-wrapper" class="section">
         <!-- Cart Section Start -->
         <div class="cart-section section pt-200 pb-90">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="table-responsive mb-30">
                             <table class="table cart-table text-center">
                                 <!-- Table Head -->
                                 <thead>
                                     <tr>
                                         <th class="number">#</th>
                                         <th class="Image">Image</th>
                                         <th class="Product_Name">Product Name</th>
                                         <th class="qty">Quantity</th>
                                         <th class="price">Price</th>
                                         <th class="total">Total</th>
                                         <th class="remove">Remove</th>
                                     </tr>
                                 </thead>
                                 <!-- Table Body -->
                                 <tbody>
                                     @php
                                         $total = 0;
                                     @endphp

                                     @foreach ($cartItems as $key => $cartItem)
                                         <tr>
                                             <td><span class="cart-number">{{ $key + 1 }}</span></td>
                                             <td>
                                                 <img src="{{ asset('storage/' . $cartItem->Image) }}"height="30%"
                                                     width="30%" alt="Product Image">
                                             </td>

                                             <td>{{ $cartItem->Product_Name }}</td>
                                             <td>{{ $cartItem->quantity }}</td>
                                             <td>${{ $cartItem->price }}</td>
                                             <td>${{ $cartItem->quantity * $cartItem->price }}</td>
                                             <td>
                                                 <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" class="cart-pro-remove"><i
                                                             class="fa fa-trash-o"></i></button>
                                                 </form>

                                             </td>
                                         </tr>
                                         @php
                                             // @dd($total, $cartItem->toArray());
                                             $total += $cartItem->quantity * $cartItem->price;
                                         @endphp
                                     @endforeach
                                 </tbody>

                             </table>
                         </div>
                     </div>
                     <div class="row">

                         <!-- Cart Action -->
                         <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                             <a href="{{ 'home' }}" class="button">Continiue Shopping</a>
                             <a href="{{ 'home' }}" class="button">Update Cart</a>

                         </div>

                         <!-- Cart Cuppon -->
                         <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb-30">
                             <h4 class="title">Discount Code</h4>
                             <p>Enter your coupon code if you have</p>
                             <form action="#" class="cuppon-form">
                                 <input type="text" placeholder="Cuppon Code">
                                 <button class="button">apply coupon</button>
                             </form>
                         </div>

                         <!-- Cart Checkout Progress -->
                         <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                             <h4 class="title">Process Checkout</h4>
                             <p><span>Subtotal</span><span>{{ $total }}</span></p>
                             <h5><span>Grand total</span><span>{{ $total }}</span></h5>


                             <div class="text-center">
                                 @if ($firstProduct = \App\Models\Product::first())
                                     <a href="{{ route('checkout', ['product_id' => $firstProduct->id]) }}"
                                         class="button">Process to checkout</a>
                                 @endif
                             </div>


                         </div>


                     </div>
                 </div>
             </div>
         </div><!-- Cart Section End -->
     </div><!-- Main Wrapper End -->
 @endsection
