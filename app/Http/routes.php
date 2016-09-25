<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$PageTitle = 'هاکا ایران | پلتفرم هاکاتن های ایران';
    return view('index')->with('PageTitle', $PageTitle);
});

Route::get('/about', function () {
	$PageTitle = 'هاکا ایران چیست؟';
	return view('about')->with('PageTitle', $PageTitle);
});

Route::get('/events', function () {
	$PageTitle = 'لیست هاکاتن های ایران';	
	return view('events')->with('PageTitle', $PageTitle);
});

Route::get('/search', function () {
	$PageTitle = 'جستجو در هاکاتن های ایرانی';
	return view('search')->with('PageTitle', $PageTitle);
});
Route::get('/events/fintech1', function () {
		$PageTitle = 'هاکافین | اولین هاکاتن فین تک ایران';
	return view('events.fintech1')->with('PageTitle', $PageTitle);
});

Route::get('/profile', function () {
		$PageTitle = 'هاکافین | پروفایل کاربری';
	return view('profile')->with('PageTitle', $PageTitle);
});