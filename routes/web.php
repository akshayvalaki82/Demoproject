<?php

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
// Route::get('/test', function () {
//   return view('test');
// });
// Route::get('/app', function () {
//   return view('layouts/app');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/posts', 'Admin\PostsController');


Route::resource('admin/user', 'Admin\UserController');
Route::resource('admin/configuration', 'Admin\ConfigurationController');
Route::resource('admin/banner', 'Admin\BannerController');
Route::resource('admin/category', 'Admin\CategoryController');