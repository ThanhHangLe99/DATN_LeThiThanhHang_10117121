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

 /*Route::get('index1',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);*/

Route::group(['prefix'=>'search'],function(){
	Route::get('/','App\Http\Controllers\FEController@getSearch');
});


Route::get('index', 'App\Http\Controllers\PageController@getIndex');
Route::get('home', 'App\Http\Controllers\FEController@trangchu');
Route::get('chitiettintuc/{id}', 'App\Http\Controllers\FEController@chitiettintuc');
Route::get('loaitin/{type}','App\Http\Controllers\FEController@loaitin');

Route::group(['prefix'=>'chuyenmuc'],function(){
	Route::get('/','App\Http\Controllers\PageController@getChuyenmuc');
	Route::get('add','App\Http\Controllers\PageController@getAddChuyenmuc');
	Route::post('add','App\Http\Controllers\PageController@postAddChuyenmuc');
	Route::get('delete/{id}','App\Http\Controllers\PageController@destroy');
	Route::get('edit/{id}','App\Http\Controllers\PageController@getSuaCM');
	Route::post('edit/{id}','App\Http\Controllers\PageController@postSuaCM');

});

Route::group(['prefix'=>'video'],function(){
	Route::get('/','App\Http\Controllers\PageController@getVideo');
	Route::get('add','App\Http\Controllers\PageController@getAddVideo');
	Route::post('add','App\Http\Controllers\PageController@postAddVideo');
	Route::get('delete/{id}','App\Http\Controllers\PageController@delete1');

});

Route::group(['prefix'=>'tintuc'],function(){
	Route::get('/','App\Http\Controllers\PageController@getTintuc');
	Route::get('add','App\Http\Controllers\PageController@getAddTin');
	Route::post('add','App\Http\Controllers\PageController@postAddTin');
	Route::get('delete/{id}','App\Http\Controllers\PageController@delete');
	Route::get('edit/{id}','App\Http\Controllers\PageController@getEditTin');
	Route::post('edit/{id}','App\Http\Controllers\PageController@postEditTin');

});

Route::group(['prefix'=>'user'],function(){
	Route::get('/','App\Http\Controllers\UserController@getDanhSach');
	Route::get('add','App\Http\Controllers\UserController@getThem');
	Route::post('add','App\Http\Controllers\UserController@postThem');
	Route::get('delete/{id}','App\Http\Controllers\UserController@delete');
	Route::get('edit/{id}','App\Http\Controllers\UserController@getSua');
	Route::post('edit/{id}','App\Http\Controllers\UserController@postSua');
	Route::get('login','App\Http\Controllers\UserController@getLogin');


});
Route::group(['prefix'=>'login'],function(){
	Route::get('/','App\Http\Controllers\LoginController@getLogin');
	Route::post('/','App\Http\Controllers\LoginController@postLogin');
});
Route::get('logout','App\Http\Controllers\PageController@getLogout');

Route::post('comment/{id}','App\Http\Controllers\FEController@postComment');

Route::group(['prefix'=>'comment'],function(){
	Route::get('/','App\Http\Controllers\PageController@getComment');
	
	Route::get('delete/{id}','App\Http\Controllers\PageController@delete2');

});


