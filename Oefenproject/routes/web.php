<?php

use Illuminate\Support\Facades\Route;

use App\Models\Restaurant;
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

Route::get('/restaurants', function () {
    return view('restaurants', [
        'restaurants' => Restaurant::all()
    ]);
});

Route::get('/restaurants/{id}', function (int $id) {
    $restaurant = Restaurant::find($id);

    if (!$restaurant) {
        return redirect('/restaurants');
    }
    return view('restaurant', [
        'restaurant' => $restaurant
    ]);
});


Route::get('/about-us', function () {
    $restaurants = 'Belgique';
    return view('about-us', [
        'restaurant' => $restaurants
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


