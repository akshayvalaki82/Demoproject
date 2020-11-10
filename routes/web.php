<?php

use Illuminate\Support\Facades\Route;
// use Auth;
// use App\Http\Controllers\CouponController;
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
  return redirect('/login');
});

Route::get('/admin/userss', function () {
  // return view('welcome');
  return redirect('/login');
});

Route::get('/form', function () {
  return view('user/form');
});
// Route::get('/main_page', function () {
//   return view('frontend/layout/main_page');
// });
// Route::get('/user-login', function () {
//   return view('frontend/auth-page/login');
// });

// Route::get('/app', function () {
//   return view('layouts/app');
// });

Auth::routes();

Route::group(['middleware' => ['web']], function () {

  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('admin/posts', 'Admin\PostsController');


  Route::resource('admin/user', 'Admin\UserController');

  Route::resource('admin/configuration', 'Admin\ConfigurationController');

  Route::resource('admin/banner', 'Admin\BannerController');

  Route::resource('admin/category', 'Admin\CategoryController');

  Route::resource('admin/product-attributes', 'Admin\ProductAttributesController');

  Route::resource('admin/product', 'Admin\ProductController');

  Route::post('/admin/product/get-attribute-value', 'Admin\ProductController@getAttributeValue');

  Route::post('/admin/product/get-attribute-value-new', 'Admin\ProductController@getAttributeValuenew');

  Route::resource('admin/coupon', 'Admin\CouponController');
});

Route::group(['middleware' => ['web']], function () {

  Route::get('/user-login','Frontend\FrontendUserLoginConroller@index')->name('user-login');

  Route::post('/submit-login','Frontend\FrontendUserLoginConroller@userlogin');

  // Route::GET('/submit-user-register','Frontend\FrontendUserLoginConroller@userregister');

  Route::post('mainpage/logout', 'Frontend\FrontendUserLoginConroller@logout');

  Route::resource('/mainpage', 'Frontend\MainpageController');

  Route::POST('/mainpage/get-product-details', 'Admin\ProductController@getproductdetails');

  Route::POST('/mainpage/get-all-products', 'Admin\ProductController@getallproductdetails');
});
