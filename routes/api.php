<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Resource('/products', 'ProductController');

Route::Resource('/flash-sales', 'SaleController');

Route::Resource('/sales', 'SaleController');

Route::Resource('/best-seller', 'BestSellerController');

Route::Resource('/attributes', 'AttributesController', ['parameters' => [
    'attributes' => 'id'
]]);

<<<<<<< HEAD
Route::Resource('/relate.category', 'RelateProductController');
=======
Route::Resource('/cart', 'CartController');

>>>>>>> 59727cb1390fb6262641839c3a0ca1f19a7b7624
