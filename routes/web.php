<?php

use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    // return redirect()->route('about', ['pid' => 2, 'pname' => 'phpzone.in', 'year' => '2018']);
    // return view('front.index');
    // Mail::to('amarendra.sumatoglobal@gmail.com')->send();
    // Mail::send('email.index', [], function ($m) {
    //     $m->from('hello@app.com', 'Your Application');
    //     $m->to('amarendra.sumatoglobal@gmail.com', 'Amar')->subject('Your Reminder!');
    // });
    // dd(env('CLOUDINARY_API_KEY'));
    // \Cloudinary::config(array(
    //     "cloud_name" => 'dbkryogzy',
    //     "api_key" => 785627215574635,
    //     "api_secret" => 'W-kdnjh4e-Bk7LeEMOR_NMypHMY'
    // ));
    // \Cloudinary\Uploader::upload("3.jpg", [
    //     "folder" => "test/new/",
    //     "public_id" => "amar"
    // ]);

    return redirect('/dash');
});

Route::get('/about', function () {
    return view('front.about');
})->name('about');


Route::get('/packages', 'Front\PackageController@index');
Route::get('/packages/{id}', 'Front\PackageController@show');

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

Route::prefix('admin')->group(function () {
    Route::resources([
        'packages' => 'PackageController'
    ]);
});

// Route::get('/packages', 'PackageController@index');
Route::get('/packages/create', 'PackageController@create');
// Route::get('/packages/store', 'PackageController@store');
// Route::get('/packages/{package}/show', 'PackageController@show');
// Route::get('/packages/{package}/edit', 'PackageController@edit');
// Route::get('/packages/delete/{package}', 'PackageController@delete');

Route::post('/takedummy', function (Request $request) {
    return view()->render($request->itinarary);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
