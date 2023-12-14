<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ClienteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','home')->name('home');



Auth::routes();
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog',[ClienteController::class,'index'])->name('blog');

Route::get('/blog/create',[ClienteController::class,'create'])->name('clientes.create');
Route::post('/blog', [ClienteController::class,'store'])->name('clientes.store');
Route::get('/blog/{cliente}',[ClienteController::class,'show'])->name('clientes.show');
Route::get('/blog/{cliente}/edit',[ClienteController::class,'edit'])->name('clientes.edit');
Route::patch('/blog/{cliente}',[ClienteController::class,'update'])->name('clientes.update');
Route::delete('/blog/{cliente}',[ClienteController::class,'destroy'])->name('clientes.destroy');



