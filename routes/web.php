<?php

use App\Visiteur;
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
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/actualite', 'ActualiteController');

Route::resource('/cours', 'CoursController');

Route::fallback(function(){
    return view('404');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/login/visiteur', 'Auth\LoginController@showVisiteurLoginForm')->name('showlLogin');
    // Route::get('/register/visiteur', 'Auth\RegisterController@showVisiteurRegisterForm')->name('Visiteur.shoegisier');

    // Route::post('/login/visiteur', 'Auth\LoginController@visiteurLogin')->name('Visiteur.login');
    // Route::post('/register/visiteur', 'Auth\RegisterController@createVisiteur')->name('Visiteur.login');
    Route::resource('/actualite', 'ActualiteController');

