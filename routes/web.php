<?php

use App\Package;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', 'Admin\DashboardController@index');
    Route::post('/package/{id}/itinerary', 'ItineraryController@store');
    Route::get('/package/{package}/itinerary', 'ItineraryController@create');
    Route::post('/itinerary/{itinerary}/delete', 'ItineraryController@destroy')->name('itinerary.delete');
});
Route::get('/testing', 'TestingController@index');
Route::get('/testing/{user}', 'TestingController@show')->name('users.show');
Route::delete('/testing', 'TestingController@destroy')->name('users.destroy');
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
Route::get('/packages/{package}/itinarary', function (Package $package) {
    $package = collect($package->only('id', 'uuid'))->first();
    return view('admin.itinarary.create', compact('package'));
});
Route::get('/packages', 'Front\PackageController@index');
Route::post('/packages/status/{id}', function (Request $request, $id) {
    $package = Package::find($id);
    $x = Package::where('id', $id)->update(['status' => !$package->status]);
    return response()->json($x);
});
Route::get('/packages/details/{uuid}', 'Front\PackageController@show');
Route::get('/packages/{id}', 'Front\PackageController@show');

// Route::get('/packages/show/{package}', 'PackageController@show');

Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store');
Route::post('/contact/{uuid}', 'ContactController@store')->name('contact.store');

Route::get('/dash', function () {
    return view('layouts.dashboard');
})->name('dash');


Route::get('/gallery', function () {
    return view('front.gallery');
})->name('gallery');

// admin
Route::get('/admin/contacts', 'ContactController@index');

// Route::prefix('admin')->group(function () {
//     Route::resources([
//         'packages' => 'PackageController'
//     ]);
// });

Route::get('/admin/packages', 'PackageController@index');
Route::get('/admin/packages/create', 'PackageController@create')->name('package.create');
Route::post('/admin/packages', 'PackageController@store');
Route::get('/packages/create', 'PackageController@create');
// Route::get('/packages/store', 'PackageController@store');
Route::post('/admin/{package}/packages', 'PackageController@update');
Route::get('/admin/packages/{package}', 'PackageController@show');
// Route::get('/packages/{package}/edit', 'PackageController@edit');
// Route::get('/packages/delete/{package}', 'PackageController@delete');

Route::post('/takedummy', function (Request $request) {
    return view()->render($request->itinarary);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
