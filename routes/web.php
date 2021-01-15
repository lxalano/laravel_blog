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

//测试路由
Route::get('Test',function (){
 echo 'hello test';
});

Route::get('hello', function () {
    return 'Hello Laravel8!';
});

Route::get('formpost', function (){
    return '<form method="POST" action="/foo">'. csrf_field() .'<button type="submit">提交</button></form>';
});

// 视图路由
Route::view('/article', 'article/index', ['username' => '暮云归']);
