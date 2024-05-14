<?php

use App\Livewire\Cart;
use App\Livewire\Profile\NavProfile;
use App\Livewire\Profile\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Profile\LogOut;
use App\Livewire\Profile\ChangePassword\OldPasswordCheck;
use App\Livewire\Profile\ChangePassword\NewPasswordConfirm;


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

Route::get('/', function () {
    return view('LandingPage.index');
});

// profile
Route::get('/profile', UserProfile::class);
Route::get('/changePassOld', OldPasswordCheck::class);
Route::get('/newPass', NewPasswordConfirm::class);
Route::get('/logout', Logout::class);
// cart
Route::get('/cart', Cart::class);