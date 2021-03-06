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


//https://www.malasngoding.com/membuat-upload-file-laravel/
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/upload', 'UploadController@upload');
    Route::post('/upload/proses', 'UploadController@proses_upload');
});
