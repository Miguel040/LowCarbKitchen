<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\recipes\RecipesController;
use App\Http\Controllers\recipes\NewRecipeController;
use App\Http\Controllers\recipes\RanrecipeController;
use App\Http\Controllers\recipes\FamrecipesController;
use App\Http\Controllers\recipes\FavrecipesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

/* Route::get('/', function () {
    return view('home');
})->name('home'); */

Route::get('/register', [RegisterController::class, 'index'])->name('register'); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'store']); 

Route::get('/logout', [LogoutController::class, 'store'])->name('logout'); 

Route::get('/famrecipes', [FamrecipesController::class, 'index'])->name('famrecipes'); 
Route::get('/ranrecipe', [RanrecipeController::class, 'index'])->name('ranrecipe');
Route::get('/favrecipes', [FavrecipesController::class, 'index'])->name('favrecipes');  

Route::get('/newrecipe', [NewRecipeController::class, 'index'])->name('newrecipe'); 
Route::post('/newrecipe', [RecipesController::class, 'store']); 
Route::delete('/home/{recipe}',[RecipesController::class, 'destroy'])->name('recipes.destroy');


