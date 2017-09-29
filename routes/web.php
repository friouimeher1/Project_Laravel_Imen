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
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

 Route::resource('gereremployer','GererEmployerController');


});

Route::group(['prefix' => 'technicien'], function () {
  Route::get('/login', 'TechnicienAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'TechnicienAuth\LoginController@login');
  Route::post('/logout', 'TechnicienAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'TechnicienAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'TechnicienAuth\RegisterController@register');

  Route::post('/password/email', 'TechnicienAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'TechnicienAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'TechnicienAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'TechnicienAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'employer'], function () {
  Route::get('/login', 'EmployerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployerAuth\LoginController@login');
  Route::post('/logout', 'EmployerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployerAuth\RegisterController@register');

  Route::post('/password/email', 'EmployerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployerAuth\ResetPasswordController@showResetForm');
});
