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
    return view('welcome');
});
/*
Route::get('hello-world','HelloWorldController@index');

Route::view('/bem-vindo','bemvindo');

Route::get('/post/{slug?}', function($slug = null) {
    return !is_null($slug) ? $slug : 'Não teve parâmetro informado!';
});

Route::resource('/users', 'UserController');
*/

//modifcando a rota para realizar a inclusao do middleware
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->namespace('Admin')->group(function(){
        Route::resource('posts', 'PostController');
            Route::resource('categories', 'CategoryController');
            
                Route::prefix('profile')->name('profile')->group(function(){
                 Route::get('/','ProfileController@index')->name('index');
                     Route::post('/','ProfileController@update')->name('update');

        });
    });
});


/*
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('posts', 'PostController');
    /*
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/create', 'PostController@create')->name('create');
        Route::post('/store', 'PostController@store')->name('store');
    });
    });
    */

/*
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('categories', 'CategoryController');

});
  */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
