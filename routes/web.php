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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/my-account', 'AccountController@show')->name('home');
    Route::post('/update_profile', 'AccountController@update')->name('update_profile');

    Route::get('/campaigns', 'CampaignController@show')->name('campaigns');
    Route::post('/startCampaign', 'CampaignController@startCampaign')->name('startCampaign');
    Route::get('/edit-campaign/{id}', 'CampaignController@edit');
    Route::post('/editCampaign', 'CampaignController@editCampaign')->name('editCampaign');
    Route::get('/viewCampaign/{id}', 'CampaignController@index')->name('showCampaign');
    Route::get('/webinar/lead/{id}', 'WebinarController@index')->name('showWebinar');
    Route::get('/booking/{id}', 'WebinarController@bookingWebinar')->name('bookingWebinar');
    Route::post('/booking_webinar/{id}', 'WebinarController@saveBookingWebinar')->name('bookingWebinar');
    Route::post('/webinar_registration/{id}', 'WebinarController@registrationWebinar')->name('registrationWebinar');
    Route::post('/getCampaignDetail', 'WebinarController@getCampaignDetail')->name('getCampaignDetail');
    Route::get('/webinar_video/{id}', 'WebinarController@getCampaignVideo')->name('webinarVideo');
    Route::post('/new_webinar_video', 'CampaignController@newWebinarVideo')->name('newWebinarVideo');
    Route::post('/new_campaign_video', 'CampaignController@newCampaignVideo')->name('newCampaignVideo');
    Route::post('/webinar_video_preview', 'WebinarController@webinarVideoPreview')->name('webinarVideoPreview');
    Route::post('/call_slot', 'WebinarController@callSlot')->name('callSlot');
    Route::post('/submit_questions', 'WebinarController@submitQuestion')->name('callSlot');
    Route::get('/delete-campaign/{id}', 'CampaignController@destroy')->name('deleteCampaign');
    Route::get('/calendar', 'CalendarController@index')->name('calendar');
    Route::get('/get_my_calendar_events', 'CalendarController@getEvents')->name('get_my_calendar_events');
    Route::post('/getBookingData', 'CalendarController@getBookingData')->name('getBookingData');
    Route::get('/payments', 'FinanceController@paymentsView')->name('paymentsView');
    Route::get('/payments/successful', 'FinanceController@paymentSuccessfulView')->name('paymentSuccessfulView');
    Route::get('/payments/pending', 'FinanceController@paymentPendingView')->name('paymentPendingView');
    Route::get('/payments/failed', 'FinanceController@paymentFailedView')->name('paymentFailedView');
    Route::get('/finance/programs', 'FinanceController@programs')->name('financePrograms');
    Route::post('/finance/programs', 'FinanceController@financeProgram')->name('financeProgram');
    Route::get('/finance/programs/view/{id}', 'FinanceController@viewFinanceProgram')->name('viewFinanceProgram');
    Route::get('/finance/programs/delete/{id}', 'FinanceController@deleteFinanceProgram')->name('deleteFinanceProgram');
    Route::get('/finance/programs/show/', 'FinanceController@showFinanceProgram')->name('showFinanceProgram');
    Route::get('/campaigns/media/', 'CampaignController@mediaIndex')->name('mediaIndex');
    Route::get('/campaigns/media/add-new', 'CampaignController@addMedia')->name('addMedia');
    Route::get('/delete/media/{id}', 'CampaignController@deleteMedia')->name('deleteMedia');
    Route::get('/campaigns/media/view/{id}', 'CampaignController@showMedia')->name('showMedia');

});











