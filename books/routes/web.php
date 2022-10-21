<?php

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
});

// Route::get('/regina', function () {
//     return 'Hallo World';
// });

// Route::get('/regina2', function () {
//     return 'regina ini';
// });

// // Route::redirect('/regina', 'regina2');

// Route::get('/greeting', function () {
//     return view('greeting');
// });

// Route::redirect('/greeting', 'regina2');

Route::get('user/{regina}', function($id){
    return "User ".$id;
});