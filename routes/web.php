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


// ------------------------------[ Website public pages]-----------------------------

Route::get('/', function () {
    return view('will');
});
Route::post('/','VedioController@store', function () {
    return view('will');
});
Route::get('/','VedioController@index', function () {
    return view('will');
});
Route::post('about', 'AboutController@store', function () {
    return view('about');
});
Route::get('about','AboutController@index', function () {
    return view('about');
});
Route::get('services','ServiceController@index', function () {
    return view('services');
});
Route::post('services', 'ServiceController@store', function () {
    return view('services');
});
Route::get('register', function () {
    return view('register');
});
//--------------------------------------------------------------------------------------

// ------------------------------[ Admin panil]-----------------------------

Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['auth','admin']], function()
{
    Route::get('/admin_home', 'UserController@index');
    Route::prefix('admin_home')-> group(function()
    {
Route::get('/admin_home/showusers', 'ShowuserController@index');
Route::get('/admin_home/profile', 'ProfileController@index');           // ProfileController
Route::post('/admin_home/profile', 'ProfileController@update');
Route::get('/admin_home/add_video_mainPage','VedioController@create');
Route::post('/admin_home','VedioController@store');                       // VedioController  Main page video
Route::get('/admin_home/index_video_mainPage','VedioController@indexAdminPage');
Route::get('/admin_home/index_video_mainPage/{Vedio}/delete','VedioController@destroy');
Route::get('/admin_home/add_video_aboutPage','AboutController@create');
Route::post('/admin_home/add_video_aboutPage', 'AboutController@store');              // VedioController  About us page video
Route::get('/admin_home/index_video_aboutPage','AboutController@indexAdminPage');
Route::get('/admin_home/index_video_aboutPage/{About}/delete','AboutController@destroy');
Route::get('/admin_home/add_video_servicePage','ServiceController@create');
Route::post('/admin_home/add_video_servicePage', 'ServiceController@store');         // VedioController Services page video
Route::get('/admin_home/index_video_servicePage','ServiceController@indexAdminPage');
Route::get('/admin_home/index_video_servicePage/{Service}/delete','ServiceController@destroy');
Route::get('/admin_home/finacial', 'FinacialController@index');
  //  Route::get('/admin/indexz/{Vedio}/editz','VedioController@edit', function () {
  //      return view('admin.editz');
  //  });

  //  Route::post('/admin/indexz/{Vedio}','VedioController@update', function () {
  //  return view('admin.editz');
  //  });
});
});
//--------------------------------------------------------------------------------------


// ------------------------------[ Users ]-----------------------------


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'ProfileController@index');                                 // ProfileController
Route::post('/home/profile', 'ProfileController@update');
Route::get('/home/write_will/','WillController@create');
Route::post('/home/write_will','WillController@store');
Route::get('/home/index_written_wills','WillController@index');                          // WillController
Route::get('home/edit_written_will/{Will}/edit','WillController@edit');
Route::post('home/edit_written_will/{Will}','WillController@update');
Route::get('home/index_written_wills/{Will}/delete','WillController@destroy');
Route::get('/home/payment/','PaymnetController@create'); 

Route::get('/home/index_media','MediaController@index');
Route::get('/home/add_media/','MediaController@create');
Route::post('/home/add_media','MediaController@store');
Route::get('home/index_media/{Media}/delete','MediaController@destroy');                 // MediaController
Route::get('home/index_media/{Media}/edit_media','MediaController@edit');
Route::post('home/index_media/{Media}','MediaController@update');

Route::get('/home/write_contact/','ContactController@create');
Route::post('/home/write_contact/','ContactController@store');
Route::get('/home/index_written_contacts/','ContactController@index');
Route::get('home/index_written_contacts/{Contact}/delete','ContactController@destroy');  // ContactController
Route::get('home/index_written_contacts/{Contact}/edit_written_contact','ContactController@edit');
Route::post('home/index_written_contacts/{Contact}','ContactController@update');
Route::get('/home/payment/','PaymnetController@create');
Route::post('/home','PaymnetController@charge');


