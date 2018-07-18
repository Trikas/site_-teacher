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

Route::get('/', 'userSide\PrintLessonOnIndex@SelectBd')->middleware('localUser');

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
// принт уроков
Route::get('/lesson/{id}/{title}', 'userSide\PrintLessonFull@SelectLesson');

//------------------------Админка----------------------------------//
Route::get('/admin','AdminSection\IndexPageModule@selectBd'
)->middleware('adminLogin');

Route::get('/admin/user_reg', 'AdminSection\ShowDataTableUserReg@showUser');
Route::get('/admin/user_visits', 'AdminSection\ShowDataTableUserVisit@showUser');
Route::get('/admin/make_lesson', function (){

	return view('adminsection.inc.make_lesson');
});
Route::post('/admin/make_lesson/to_bd', 'AdminSection\LessonToBd@insertLesson');
Route::get('/admin/all_lessons', 'AdminSection\PrintAllLessons@SelectAllLess');

//---------------------конец админки---------------------------------//

//-------------------------Ajax-запросы------------------------------//
Route::get('admin/ajax', 'AjaxTest@test');
//----------------------------конец----------------------------------//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
