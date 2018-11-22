<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/',[
    'as'=>'accueil',
    'uses'=>'LinkController@accueil'
]);
Route::get('/about',[
    'as'=>'about',
    'uses'=>'LinkController@about'
]);

Route::get('/portfolio', [
    'as' => 'portfolio',
    'uses' => 'LinkController@portfolio'
]);


Route::get('/contact',[
    'as'=>'contact',
    'uses'=>'LinkController@contact'
]);
Route::post('/contact', [
    'as' => 'contact',
    'uses' => 'LinkController@store'
]);
Route::get('/services',[
    'as'=>'services',
    'uses'=>'Linkcontroller@services'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('bayero abass barry','bayeroabassb@yahoo.com','projet web et application mobile','bonjour message de test!!!!!!');
}
);
