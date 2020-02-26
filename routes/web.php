<?php

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

Route::get('/', function () {
    return view('theme.page.home');
});

//Route::get('/product-details/{id}', function () {
//    return view('theme.page.product.detail');
//});

Route::get('product-details/{id}', 'ProductController@getProduct');

Route::get('/all-reviews/{id}', function () {
    return view('theme.page.product.reviews');
});


Route::group(['prefix'=>'/categories'], function (){
    Route::get('/', 'CategoriesController@categories');
    Route::get('/boys', 'CategoriesController@getBoys');
    Route::get('/girls', 'CategoriesController@getGirls');
    Route::get('/shoes', 'CategoriesController@getShoes');
    Route::get('/accessories', 'CategoriesController@getAccessories');
//    Route::get('/', function () {
//        $title = 'Danh mục';
//        return view('theme.page.category.categories', compact('title'));
//    });
//    Route::get('/boys', function () {
//        $title = 'Thời trang bé trai';
//        return view('theme.page.category.category', compact('title'));
//    });
//    Route::get('/girls', function () {
//        $title = 'Thời trang bé gái';
//        return view('theme.page.category.category', compact('title'));
//    });
//    Route::get('/shoes', function () {
//        $title = 'Giày dép';
//        return view('theme.page.category.category', compact('title'));
//    });
//    Route::get('/accessories', function () {
//        $title = 'Phụ kiện thời trang';
//        return view('theme.page.category.category', compact('title'));
//    });
});

Route::get('/sales', function () {
    return view('theme.page.sales');
});
Route::get('/cart', function () {
    return view('theme.page.cart');
});
Route::get('/info', function () {
    return view('theme.page.info');
});
Route::get('/notifications', function () {
    return view('theme.page.notifications');
});
