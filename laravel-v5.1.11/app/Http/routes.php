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

//Route::get('/', function () {
//    return view('welcome');
//});
//首页面
Route::any('/','Logincontroller@index');
Route::any('admin/index','Admincontroller@index');
Route::any('admin/report','Admincontroller@report');
Route::any('admin/green','Admincontroller@green');
Route::any('admin/arrive','Admincontroller@arrive');
Route::any('admin/delay','Admincontroller@delay');
Route::any('admin/know','Admincontroller@know');
Route::any('admin/notice','Admincontroller@notice');
Route::any('admin/data','Admincontroller@data');
Route::any('admin/ask','Admincontroller@ask');
Route::any('admin/entrance','Admincontroller@entrance');
Route::any('admin/user_center','Admincontroller@user_center');
Route::any('admin/commonquestion','Admincontroller@commonquestion');
Route::any('admin/adress','Admincontroller@adress');
Route::any('admin/tiwen','Admincontroller@tiwen');
Route::any('admin/myanswer','Admincontroller@myanswer');
Route::any('admin/user_info','Admincontroller@user_info');
Route::any('admin/handle_user_info','Admincontroller@handle_user_info');
Route::any('admin/dorm','Admincontroller@dorm');
Route::any('admin/handle_dorm','Admincontroller@handle_dorm');
Route::any('admin/route','Admincontroller@route');
Route::any('admin/reportcard','Admincontroller@reportcard');
Route::any('admin/mem','Admincontroller@mem');








