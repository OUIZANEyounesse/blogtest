<?php
use Illuminate\Support\Facades\Route;
// Route::namespace('Visiteur')->group(function () {
//     Route::get('/','HomeController@index')->name('professeur');
// });

Route::name('visiteur.')->group(function () {

    Route::get('login','AuthController@showLogin')->name('login');
    Route::post('login','AuthController@login')->name('login.submit');


    Route::post('logout','AuthController@logout')->name('logjout');



    Route::get('reset','AuthController@showReset')->name('reset');
    Route::post('reset','AuthController@reset')->name('reset.submit');

    Route::get('register','AuthController@showRegister')->name('register');
    Route::post('register','AuthController@create')->name('register.submit');
    Route::get('findVille','AuthController@findVille')->name('findVille');
    Route::get('findFiliere','AuthController@findFiliere')->name('findFiliere');
    Route::resource('/visiteur', 'Visiteurcontroller');






});

?>
