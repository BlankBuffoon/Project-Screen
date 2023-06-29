<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::any('/{any}', function(){
    return response('Web routes are disabled. Use /api', 400);
})->where('any', '.*');

Route::fallback(function(){
    return response('Web routes are disabled. Use /api', 400);
});
