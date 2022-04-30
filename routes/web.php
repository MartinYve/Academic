<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth' , 'admin')->resource('users', UserController::class);
Route::middleware('auth' , 'admin')->resource('Enseignements', EnseignementController::class);
Route::middleware('auth' , 'admin')->resource('periodes', PeriodeController::class);
Route::middleware('auth' , 'admin')->resource('enseignant', EnseignantController::class);
Route::middleware('auth')->resource('Emploistemps', EmploistempsController::class);
Route::middleware('auth' , 'enseignant')->resource('cours', coursController::class);
Route::middleware('auth' , 'enseignant')->resource('devoirs', devoirsController::class);
Route::middleware('auth')->resource('CahierTexte', CahierTexteController::class);
