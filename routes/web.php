<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

    $name = 'Miro';

    return view('welcome', compact('name'));

});

Route::get('about', function (){
    return view('about');
});

Route::get('cars', [CarController::class, 'index']);
Route::get('/car/{car}', [CarController::class, 'show'])->name('car');



