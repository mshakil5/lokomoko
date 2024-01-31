<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'admin/', 'middleware' => ['auth', 'is_admin']], function(){
  
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    //profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('profile/{id}', [AdminController::class, 'adminProfileUpdate']);
    Route::post('changepassword', [AdminController::class, 'changeAdminPassword']);
    Route::put('image/{id}', [AdminController::class, 'adminImageUpload']);
    //profile end

    Route::get('/new-admin', [AdminController::class, 'getAdmin'])->name('alladmin');
    Route::post('/new-admin', [AdminController::class, 'adminStore']);
    Route::get('/new-admin/{id}/edit', [AdminController::class, 'adminEdit']);
    Route::post('/new-admin-update', [AdminController::class, 'adminUpdate']);
    Route::get('/new-admin/{id}', [AdminController::class, 'adminDelete']);
    
    Route::get('/agent', [AgentController::class, 'index'])->name('admin.agent');
    Route::post('/agent', [AgentController::class, 'store']);
    Route::get('/agent/{id}/edit', [AgentController::class, 'edit']);
    Route::post('/agent-update', [AgentController::class, 'update']);
    Route::get('/agent/{id}', [AgentController::class, 'delete']);

    Route::get('/country', [CountryController::class, 'index'])->name('admin.country');
    Route::post('/country', [CountryController::class, 'store']);
    Route::get('/country/{id}/edit', [CountryController::class, 'edit']);
    Route::post('/country-update', [CountryController::class, 'update']);
    Route::get('/country/{id}', [CountryController::class, 'delete']);

    
    Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand');
    Route::post('/brand', [BrandController::class, 'store']);
    Route::get('/brand/{id}/edit', [BrandController::class, 'edit']);
    Route::post('/brand-update', [BrandController::class, 'update']);
    Route::get('/brand/{id}', [BrandController::class, 'delete']);
    
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::post('/category-update', [CategoryController::class, 'update']);
    Route::get('/category/{id}', [CategoryController::class, 'delete']);

    
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/product-create', [ProductController::class, 'create'])->name('admin.productCreate');
    Route::post('/product', [ProductController::class, 'store'])->name('admin.productStore');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('admin.productEdit');
    Route::post('/product-update', [ProductController::class, 'update'])->name('admin.productUpdate');
    Route::get('/product/{id}', [ProductController::class, 'delete']);

    // add product pack 
    Route::get('/product-qty/{id}', [ProductController::class, 'productQty'])->name('admin.addqty');
    Route::post('/product-pack', [ProductController::class, 'productPackStore']);
    Route::get('/product-pack/{id}/edit', [ProductController::class, 'productPackedit']);
    Route::post('/product-pack-update', [ProductController::class, 'productPackUpdate']);
    Route::get('/product-pack/{id}', [ProductController::class, 'productPackDelete']);

    
});
  