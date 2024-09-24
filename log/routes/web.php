<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; // Add this for registration

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|--------------------------------------------------------------------------
*/

// Show login page by default when visiting the root URL
Route::get('/', function () {
    return view('login'); // You can change this to 'welcome' or another view if needed
});

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Employer routes (accessible only after authentication)
Route::middleware('auth')->group(function () {
    Route::get('/employers', [EmployerController::class, 'index']);
    Route::get('/employers/create', [EmployerController::class, 'create']);
    Route::post('/employers', [EmployerController::class, 'store']);
});
