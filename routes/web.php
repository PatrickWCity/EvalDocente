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

Route::get('/', function () {
    return view('welcome');
})->middleware('lang');

Route::get('/about', function () {
    return view('about');
})->middleware('lang');

Route::get('/terms', function () {
    return view('terms');
})->middleware('lang');

Route::get('/privacy', function () {
    return view('privacy');
})->middleware('lang');

Route::get('/contact', function () {
    return view('contact');
})->middleware('lang');

Route::get('/cookies-policy', function () {
    return view('cookies');
})->middleware('lang');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified','lang');

Route::group(['middleware' => ['auth', 'verified', 'lang']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::resource('institutos','InstitutoController');
    Route::resource('sedes','SedeController');
    Route::resource('escuelas','EscuelaController');
    Route::resource('carreras','CarreraController');
    Route::resource('modulos','ModuloController');
    Route::resource('docentes','DocenteController');
    Route::get('profile', 'UserController@profile')->name('users.profile');
    Route::get('profile/settings', 'UserController@settings')->name('users.settings');
    Route::patch('profile', 'UserController@updateProfile')->name('users.updateProfile');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Route::get('lang/{lang}', function($lang) {
    \Session::put('lang', $lang);
    return \Redirect::back();
})->middleware('web')->name('CheckLang');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');