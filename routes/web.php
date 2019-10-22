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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/index',function(){
	return view('index');
});

Route::get('/layout', function () {
    return view('layout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/vission-and-mission', function () {
    return view('vission-and-mission');
});

Route::get('/it', function () {
    return view('it');
});


Route::get('/music-and-dance', function () {
    return view('music-and-dance');
});

Route::get('/cooking-without-fire',function(){
    return view('cooking-without-fire');
});



Route::get('/nature-education',function(){
	return view('nature-education');
});


Route::get('/field-trip',function(){
	return view('field-trip');
});


Route::get('/admission',function()
{
	return view('admission');
});

Route::get('/early-year',function(){
	return view('early-year');
});


Route::get('/timing',function(){
	return view('timing');
});
Route::get('/elementary',function(){
	return view('elementary');
});
Route::get('/middle',function(){
	return view('middle');
});

Route::get('/admin',function(){
	return view('admin');
});
Route::get('admin','MyController@balance');
Route::get('update','MyController@update');
Route::get('delete','MyController@delete');
Route::get('deleteimage','MyController@deleteimage');

// Route::post('accept_assign/{id}','MyController@finalstore');



Route::get('/teachers',function(){
	return view('teachers');
});

Route::get('/admin_gallery_view',function(){
	return view('admin_gallery_view');
});
Route::get('/gallery_upload',function(){
	return view('gallery_upload');
});
Route::get('/admission-form',function(){
	return view('admission-form');
});

Route::post('rrrr', 'MyController@store_contact');

Route::post('image_upload','MyController@image_upload');
Route::post('form_upload','MyController@form_upload');

Route::resource('admin_gallery_view','MyController');
Route::get('admin_gallery_view', 'MyController@get_images');

Route::get('gallery', 'MyController@get_gallery');

Route::get('/admin_login',function(){
	return view('admin_login');
});

Route::get('/layout2',function(){
	return view('layout2');
});
Route::get('/layout3',function(){
	return view('layout3');
});

Route::post('login', 'MyController@login_admin');
