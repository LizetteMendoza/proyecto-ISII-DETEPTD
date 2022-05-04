<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactanosController;
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
    return view('/index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/soporte', function () {
    return view('soporte');
})->name('soporte');

Route::get('/contactanos', [ContactanosController::class, 'index'])->name('contactanos.index'); //me manda al form de contacto

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('/application', [Application::class, 'index'])->name('index');

Route::resource('/application', ApplicationController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/index');
    })->name('dashboard');
});
