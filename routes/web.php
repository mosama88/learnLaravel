<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


// Call Back Function
Route::get('/', function () {
    return view('welcome');
});


Route::get("/osama", [TestController::class, "mohamed"]);

Route::get("/printName/{name}", [TestController::class, "printName"]);





// Short Hand Code View.........
// Route::view('/home', 'index');

//Short Hand Code redirect()..........
// Route::redirect ('/here', 'https://www.youm7.com');
