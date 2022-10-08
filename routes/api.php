<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Models\Product;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    
Route::get('products', [ProductsController::class, 'allProducts']);

Route::post('product/add',[ProductsController::class, 'addProduct']);

Route::get('products/{product_id}',[ProductsController::class, 'singleProduct']);

Route::put('products/{product_id}/update',[ProductsController::class, 'updateProduct']);

Route::delete('products/{product_id}/delete',[ProductsController::class, 'deleteProduct']);

Route::get('products/{title}/search',[ProductsController::class, 'searchProduct']);

Route::get('products/category/categories',[ProductsController::class, 'allCategories']);

Route::get('products/category/{category_name}',[ProductsController::class, 'categoryProduct']);

