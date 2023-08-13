<?php

use App\Http\Controllers\PaginatedController;
use App\Http\Controllers\UnpaginatedController;
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
Route::redirect('/', 'paginated');
Route::get('/paginated', PaginatedController::class)->name('paginated');
Route::get('/unpaginated', UnpaginatedController::class)->name('unpaginated');
