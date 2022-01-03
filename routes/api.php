<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//if we have just crud on model we can use just resource to get all Route.
//to list all route run command php artisan route:list
Route::resource('products',ProductController::class);

Route::get('/products/search/{name}',[ProductController::class,'search']);

Route::get('/products',[ProductController::class,'index']);

Route::post('/products',[ProductController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
