<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControllers;

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

Route::view('/test', 'layouts.App');
Route::view('/user','user');
Route::get('students', [StudentControllers::class, 'index'])->name('students.index');
Route::get('students/create', [StudentControllers::class, 'create'])->name('students.create');
Route::post('students', [StudentControllers::class, 'store'])->name('students.store');


Route::get('/dashbord', function (){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
