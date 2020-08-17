<?php

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


$groupParam = [
    'prefix' => '/',
    'namespace' => 'Main',
    'middleware' => 'session'
];
Route::group($groupParam, function () {
    Route::get('/auth', 'AuthController@auth')->name('main.auth');
    Route::patch('/check', 'AuthController@check')->name('main.check');


    Route::get('/', function () {
        return view('main.test');
    });

    $participantsMethods = ['index', 'create', 'store', 'edit', 'update'];
    Route::resource('/participants', 'ParticipantsController')
        ->names('main.participants')
        ->only($participantsMethods);
    $buttonsMethods = ['index', 'create', 'store', 'edit', 'update'];
    Route::resource('/buttons', 'ButtonsController')
        ->names('main.buttons')
        ->only($buttonsMethods);
});
