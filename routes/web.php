<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('main');
Route::get('/docs', [FrontController::class, 'docs'])->name('docs');
Route::get('/management', [FrontController::class, 'management'])->name('management');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/send', [FrontController::class,'sendMail'])->name('send');


Route::resource('mainBlocks', App\Http\Controllers\MainBlockController::class);

Route::resource('advantageBlocks', App\Http\Controllers\AdvantageBlockController::class);

Route::resource('serviceOnes', App\Http\Controllers\ServiceOneController::class);

Route::resource('serviceSeconds', App\Http\Controllers\ServiceSecondController::class);

Route::resource('structures', App\Http\Controllers\StructureController::class);

Route::resource('teams', App\Http\Controllers\TeamController::class);

Route::resource('contacts', App\Http\Controllers\ContactController::class);