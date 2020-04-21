<?php

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

  // ログイン認証関連
  Auth::routes([
    'register' => true,
    'reset'    => false,
    'verify'   => false
  ]);

  // ログイン認証後
  Route::middleware('auth:user')->group(function () {

    //TOPページ
    Route::resource('home', 'HomeController', ['only' => 'index']);
  });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

  // ログイン認証関連
  Auth::routes([
    'register' => false,
    'reset'    => false,
    'verify'   => false
  ]);

  // ログイン認証後
  Route::middleware('auth:admin')->group(function () {

    // TOPページ
    Route::resource('home', 'HomeController', ['only' => 'index']);
  });
});

//ららべる
Route::get('laravel', 'TestController@laravel')->middleware('auth');
Route::get('tests/test', 'TestController@index')->middleware('auth');





//ホーム画面
Route::group(['prefix' => '/'], function () {
  Route::get('', 'HomeController@index');
  Route::get('about', 'HomeController@about');
  Route::get('information', 'HomeController@information');
});

//ブランド関連
Route::group(['prefix' => '/brand'], function () {
  Route::get('', 'BrandController@index');
  Route::get('info', 'BrandController@info');
});

//レビュー関連
Route::group(['prefix' => '/review'], function () {
  Route::get('', 'ReviewController@index');
});
Route::group(['prefix' => 'user'/*, 'middleware' => 'auth'*/], function () {
  Route::get('create', 'User\ReviewController@add');
  Route::post('create', 'User\ReviewController@create');
});
