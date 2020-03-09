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
    return view('users/index');
});


Auth::routes();
###########
#--USERS--#
###########
Route::get('/home', 'HomeController@index');

Route::get('/cart', 'UsersController@cart');
Route::get('/contact', 'UsersController@contact');
Route::get('/checkout', 'UsersController@checkout');
Route::get('/shopping', 'UsersController@shopping');
Route::get('/about-us', 'UsersController@aboutus');




// HOME
// ABOUT US
// CART
// CHECKOUT
// CONTACT
// LOGINp
// REGISTER

###########
#--USERS--#
###########


// Route Admin
Route::group(['middleware' => ['isRole' => 'admin']], function () {
    Route::get('/test', 'AdminController@index');
    //categories
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::post('/categorytrash', 'CategoriesController@categorytrash')->name('categorytrash');
    Route::post('/categoryedit', 'CategoriesController@categoryedit')->name('categoryedit');

    Route::post('/categorysave', 'CategoriesController@categorysave')->name('categorysave');


    //categorytrash

    #manage all PRODUCTS
    Route::get('/all-stock', 'ProductController@restock')->name('all-stock');
    Route::get('/manage-products', 'ProductController@manageProduct')->name('manage-products');
    Route::get('/add-product', 'ProductController@addProduct')->name('add-product');

    #manage all ORDERS
    Route::get('/manage-orders', 'OrdersController@index')->name('manage-orders');







    //product
    // user
    Route::get('/user-management', 'UserManagementController@index');
    Route::post('/updateuser', 'UserManagementController@updateUser')->name('updateuser');
    Route::post('/saveuser', 'UserManagementController@saveUser')->name('saveuser');
    Route::post('/trashuser', 'UserManagementController@trashUser')->name('trashuser');
    //users
    // Route::get('/restock', 'OrdersController@restock');
});
// Route Admin



#logout

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
#logout


// Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


// Route::get('/test', 'TestController@index')->name('test');/