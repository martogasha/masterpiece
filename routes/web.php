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

Route::get('home', function () {
    return view('welcome');
});
Route::get('logo', function () {
    return view('testing');
});
Route::get('l', function () {
    return view('t');
});
Route::get('/', function () {
    return view('ttttt');
});
Route::get('/h', [App\Http\Controllers\IndexController::class, 'test']);
Route::get('explore', [App\Http\Controllers\IndexController::class, 'gallery']);
Route::get('digitalPrinting', [App\Http\Controllers\IndexController::class, 'digital']);
Route::get('largeFormatPrinting', [App\Http\Controllers\IndexController::class, 'large']);
Route::get('offsetPrinting', [App\Http\Controllers\IndexController::class, 'offsetPrinting']);
Route::get('designLayout', [App\Http\Controllers\IndexController::class, 'designLayout']);
Route::get('outdoor', [App\Http\Controllers\IndexController::class, 'outdoor']);
Route::get('Publication', [App\Http\Controllers\IndexController::class, 'publication']);
Route::get('brandingPromotion', [App\Http\Controllers\IndexController::class, 'brandingPromotion']);
Route::get('Packaging', [App\Http\Controllers\IndexController::class, 'Packaging']);
Route::get('corporate', [App\Http\Controllers\IndexController::class, 'corporate']);
Route::get('infographics', [App\Http\Controllers\IndexController::class, 'infographics']);
Route::get('onlineAdvertising', [App\Http\Controllers\IndexController::class, 'onlineAdvertising']);
Route::get('service', [App\Http\Controllers\IndexController::class, 'services']);
Route::get('about', [App\Http\Controllers\IndexController::class, 'aboutUs']);
Route::get('contact', [App\Http\Controllers\IndexController::class, 'contact']);
Route::get('client', [App\Http\Controllers\IndexController::class, 'client']);
Route::get('preview', [App\Http\Controllers\IndexController::class, 'preview']);
Route::get('email', [App\Http\Controllers\IndexController::class, 'email']);
Route::view('ttt','ttt');
