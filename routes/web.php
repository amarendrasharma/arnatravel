<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    // return view('front.index');
    // Mail::to('amarendra.sumatoglobal@gmail.com')->send();
    // Mail::send('email.index', [], function ($m) {
    //     $m->from('hello@app.com', 'Your Application');
    //     $m->to('amarendra.sumatoglobal@gmail.com', 'Amar')->subject('Your Reminder!');
    // });
    return redirect('/dash');
});

Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/packages', function () {
    return view('front.packages.index');
})->name('packages');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');


Route::post('/contact', 'ContactController@store')->name('contact.store');


Route::get('/dash', function () {
    return view('layouts.dashboard');
})->name('dash');


Route::get('/gallery', function () {
    return view('front.gallery');
})->name('gallery');

// admin
Route::get('/contact/all', 'ContactController@index');
Route::get('/packages/index', 'PackageController@index');
Route::get('/packages/create', 'PackageController@create');
Route::get('/packages/store', 'PackageController@store');
Route::get('/packages/{package}/show', 'PackageController@show');
Route::get('/packages/{package}/edit', 'PackageController@edit');
Route::get('/packages/delete/{package}', 'PackageController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
