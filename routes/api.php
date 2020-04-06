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

Route::post('/products', 'ProductController@index');

Route::Resource('/flash-sales', 'SaleController');

Route::Resource('/sales', 'SaleController');

Route::post('/best-seller', 'BestSellerController@index');

Route::Resource('/attributes', 'AttributesController', ['parameters' => [
    'attributes' => 'id'
]]);

Route::Resource('/relate.category.type', 'RelateProductController');
Route::Resource('/recommend.category.type', 'RecommendController');

Route::Resource('/cart', 'CartController');
Route::get('/carts', 'CartController@get_all_items');
Route::group(['prefix' => 'cart'], function(){
    Route::get('/', 'CartController@count');
    Route::post('/change', 'CartController@change');
    Route::post('/remove', 'CartController@remove');
});
Route::group(['prefix' => 'zone'], function(){
    Route::get('/city', 'ZoneController@city');
    Route::get('/district/{id}', 'ZoneController@district');
    Route::get('/village/{id}', 'ZoneController@village');
});

Route::post('/process-checkout', 'CheckoutController@store');

