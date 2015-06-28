<?php

use Illuminate\Support\Facades\View;





//login
Route::post('/administrator', array('as'=>'administrator','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@login'));
Route::get('/administrator', array('as'=>'administrator','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@login'));

//registration
Route::post('/admin_registration', array('as'=>'admin_registration','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@register'));
Route::get('/admin_registration', array('as'=>'admin_registration','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@register'));

//logout
Route::get('/logout', array('as'=>'logout','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@logout'));
//Route::match(['get','post'],'/', array('as'=>'login','uses'=>'webvolant\abadmin\Http\Controllers\LoginController@login'));



//группа

//очистка кэша
Route::get('cache/clear', array('as'=>'cache/clear','uses'=>'webvolant\abadmin\Http\Controllers\AdminController@clear'));

//копия бд artisan команда
Route::get('db/backup', array('as'=>'db/backup','uses'=>'webvolant\abadmin\Http\Controllers\AdminController@dump'));

//обзорная
Route::get('/', array('as'=>'dashboard','uses'=>'webvolant\abadmin\Http\Controllers\AdminController@dashboard'));

//Пользователи
Route::get('user/index', array('as'=>'user/index','uses'=>'webvolant\abadmin\Http\Controllers\UserController@index'));
Route::get('user/add', array('as'=>'user/add','uses'=>'webvolant\abadmin\Http\Controllers\UserController@add'));
Route::post('user/add', array('as'=>'user/add','uses'=>'webvolant\abadmin\Http\Controllers\UserController@add'));

Route::get('user/delete/{link}', array('as'=>'user/delete','uses'=>'webvolant\abadmin\Http\Controllers\UserController@delete'))->where('link', '[A-Za-z-0-9]+');