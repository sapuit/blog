<?php


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// home routes...
Route::get('/','PagesController@index');
Route::get('/articles',[
	'as' => 'article.index',
	'uses' => 'ArticlesController@index'
	]);

// Create article routes...
Route::get('/articles/create',[
	'as' => 'article.create',
	'uses' =>'ArticlesController@create'
	]);

Route::post('/articles',[
	'as' => 'article.store',
	'uses' => 'ArticlesController@store',
	]);

// Update article routes...
get('/articles/{id}/edit',[
	'as' => 'article.edit',
	'uses' => 'ArticlesController@edit'
	]);

put('/articles/{id}',[
	'as'	=> 	'article.update' ,
	'uses'	=>	'ArticlesController@update'
	]);

// delete article routes...
delete('/articles/{id}',[
	'middleware' => 'auth',
	'as'	=> 	'article.destroy' ,
	'uses'	=>	'ArticlesController@destroy'
	]);

// show article routes...
Route::get('/articles/{id}',[
	'as'	=> 	'article.show' ,
	'uses'	=>	'ArticlesController@show'
	]);	
