<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\KebabController;

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


Route::get('/pizzas',[PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create',[PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}',[PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}',[PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');


Route::get('/kebabs',[KebabController::class, 'index'])->name('kebabs.index')->middleware('auth');
Route::get('/kebabs/create',[KebabController::class, 'create'])->name('kebabs.create');
Route::get('/kebabs/{id}',[KebabController::class, 'show'])->name('kebabs.show')->middleware('auth');
Route::post('/kebabs', [KebabController::class, 'store'])->name('kebabs.store');
Route::delete('/kebabs/{id}',[KebabController::class, 'destroy'])->name('kebabs.destroy')->middleware('auth');

Auth::routes(
    //['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




