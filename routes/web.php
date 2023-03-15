<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visits', [VisitController::class, 'index'])->name('visit.index');
Route::get('/visits/{id}', [VisitController::class, 'show'])->name('visit.show');
Route::get('/visits/create', [VisitController::class, 'create'])->name('visit.create');
Route::post('/visits/create', [VisitController::class, 'store'])->name('visit.store');