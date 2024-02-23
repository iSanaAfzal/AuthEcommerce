<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\AdminController;
use App\Models\PlaceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCart;



class CartController extends Controller
{//index home page
    public function front()
    {
        return view('Main');
    }


    //store data base
public function addToCart(Request $request)
{
    $total = $request->input('price') * $request->input('quantity');

    // Check if the product already exists in the cart for the current user
    $existingCartItem = UserCart::where('user_id', $request->input('user_id'))
        ->where('product_id', $request->input('product_id'))
        ->first();

    if ($existingCartItem) {
        // If the product exists, update the quantity and total
        $existingCartItem->quantity += $request->input('quantity');
        $existingCartItem->total += $total;
        $existingCartItem->save();
    } else {
        // If the product doesn't exist, create a new entry
        $request->validate([
            'Product_Name' => 'required|string',
            'description' => 'required|string',
            'Image' => 'required|string',  // Assuming the Image is a string field for the image path
        ]);

        UserCart::create([
            'product_id' => $request->input('product_id'),
            'user_id' => $request->input('user_id'),
            'Product_Name' => $request->input('Product_Name'),
            'description' => $request->input('description'),
            'Image' => $request->input('Image'),  // Save the image path
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'total' => $total,
        ]);
    }

    // Redirect or return a response as needed
    return redirect()->back()->with('success', 'Item added to cart successfully!');
}
 //Retrieve Data from the Database
public function showCart()
{
     $cartItems = collect();
     $totalAmount = 0;
    if (auth()->check()) {
        $user_id = auth()->id();
        $cartItems = UserCart::where('user_id', $user_id)->get(['Product_Name', 'quantity', 'price', 'Image', 'product_id', 'id', 'total']);
         $totalAmount = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }

    return view('Layouts.cart', compact('cartItems', 'totalAmount'));
}






    //Delete Data


    public function removeFromCart($id)
    {
        $cartItem = UserCart::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
//View checkout Page
public function checkout($product_id){
 $product = Product::find($product_id);

    return view('Layouts.checkout', compact('product_id'));
}
public function CheckoutProcess(Request $request)
    {
        try {
            // Get the authenticated user and eager load the userCarts relationship
            $user = auth()->user()->load('userCarts');

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_no' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'product_id' => 'required|exists:products,id',
            ]);

            $product = Product::find($validatedData['product_id']);

            if (!$product) {
                // Handle the case when the product is not found
                return redirect()->back()->with('error', 'Product not found');
            }

            $order = PlaceOrder::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone_no' => $validatedData['phone_no'],
                'address' => $validatedData['address'],
                'country' => $validatedData['country'],
                'city' => $validatedData['city'],
            ]);

            \Log::info('Cart records to delete:', ['count' => $user->userCarts->count()]);
            $user->userCarts()->delete();

            return redirect()->route('index')->with('success', 'Your order has been successfully submitted.')->with('cart_updated', true);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error('Exception occurred:', ['exception' => $e]);
            return redirect()->back()->with('error', 'An error occurred while processing your request.')->withInput();
        }
    }


//Retrieve from the db
public function showCheckoutMethod()
{
    $total = Cart::sum('price');
    return view('Layouts.checkout', compact('total'));

}
//Retrieve Products Table from DB from product Table ADMIN site
 public function productItem()
    {
return view('main');
    }













    //about
    public function about(){

        return view('Layouts.about');
    }
    //blog-details
    public function blogdetails(){

        return view('Layouts.blog-details');
    }
    //blog
    public function blog(){

        return view('Layouts.blog');
    }



    //contact
    public function contact(){

        return view('Layouts.contact');
    }
    //product details
    public function productdetails(){

        return view('Layouts.product-details');
    }
    //shop
    public function shop(){

        return view('Layouts.shop');
    }
//under-construction
public function underconstruction(){

    return view('Layouts.under-construction');
}
//wishlist
public function wishlist(){

    return view('Layouts.wishlist');

}

}
