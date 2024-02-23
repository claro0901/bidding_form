<?php

use App\Http\Controllers\Bidding;
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
    return view('index');
});

Route::post('/store_bidding', [Bidding::class, 'store'])->name('store_bidding');
Route::get('/details', [Bidding::class, 'details'])->name('details');
Route::get('delete/{form}', [Bidding::class, 'delete']);
Route::get('details/{form}', [Bidding::class, 'whole']);
Route::post('update/{id}', [Bidding::class, 'update'])->name('whole.post');
// Route::get('/details', [Bidding::class, 'details'])->name('details');
