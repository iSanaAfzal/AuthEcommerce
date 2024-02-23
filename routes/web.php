<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::middleware(['auth'])->group(function () {

    Route::get('/adminpage', function () {
        return view('adminpage')->with('welcome_message', session('welcome_message'));
    })->middleware(['auth', CheckRole::class . ':admin'])->name('adminpage');
    Route::get('/home', function () {
        return view('home')->with('welcome_message', session('welcome_message'));
    })->middleware(['auth', CheckRole::class])->name('home');
    //admin user details
    Route::get('/admin/useradmintable', [AdminController::class, 'showadmintable'])->name('admin.useradmintable');
   Route::get('/delete/{id}', [AdminController::class,'delete']);
   Route::post('/update-user', [AdminController::class, 'update']);
   //Admin ProductForm
Route::get('/admin/createproduct', [AdminController::class, 'showproduct'])->name('admin.createproduct');
Route::Post('/admin/createproduct', [AdminController::class, 'insertProduct'])->name('admin.createproduct');
//Admin Product Add User Show
Route::get('/products', [CartController::class, 'productItem'])->name('main');
//admin Cartitem
Route::get('/admin/cartitem', [AdminController::class, 'itemdetails'])->name('admin.cartitem');
Route::get('/delete/{id}', [AdminController::class,'remove']);
Route::get('/edit/{id}', [AdminController::class, 'showEditForm'])->name('edit');
Route::patch('/edit/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateproduct');
Route::get('/check-image-mime/{productId}', [AdminController::class, 'checkImageMime']);
//order details
Route::get('/orderdetail', [AdminController::class, 'Oderdetails'])->name('admin.orders');
Route::post('/approve-order/{id}', [AdminController::class, 'approveOrder']);
Route::post('/reject-order/{id}', [AdminController::class, 'rejectOrder']);

//Other Routes
Route::get('/frontpage',[CartController::class,'front'])->name('index');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
 Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cartremove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/Layouts/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/Layouts/checkout/{product_id}', [CartController::class, 'checkout'])->name('checkout');
Route::post('/Proceed', [CartController::class, 'CheckoutProcess'])->name('process');
Route::get('/checkout', [CartController::class, 'showCheckoutMethod']);
Route::get('/Layouts/product-details', [CartController::class, 'productdetails'])->name('product-details');
Route::get('/Layouts/about', [CartController::class, 'about'])->name('about');
Route::get('/Layouts/blog', [CartController::class, 'blog'])->name('blog');
Route::get('/Layouts/blog-details', [CartController::class, 'blogdetails'])->name('blog-details');
Route::get('/Layouts/contact', [CartController::class, 'contact'])->name('contact');
Route::get('/Layouts/under-construction', [CartController::class, 'underconstruction'])->name('under-construction');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
