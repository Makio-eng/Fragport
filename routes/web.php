<?php
//テスト
Route::get('laravel', 'TestController@laravel')->middleware('auth');
Route::get('tests/test', 'TestController@index')->middleware('auth');


//////////////////////////////// ユーザー //////////////////////////
Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('login');
Route::namespace('User')->prefix('user')->name('user.')->group(function () {
  Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('login');

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


//ホーム画面
Route::group(['prefix' => '/'], function () {
  Route::get('', 'HomeController@index');
  Route::get('about', 'HomeController@about');
  Route::get('information', 'HomeController@information');
});

//ブランド関連
Route::group(['prefix' => '/brand', 'name' => 'brand'], function () {
  Route::get('', 'BrandController@index');
  Route::get('info', 'BrandController@info');
});

//レビュー関連
Route::group(['prefix' => '/review', 'name' => 'review',], function () {
  Route::get('', 'ReviewController@index');
});
Route::group(['prefix' => 'user/review', 'name' => 'user/review', 'middleware' => 'auth'], function () {
  Route::get('create', 'User\ReviewController@add');
  Route::post('create', 'User\ReviewController@create');
  Route::get('edit', 'User\ReviewController@edit');
  Route::post('update', 'User\ReviewController@update');
});

//プロフィール関連
Route::group(['prefix' => 'user/profile', 'middleware' => 'auth'], function () {
  Route::get('info', 'User\ProfileController@show');
  Route::get('edit', 'User\ProfileController@edit');
  Route::post('update', 'User\ProfileController@update');
});

//コンタクトフォーム関連（一般）
Route::group(['prefix' => 'contact', 'name' => 'contact'], function () {
  Route::get('', 'ContactController@add');
  Route::post('confirm', 'ContactController@confirm');
  Route::post('process', 'ContactController@process');
});



////////////////////////////////////// 管理者 ////////////////////////////////////
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


    //インフォメーション関連
    Route::group(['prefix' => 'information'], function () {
      Route::get('index', 'InformationController@index');
      Route::get('create', 'InformationController@add');
      Route::post('create', 'InformationController@create');
      Route::get('edit', 'InformationController@edit');
      Route::post('update', 'InformationController@update');
      Route::get('delete', 'InformationController@delete');
    });

    //ブランド関連
    Route::group(['prefix' => 'brand'], function () {
      Route::get('index', 'BrandController@index');
      Route::get('info', 'BrandController@info');
      Route::get('create', 'BrandController@add');
      Route::post('create', 'BrandController@create');
      Route::get('edit', 'BrandController@edit');
      Route::post('update', 'BrandController@update');
      Route::get('delete', 'BrandController@delete');
    });

    //香水関連
    Route::group(['prefix' => 'perfume'], function () {
      Route::get('info', 'PerfumeController@info');
      Route::get('info', 'PerfumeController@info');
      Route::get('create', 'PerfumeController@add');
      Route::post('create', 'PerfumeController@create');
      Route::get('edit', 'PerfumeController@edit');
      Route::post('update', 'PerfumeController@update');
      Route::get('delete', 'PerfumeController@delete');
    });

    //コンタクトフォーム関連
    Route::group(['prefix' => 'contact'], function () {
      Route::get('index', 'ContactController@index');
      Route::get('reply', 'ContactController@reply');
      Route::post('reply', 'ContactController@process');
    });
  });
});
