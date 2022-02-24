<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeoLocationController;




Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/locator',[GeoLocationController::class, 'ip_locator']);
Route::get('/location',[GeoLocationController::class, 'location']);
Route::post('get_add_from_ip_post',[GeoLocationController::class, 'ip_locator_post']);
