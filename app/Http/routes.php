<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datauser', 'DataController@indexuser');
Route::get('/galeriuser', 'DataController@galeriuser');
Route::get('/contactuser', 'DataController@contactuser');
Route::get('/aboutuser', 'DataController@aboutuser');
Route::get('/newsuser', 'NewsController@newsuser');
Route::get('/homee', 'DataController@home');
Route::get('/homeuser', 'DataController@homeuser');





Route::get('/user/create', 'UserController@createuser');
Route::put('/user', 'UserController@storeuser');

Route::get('/user/{id}/edit', 'UserController@edituser');
Route::put('/user/{id}', 'UserController@updateuser');






Route::get('queryuser', 'DataController@searchuser');


Route::group(['middleware' => 'web'], function (){

	Route::auth();
});

Route::group(['middleware' => ['web', 'auth']], function()
{	
	Route::get('/home', 'HomeController@index');
	Route::get('/datauser', 'DataController@indexuser');
	Route::get('/',function(){
		if (Auth::user()->jabatan == 1){

			return redirect('/homeadmin');
		} else {

			return redirect('/homeuser');
		}
	});
});

Route::get('admin', ['middleware'=> ['web','auth','jabatan'],function () {
	return view('jabatan/admin_home');
}]);

Route::group(['middleware'=>['web', 'auth', 'jabatan']],function() {

Route::get('/data', 'DataController@index');
Route::get('/user', 'UserController@user');
Route::get('/galeri', 'DataController@galeri');
Route::get('/contact', 'DataController@contact');
Route::get('/about', 'DataController@about');
Route::get('/homeadmin', 'DataController@homeadmin');

Route::get('/data/create', 'DataController@create');
Route::put('/data', 'DataController@store');

Route::get('/data/{id}/edit', 'DataController@edit');
Route::put('/data/{id}', 'DataController@update');

Route::delete('/data/{id}', 'DataController@destroy');

Route::get('query', 'DataController@search');

Route::delete('/user/{id}', 'UserController@destroyuser');


});

Route::group(['middleware'=>['web', 'auth', 'jabatan']],function() {

Route::get('/news', 'NewsController@news');
Route::get('/news/createnews', 'NewsController@createnews');
Route::put('/news', 'NewsController@inputnews');

Route::get('/news/{id}/editnews', 'NewsController@editnews');
Route::put('/news/{id}', 'NewsController@updatenews');

Route::delete('/news/{id}', 'NewsController@destroynews');


});

Route::group(['middleware'=>['web', 'auth', 'jabatan']],function() {

Route::get('/view/{id}/buy', 'BuyController@view');
Route::put('/view/', 'BuyController@bought');

Route::get('/transaksi', 'BuyController@transaksi');
Route::delete('/transaksi/{id}', 'BuyController@destroytransaksi');

Route::get('/pelanggan/{id}', 'BuyController@pelanggan');

});

Route::get('/viewuser/{id}', 'BuyController@viewuser');
Route::put('/viewuser/', 'BuyController@boughtuser');
