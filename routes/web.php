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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/resume', 'FrontController@resume')->name('resume');
Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/contact', 'FrontController@contact')->name('contact');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/dashboard','AdminController@index')->name('admin.index');
    Route::get('/education','EducationController@index')->name('admin.education');
    Route::get('/education-add','EducationController@add')->name('admin.education-add');
    Route::post('/education-add','EducationController@add_data');


});



Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
