<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Models\Product;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);

Route::resource('categories', CategorieController::class);

Route::get('users', function () {
    return view('users/index')->with('users', User::all());
});

Route::get('/deleteUser/{id}', [ProductController::class, 'deleteUser']);


Route::get('about', [AboutController::class, 'index'])->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->with('products', Product::all());
})->name('dashboard');

// Route::post('/'[\App\Http\Controllers\CardController::class])->name();

Route::get('panier/{id}/{qty}', [CardController::class, 'card'])->name('panier.card');

Route::get('panier', [CardController::class, 'index'])->name('panier');

Route::post('commande', [CommandeController::class, 'save'])->name('commande')->middleware('auth');
