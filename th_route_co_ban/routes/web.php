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
    return view('welcome');
});
Route::get('/', function (){
   echo "<h2> đây là trang chủ </h2>";
});
Route::get('/about', function (){
   echo "<h2> đây là trang about </h2>";
});
Route::get('/contact', function (){
    echo "<h2> đây là trang contact</h2>";
});
Route::get('/user', function (){
    return view('user',['name'=>'Hoàng Nam']);
});
Route::get('/user/{name}', function ($name){
    echo "<h2> User name is $name </h2>";
});
Route::get('/user-name/{name?}', function ($name='Bảo Ngọc'){
    echo "<h2> Tôi tên là $name </h2>";
});
Route::get('/home', 'App\Http\Controllers\HomeController@index');

