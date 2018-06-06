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

// Route::get('home', function() {
//     echo("hello world. this is home page.");
// });

// Route::prefix('admin')->group(function(){
//     Route::get('home', function(){
//         echo "admin, home";
//     });
//     Route::get('detail', function(){
//         echo 'admin, detail';
//     });
// });
// //truyen tham so
// Route::get('detail/{id}', function($_id){
//     echo $_id;
// });
// //tham so co the co hoac khong. gia tri mac dinh.
// Route::get('type/{page?}', function($page = 1){
//     echo $page;
// });//->where('page', '[0-9]+'); //dinh nghia trong routeserviceprovider
// //php artisan make:controller PageController
// Route::get('demo-controller', 'PageController@getHomePage');

// Route::get('demo-controller2/{product?}', 'PageController@getHomePage2');

// Route::get('demo-controller3/{product?}', 'PageController@getHomePage3');

Route::get('home', 'PageController@showview');
Route::prefix('admin')->group(function(){
    Route::get('home', 'AdminController@getHomePage');
    Route::get('detail', 'AdminController@getDetailPage');
    Route::get('type', 'AdminController@getTypePage');
});
Route::get('contact', 'ContactController@getContact')->name('get-contact');
Route::post('contact', 'ContactController@postContact')->name('post-contact');