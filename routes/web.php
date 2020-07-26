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
    return view('auth.login');
});

Route::post('/', 'Auth\LoginController@login')->name('login_cred');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/my-account', 'AccountController@show')->name('home');
Route::post('/update_profile', 'AccountController@update')->name('update_profile');

Route::get('/campaigns', 'CampaignController@show')->name('campaigns');
Route::post('/startCampaign', 'CampaignController@startCampaign')->name('startCampaign');
Route::get('/edit-campaign/{id}', 'CampaignController@edit');
Route::post('/editCampaign', 'CampaignController@editCampaign')->name('editCampaign');



