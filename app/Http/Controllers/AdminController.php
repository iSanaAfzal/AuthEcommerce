<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Http\Middleware\CheckRole;
use App\Models\PlaceOrder;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware('role:admin');
    }
    //fetch data from the data base
    public function showadmintable()
    {

        $users = User::where('role', 'user')->get();
            return view('useradmintable', compact('users'));

    }
    //update Record
    public function update(Request $request)
    {
        try {
            $user = User::find($request->input('id'));
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->role = $request->input('role');
            $user->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    //delete record
    public function delete($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('admin.useradmintable')->with('error', 'User not found.');
    }

    // Perform the deletion
    $user->delete();

    return redirect()->route('admin.useradmintable')->with('success', 'User deleted successfully.');
}
//Show product page
public function showproduct(){


    $user = new Product();// Change Product to your actual model class

    return view('createproduct', compact('user'));

}
//product store
public function insertProduct(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        'price' => 'required|numeric',
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $imagePath = $image->store('images', 'public'); // Assuming you have a storage link configured

        // Create a new Product instance with the validated data and the file path
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath, // Store the image path in the 'image' column
            'price' => $request->input('price'),
        ]);

        // Check if the product was successfully created
        if ($product) {
            // If successful, redirect with a success message
            return redirect()->back()->with('success', 'Product added successfully!');
        } else {
            // If unsuccessful, redirect with an error message
            return redirect()->back()->with('error', 'Failed to add product.');
        }
    } else {
        // Handle the case where no file is provided
        return redirect()->back()->with('error', 'Please upload an image.');
    }
}

//cartitems details
public function itemdetails(Request $request){
    try {
        $users = Product::all();
        // Or use a specific query like $users = DB::table('products')->get();
        return view('cartitem', ['users' => $users]);
    } catch (\Exception $e) {
        \Log::error('Error fetching data: ' . $e->getMessage());
        return view('cartitem', ['users' => []]); // Return an empty array or handle the error accordingly
    }
}
//remove cartitems
   public function remove($id)
{
    $user = Product::find($id);

    if (!$user) {
        return redirect()->route('admin.cartitem')->with('error', 'Product not found.');
    }

    // Perform the deletion
    $user->delete();

    return redirect()->route('admin.cartitem')->with('success', 'product deleted successfully.');
}
//Edit Product
 public function showEditForm($id)
    {
        $user = Product::find($id);
        return view('productform', ['user' => $user]);

    }

public function updateProduct(Request $request, $id)
{

    $request->validate([
        'name' => 'required|nullable',
        'description' => 'required|nullable',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'price' => 'required|numeric',
    ]);

    // Retrieve the product from the database
    $product = Product::find($id);

    // Update the product details
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');

    // Handle image update
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $product->image = 'images/' . $imageName;
    }

    // Save the updated product
    $product->save();

    // Redirect with success message or show a flash message
    return redirect()->route('admin.cartitem')->with('success', 'Product updated successfully');
}

//image retrieve
public function checkImageMime($productId)
    {
        // Retrieve the product from the database
        $product = Product::find($productId);

        // Check if the product exists
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check MIME type of the image
        $imagePath = 'public/' . $product->Image;
        if (Storage::exists($imagePath)) {
            $mimeType = Storage::mimeType($imagePath);
            return response()->json(['mimeType' => $mimeType]);
        } else {
            return response()->json(['error' => 'Image not found'], 404);
        }
    }
    //order retrieve
    public function Oderdetails(){
    $orders = PlaceOrder::all();
     return view('orderdetails', ['orders' => $orders]);
    }
    public function approveOrder($id){
     $orders = PlaceOrder::find($id);
     $orders->update(['order_status' => 1]);
     return response()->json(['message' => 'Order approved successfully']);
}

    public function rejectOrder($id)
    {
     $orders = PlaceOrder::find($id);
     $orders->update(['order_status' => 0]);
     return response()->json(['message' => 'Order Rejected successfully']);
    }

}