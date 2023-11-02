<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingControler;
use App\Http\Controllers\ProfileController;

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

//All listing
Route::get('/', [ListingControler::class, 'index']);

//show create form
Route::get('/listings/create', [ListingControler::class, 'create'])->middleware('auth');

//Store listing data 
Route::post('/listings', [ListingControler::class, 'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit', [ListingControler::class, 'edit'])->middleware('auth');

//Upadte listing
Route::put('/listings/{listing}', [ListingControler::class, 'update'])->middleware('auth');

//Delite listing
Route::delete('/listings/{listing}', [ListingControler::class, 'destroy'])->middleware('auth');

//Manage liting
Route::get('/listings/manages', [ListingControler::class, 'manage'])->middleware('auth');

//Single listing
Route::get('/listings/{listing}', [ListingControler::class, 'show']);

//Register 
Route::get('users/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Log in F
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in U
Route::post('/users/authenticate', [UserController::class, 'authenticate']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
