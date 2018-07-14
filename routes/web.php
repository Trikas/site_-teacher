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

Route::get('/', 'AboutUserUnRegistr@AboutUser');

// 	function () {
//     return view('major_str.index');
// });
// Route::get('/home', function () {
//   return view('major_str.index');
// });
Route::get('/about', function (){
  return view('major_str.about');
});
Route::get('/send_sms', function (){
  return view('major_str.send_sms');
});
Route::get('/post', function (){
  return view('post.post');
});

//Админка
Route::get('/admin', ['middleware'=>'admin', function (){
	return view('adminsection.index');
}]);

// 	function (){
//   
// });

//конец админки

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
