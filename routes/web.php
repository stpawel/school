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

Route::get('aktualnosci/{name}/{id}', 'ArticleFrontedController@show');
Route::get('aktualnosci/', 'ArticleFrontedController@index');

Route::get('article/', 'ArticleBackendController@index');
Route::get('article/add', 'ArticleBackendController@add');
Route::post('article/create', 'ArticleBackendController@create');
Route::get('article/edit/{id}', 'ArticleBackendController@edit');
Route::post('article/update', 'ArticleBackendController@update');
Route::get('article/delete/{id}', 'ArticleBackendController@delete');
Route::get('article/search', 'ArticleBackendController@search');

Route::get('pliki/', 'FileFrontedController@index');

Route::get('file/', 'FileBackendController@index');
Route::get('file/add', 'FileBackendController@add');
Route::post('file/upload', 'FileBackendController@upload');
Route::get('file/delete/{id}', 'FileBackendController@delete');

Route::get('kadra/', 'TeamFrontedController@index');

Route::get('team/', 'TeamBackendController@index');
Route::get('team/add', 'TeamBackendController@add');
Route::post('team/create', 'TeamBackendController@create');
Route::get('team/edit/{id}', 'TeamBackendController@edit');
Route::post('team/update', 'TeamBackendController@update');
Route::get('team/delete/{id}', 'TeamBackendController@delete');


Route::get('ogloszenia/', 'NoticeFrontedController@index');

Route::get('notice/', 'NoticeBackendController@index');
Route::get('notice/add', 'NoticeBackendController@add');
Route::post('notice/create', 'NoticeBackendController@create');
Route::get('notice/delete/{id}', 'NoticeBackendController@delete');
Route::get('notice/edit/{id}', 'NoticeBackendController@edit');
Route::post('notice/update', 'NoticeBackendController@update');

Route::get('galeria/', 'PhotoFrontedController@index');

Route::get('photo/', 'PhotoBackendController@index');
Route::get('photo/add', 'PhotoBackendController@add');
Route::post('photo/upload', 'PhotoBackendController@upload');
Route::get('photo/delete/{id}', 'PhotoBackendController@delete');

Route::get('kontakt/', 'ContactFrontedController@index');

Route::get('contact/', 'ContactBackendController@index');
Route::get('contact/add', 'ContactBackendController@add');
Route::post('contact/create', 'ContactBackendController@create');
Route::get('contact/delete/{id}', 'ContactBackendController@delete');
Route::get('contact/edit/{id}', 'ContactBackendController@edit');
Route::post('contact/update', 'ContactBackendController@update');


Auth::routes();


