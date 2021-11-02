<?php

use Illuminate\Support\Facades\Route;
use App\Models\Food;
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

Route::get('/home', function () {
    $data = Food::$foodData;
    return view('home')->with('foodData', $data);
})->name('home');

Route::get('/detail/{id}', function ($id) {
    $food = [];
    $foodItem = Food::$foodData;
    foreach ($foodItem as $item) {
        if ($item['id'] == $id) {
            $food = $item;
            break;
        }
    }
    return view('detail')->with('food', $food);
})->name('detail_food');
