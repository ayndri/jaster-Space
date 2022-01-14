<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;

Auth::routes();

Route::get('/', [App\Http\Controllers\AdmController::class, 'index'])->name('/');


// Route::get('/in', 'App\Http\Controllers\AdmController@index')->name('admin');


// Route::prefix('in')->group(function () {
//     Route::view('/', 'dashboard.index')->name('index');
// });



Route::group(['middleware' => 'auth'], function () {

//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/absen', ['as' => 'absen', 'uses' => 'App\Http\Controllers\AbsenController@formabsen']);
Route::post('/absen', ['as' => 'add.absen', 'uses' => 'App\Http\Controllers\AbsenController@storeabsen']);
Route::get('/listabsen', ['as' => 'team.absen', 'uses' => 'App\Http\Controllers\AbsenController@teamabsen']);
Route::get('/list', ['as' => 'admin.absen', 'uses' => 'App\Http\Controllers\AbsenController@adminabsen']);
Route::any('/cancel/{abs}', ['as' => 'cancel.absen', 'uses' => 'App\Http\Controllers\AbsenController@ubahabsen']);
Route::any('/tolak/{abs}', ['as' => 'tolak.absen', 'uses' => 'App\Http\Controllers\AbsenController@tolakabsen']);
Route::any('/setuju/{abs}', ['as' => 'setuju.absen', 'uses' => 'App\Http\Controllers\AbsenController@setujuabsen']);

Route::get('/ads/active', ['as' => 'ads.active', 'uses' => 'App\Http\Controllers\AdsController@index']);
Route::get('/ads/new', ['as' => 'ads.new', 'uses' => 'App\Http\Controllers\AdsController@add']);
Route::post('/ads/new', ['as' => 'ads.add', 'uses' => 'App\Http\Controllers\AdsController@store']);
Route::get('/ads/edit/{act}', ['as' => 'ads.edit', 'uses' => 'App\Http\Controllers\AdsController@edit']);
Route::patch('/ads/edit/{act}', ['as' => 'ads.edit1', 'uses' => 'App\Http\Controllers\AdsController@update']);
Route::get('/ads/del/{act}', ['as' => 'ads.del', 'uses' => 'App\Http\Controllers\AdsController@offkan']);
Route::get('/ads/topup', ['as' => 'ads.alltop', 'uses' => 'App\Http\Controllers\AdsController@alltop']);
Route::get('/ads/addtop', ['as' => 'ads.addtop', 'uses' => 'App\Http\Controllers\AdsController@addtop']);
Route::get('/ads/recap', ['as' => 'ads.recap', 'uses' => 'App\Http\Controllers\AdsController@recap']);
Route::post('/ads/rec/{gads}', ['as' => 'edit.recap', 'uses' => 'App\Http\Controllers\AdsController@uprecap']);

Route::get('/ads/change/{ant}', ['as' => 'ads.change', 'uses' => 'App\Http\Controllers\AdsController@change']);
Route::patch('/ads/change/{topups}', ['as' => 'ads.change1', 'uses' => 'App\Http\Controllers\AdsController@uptop']);

Route::post('/ads/addtop', ['as' => 'ads.storetop', 'uses' => 'App\Http\Controllers\AdsController@storetop']);
Route::get('/ads/pay/{ant}', ['as' => 'ads.pay', 'uses' => 'App\Http\Controllers\AdsController@pay']);
Route::get('/ads/all', ['as' => 'ads.allads', 'uses' => 'App\Http\Controllers\AdsController@allads']);



Route::get('/host', ['as' => 'host.all', 'uses' => 'App\Http\Controllers\HostCtrl@index']);
Route::post('/host/add', ['as' => 'host.add', 'uses' => 'App\Http\Controllers\HostCtrl@add']);
Route::get('/host/{id}/view', ['as' => 'host.view', 'uses' => 'App\Http\Controllers\HostCtrl@view']);
Route::post('/host/{id}/edit', ['as' => 'host.edit', 'uses' => 'App\Http\Controllers\HostCtrl@edit']);
Route::get('/host/{id}/del', ['as' => 'host.del', 'uses' => 'App\Http\Controllers\HostCtrl@destroy']);


Route::get('/jweb/add', ['as' => 'jweb.add', 'uses' => 'App\Http\Controllers\JwebCtrl@add']);
Route::post('/jweb/add', ['as' => 'jweb.tambah', 'uses' => 'App\Http\Controllers\JwebCtrl@tambah']);
Route::get('/jweb/all', ['as' => 'jweb.all', 'uses' => 'App\Http\Controllers\JwebCtrl@all']);
Route::get('/jweb/semua', ['as' => 'jweb.semua', 'uses' => 'App\Http\Controllers\JwebCtrl@semua']);
Route::get('/jweb/{id}/view', ['as' => 'jweb.view', 'uses' => 'App\Http\Controllers\JwebCtrl@view']);
Route::get('/jweb/{id}/edit', ['as' => 'jweb.edit', 'uses' => 'App\Http\Controllers\JwebCtrl@edit']);
Route::post('/jweb/{id}/edit', ['as' => 'jweb.update', 'uses' => 'App\Http\Controllers\JwebCtrl@update']);

Route::get('/web/{id}/edit', ['as' => 'web.edit', 'uses' => 'App\Http\Controllers\JwebCtrl@editweb']);

Route::get('/domain', ['as' => 'domain.index', 'uses' => 'App\Http\Controllers\DomainController@index']);
Route::post('/domain', ['as' => 'domain.store', 'uses' => 'App\Http\Controllers\DomainController@store']);
Route::get('/domain/search', ['as' => 'domain.search', 'uses' => 'App\Http\Controllers\DomainController@searchAjax']);
Route::get('/domain/{id}/view', ['as' => 'domain.view', 'uses' => 'App\Http\Controllers\DomainController@view']);
Route::post('/domain/{id}/edit', ['as' => 'domain.edit', 'uses' => 'App\Http\Controllers\DomainController@edit']);
Route::get('/domain/{id}/gethosting', ['as' => 'domain.gethosting', 'uses' => 'App\Http\Controllers\DomainController@getHosting']);
Route::get('/domain/all-domain', ['as' => 'domain.getAllDomain', 'uses' => 'App\Http\Controllers\DomainController@getAllDomain']);

Route::get('/account',['as' => 'account.index','uses' => 'App\Http\Controllers\AccountController@index']);
Route::get('/account/add-account',['as' => 'account.create','uses' => 'App\Http\Controllers\AccountController@create']);
Route::post('/account/add-account',['as' => 'account.store','uses' => 'App\Http\Controllers\AccountController@store']);
Route::get('/account/{user:nama}/edit-account',['as' => 'account.edit','uses' => 'App\Http\Controllers\AccountController@edit']);
Route::post('/account/{user:nama}/edit-account',['as' => 'account.update','uses' => 'App\Http\Controllers\AccountController@update']);
Route::get('/account/{user:nama}/delete-account',['as' => 'account.delete','uses' => 'App\Http\Controllers\AccountController@delete']);



Route::get('/reset', ['as' => 'reset.pass', 'uses' => 'App\Http\Controllers\AdmController@reset'])->middleware('admin');
Route::post('/reset', ['as' => 'change.pass', 'uses' => 'App\Http\Controllers\AdmController@change'])->middleware('admin');

});

// Route::prefix('/')->group(function () {

// Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\AdmController@index'])->middleware('admin');

// });

Route::view('sample-page', 'pages.sample-page')->name('sample-page');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');


Route::prefix('others')->group(function () {
    Route::view('400', 'errors.400')->name('error-400');
    Route::view('401', 'errors.401')->name('error-401');
    Route::view('403', 'errors.403')->name('error-403');
    Route::view('404', 'errors.404')->name('error-404');
    Route::view('500', 'errors.500')->name('error-500');
    Route::view('503', 'errors.503')->name('error-503');
});


Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');
