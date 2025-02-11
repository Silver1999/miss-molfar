<?php
use App\Mail\Homemail;
use \Illuminate\Support\Facades;
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

Route::get('/email', function () {
   return view('form');

});
Route::get('/', function () {
   return view('pages.miss-molfar');

});
Route::post('/', 'AjaxUploadController@action')->name('ajaxupload.action');
Route::post('/email/', 'CallbackController@index')->name('callback');
Route::get('/ajax_upload', 'AjaxUploadController@index');
Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');