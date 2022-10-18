<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [PagesController::class, 'homePage' ])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(StudentController::class)->group(function () {
    Route::get('/student/{id}/profile', 'profile')->name('student.profile');
    Route::post('/student/{id}/profile', 'update')->name('update.student.profile');
});

require __DIR__.'/auth.php';

