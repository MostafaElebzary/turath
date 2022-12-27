<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([

    'register' => false,
    'verify' => false,
    'reset' => false
]);


Route::group(['middleware' => ['auth']], function () {

    Route::resource('admin', 'admin\HomeController');
    Route::get('home', 'admin\HomeController@index');

    Route::resource('users', 'admin\usersController');
    Route::get('users/{id}/delete', 'admin\usersController@destroy');

    Route::resource('settings', 'admin\SettingsController');
    //slider
    Route::resource('sliders', 'admin\SliderController');

    Route::resource('knowus', 'admin\knowusController');
    Route::get('delete_img/{id}', 'admin\knowusController@destroy');


    Route::resource('goals', 'admin\GoalsController');


    Route::get('pdf', 'admin\PdfController@index')->name('pdf');
    Route::get('add-pdf', 'admin\PdfController@create')->name('Addpdf');
    Route::post('store_pdf', 'admin\PdfController@store');
    Route::get('pdf/{id}/delete', 'admin\PdfController@destroy');

//    documents
    Route::group(['prefix' => 'documents', 'as' => 'documents', 'namespace' => 'admin'], function () {
        Route::get('/', 'DocumentsController@index')->name('.index');
        Route::get('create', 'DocumentsController@create')->name('.create');
        Route::post('store', 'DocumentsController@store')->name('.store');
        Route::get('edit/{id}', 'DocumentsController@edit')->name('.edit');
        Route::post('update/{id}', 'DocumentsController@update')->name('.update');
        Route::get('{id}/delete', 'DocumentsController@destroy')->name('.delete');
        Route::post('change_status', 'DocumentsController@change_status')->name('.change_status');
    });


    Route::resource('programs', 'admin\ProgramController');
    Route::get('programs/{id}/delete', 'admin\ProgramController@destroy');

    Route::resource('projects', 'admin\ProjectsController');
    Route::get('projects/{id}/delete', 'admin\ProjectsController@destroy');

    Route::resource('news', 'admin\NewsController');
    Route::get('news/{id}/delete', 'admin\NewsController@destroy');

    Route::resource('media-report', 'admin\MediaReportController');
    Route::get('media-report/{id}/delete', 'admin\MediaReportController@destroy');


    Route::resource('coverages', 'admin\CoveragesController');
    Route::get('coverages/{id}/delete', 'admin\CoveragesController@destroy');

    Route::resource('partners', 'admin\partnersController');
    Route::get('partners/{id}/delete', 'admin\partnersController@destroy');


    Route::resource('donations', 'admin\DonationsController');
    Route::get('donations/{id}/delete', 'admin\DonationsController@destroy');


    Route::resource('contact', 'admin\ContactController');
    Route::get('contact/{id}/delete', 'admin\ContactController@destroy');

    Route::resource('metsonomia', 'admin\MetsonomiaController');
    Route::get('metsonomia/{id}/delete', 'admin\MetsonomiaController@destroy');

    Route::resource('our-vision', 'admin\OurVisionController');
    Route::get('our-vision/{id}/delete', 'admin\OurVisionController@destroy');

    Route::resource('map', 'admin\MapController');



    Route::get('/logout', 'admin\HomeController@logout');

});

Route::get('/', 'front\HomeController@index');
Route::get('/visionTargetsMessages', 'front\HomeController@VisionTargets');
Route::get('/architecuture', 'front\HomeController@Architecuture');
Route::get('/management', 'front\HomeController@Management');
Route::get('/plans-reports', 'front\HomeController@PlansReports');
Route::get('/Systems-Policy', 'front\HomeController@SystemsPolicy');
Route::get('/LecDesicions', 'front\HomeController@LecDesicions');
Route::get('/parteners', 'front\HomeController@parteners');
Route::get('/contactInfo', 'front\HomeController@contactInfo');
Route::get('/documents/front', 'front\HomeController@documents')->name('documents.front');

//donation
Route::get('/donation-show', 'front\HomeController@Donation');
Route::post('/donation', 'front\HomeController@DoDonation');


//contact and complains
Route::get('/contact-show', 'front\HomeController@Contact');
Route::post('/contact', 'front\HomeController@DoContact');



//programs
Route::get('/programs-show', 'front\ProgramsController@index');
Route::get('/program/{id}', 'front\ProgramsController@show');

//projects
Route::get('/projects-show', 'front\ProjectsController@index');
Route::get('/project/{id}', 'front\ProjectsController@show');

//news
Route::get('/news-show', 'front\newsController@index');
Route::get('/new/{id}', 'front\newsController@show');


//media-reports
Route::get('/media-reports-show', 'front\MediaReportsController@index');
Route::get('/mediareport/{id}', 'front\MediaReportsController@show');

//Coverages
Route::get('/coverages-show', 'front\CoveragesController@index');
Route::get('/coverage/{id}', 'front\CoveragesController@show');


Route::get('lang/{lang}', 'admin\HomeController@change_lang');

