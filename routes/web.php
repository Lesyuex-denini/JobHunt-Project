<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('register', [CustomAuthController::class, 'register']);
Route::post('register', [CustomAuthController::class, 'create'])->name('register');
Route::get('login', [CustomAuthController::class, 'login']);
Route::post('login', [CustomAuthController::class, 'authenticate'])->name('login');
Route::get('logout', [CustomAuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard')->middleware('auth');