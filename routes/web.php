<?php

use App\Http\Controllers\ProductController;
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

Route::get("products", [
    ProductController::class,
    "index"
]);

Route::get("products/{productName}", [
    ProductController::class,
    "detail"
]);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/user", function() {
//     return "This is user page";
// });

// Route::get('/games', function () {
//     return ['LOL', 'PUBG', 'DOTA 2'];
// });

// Route::get('something', function () {
//     return redirect("https://google.com");
// });