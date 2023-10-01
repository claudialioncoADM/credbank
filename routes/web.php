<?php

use App\Http\Controllers\ContaPage;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\InstitucionalPage;
use App\Http\Controllers\Tarifas;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomePage::class, 'index']);
Route::get('/page/institucional', [InstitucionalPage::class, 'index']);
Route::get('/page/conta', [ContaPage::class, 'criaconta']);
Route::get('/cria-conta', [ContaPage::class, 'criaconta']);
Route::post('/salvar-conta',[ContaPage::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/tarifas', Tarifas::class);
    Route::resource('/contas', ContaPage::class);
});
