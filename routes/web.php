<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/products/{kategori_id}', [DashboardController::class, 'getProduct']);

Route::prefix('product')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('/form', [ProductCategoryController::class, 'formCategory']);
        Route::get('/edit/{kategori_id}', [ProductCategoryController::class, 'editCategory']);
        Route::post('/', [ProductCategoryController::class, 'postCategory']);
        Route::post('/update/{kategori_id}', [ProductCategoryController::class, 'updateCategory']);
        Route::post('/delete', [ProductCategoryController::class, 'deleteCategory']);
    });
    Route::get('/', [ProductController::class, 'manageProduct']);
    Route::get('/form', [ProductController::class, 'formProduct']);
    Route::get('/edit/{id}', [ProductController::class, 'editProduct']);
    Route::post('/update/{id}', [ProductController::class, 'updateProduct']);
    Route::post('/delete', [ProductController::class, 'deleteProduct']);
    Route::post('/', [ProductController::class, 'postProduct']);
});