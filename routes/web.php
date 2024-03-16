<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhonepayController;
  
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

// cache clear
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
 });
//  cache clear
  
// Route::get('/', function () {
//     return view('welcome');
// });
  
Auth::routes();
Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/clear-session', [FrontendController::class, 'clearAllSessionData'])->name('clearSessionData');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/occasions', [FrontendController::class, 'occasions'])->name('occasions');
Route::get('/product/{slug}', [FrontendController::class, 'productDetails'])->name('productDetails');
  
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/return-policy', [FrontendController::class, 'return_policy'])->name('returnPolicy');
Route::get('/shipping-policy', [FrontendController::class, 'shipping_policy'])->name('shippingPolicy');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');


Route::post('/get-product-price', [ProductController::class, 'getPackDetails']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCard');

Route::get('/cart', [CartController::class, 'getCart'])->name('cart');
Route::get('/checkout', [CartController::class, 'getCheckout'])->name('checkout');


Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::patch('add-item-cart', [CartController::class, 'add_item_cart'])->name('add_item_cart');
Route::patch('minus-item-cart', [CartController::class, 'minus_item_cart'])->name('minus_item_cart');
Route::patch('add-shipping-address', [CartController::class, 'shippingAddress'])->name('shippingAddress');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');


Route::get('/download/{id}', [OrderController::class, 'invoice_download'])->name('download');


Route::post('/order-store', [OrderController::class, 'orderStore'])->name('order.store');
Route::get('/order-confirmation/{id}', [OrderController::class, 'orderConfirmation'])->name('confirmorder');


// phonepe payment
Route::post('phonepe',[PhonepayController::class,'phonePe'])->name('order.phonepe');;
Route::any('phonepe-response',[PhonepayController::class,'response'])->name('phonepe.response');
Route::get('refund/{id}',[PhonepayController::class,'refundProcess']);


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'user/', 'middleware' => ['auth', 'is_user']], function(){
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'manager/', 'middleware' => ['auth', 'is_manager']], function(){
  
    Route::get('/dashboard', [HomeController::class, 'managerHome'])->name('manager.dashboard');
});
 