<?php

use App\Http\Controllers\ApacheController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;
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

Route::controller(SampleController::class)->group(function() {
    Route::get('/sample', 'index');
    Route::get('/sample/show', 'show');
});

Route::controller(ApacheController::class)->group(function() {
    Route::get('/apache/rewrite-module', 'checkRewriteModule');
});
