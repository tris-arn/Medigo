<?php

<<<<<<< Updated upstream
=======
use App\Livewire\Cart;
use App\Livewire\Product\Product;
use App\Livewire\LandingPage\Index;
use App\Livewire\Profile\NavProfile;
use App\Livewire\Profile\UserProfile;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


<<<<<<< Updated upstream
=======
// profile
Route::get('/profile', UserProfile::class);
Route::get('/changePassOld', OldPasswordCheck::class);
Route::get('/newPass', NewPasswordConfirm::class);
Route::get('/logout', Logout::class);

// cart
Route::get('/cart', Cart::class);

// product
Route::get('/product', Product::class);
>>>>>>> Stashed changes
