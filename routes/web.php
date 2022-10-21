<?php

use App\Http\Controllers\InvokeController;
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
    collect([
        'demo/request/v2-wallpaper.jpg',
    ])
        ->each(function ($file) {
            dd($file);
        });
});

//model::skip
//$request->hasany
Route::get('invoke-action', InvokeController::class);
