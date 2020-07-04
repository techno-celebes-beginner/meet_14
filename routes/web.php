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

// Route::get('/', "PertanyaanController@index");
// Route::get('/pertanyaan', "PertanyaanController@index");
// Route::get('/pertanyaan/create', "PertanyaanController@create");
// Route::post('/pertanyaan', "PertanyaanController@store");
// Route::get('/jawaban/{pertanyaan_id}', "JawabanController@index");
// Route::post('/jawaban/{pertanyaan_id}', "JawabanController@store");

Route::get('/', "PertanyaanController@index");
Route::get('/pertanyaan', "PertanyaanController@index");
Route::get('/pertanyaan/create', "PertanyaanController@create");
Route::get('/pertanyaan/{pertanyaan_id}/edit', "PertanyaanController@edit");
Route::put('/pertanyaan/update', "PertanyaanController@update");
Route::delete('/pertanyaan/{pertanyaan_id}', "PertanyaanController@delete");
Route::post('/pertanyaan', "PertanyaanController@store");
Route::get('/jawaban/{pertanyaan_id}', "JawabanController@index");
Route::post('/jawaban/{pertanyaan_id}', "JawabanController@store");