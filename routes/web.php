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
Route::get('/about', 'About@HeadMenu');
Route::get('/send_sms','SendSms@HeadMenu');
Route::post('/send_sms','SendSms@InsertToBd');

// принт уроков
Route::get('/lessons/{id}/{title}', 'userSide\PrintLessonFull@SelectLesson')->middleware('auth');

Route::get('/lesson/choice/{name}', 'Lessons\SelectLessons@choiceLess');
//------------------------Админка----------------------------------//
Route::get('/admin','AdminSection\IndexPageModule@selectBd'
)->middleware('adminLogin');

Route::get('/admin/make_lesson/{id?}', 'AdminSection\MakeLesson@Make')->name('post');
Route::get('/admin/user_reg', 'AdminSection\ShowDataTableUserReg@showUser');
Route::get('/admin/user_visits', 'AdminSection\ShowDataTableUserVisit@showUser');
Route::get('/admin/waiting_reg', 'AdminSection\ShowDataTableUserWait@showUser');
Route::post('/admin/make_lesson/to_bd', 'AdminSection\LessonToBd@insertLesson');
Route::get('/admin/all_lessons', 'AdminSection\PrintAllLessons@SelectAllLess');

Route::get('/admin/register650287', 'Auth\RegisterController@showRegistrationForm')->name('register650287');
Route::post('/admin/register650287', 'Auth\RegisterController@register');

//---------------------конец админки---------------------------------//
Route::get('/login_info', function (){
	return view('auth.login_info');
});
//-------------------------Ajax-запросы------------------------------//
Route::post('/admin/ajax', 'AjaxTest@test');

// Route::get('/admin/ajax', 'AjaxTest@show');
//----------------------------конец----------------------------------//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


