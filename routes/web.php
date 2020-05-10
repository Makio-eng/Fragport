<?php
//テスト
Route::get('laravel', 'TestController@laravel')->middleware('auth');
Route::get('tests/test', 'TestController@index')->middleware('auth');
Route::get('tests/info', 'TestController@phpinfo')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////// ユーザー /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////


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
  Route::get('user/home', 'HomeController@index');
  Route::get('about', 'HomeController@about');
  Route::get('information', 'HomeController@information');
  Route::get('search', 'HomeController@search');
});

//ブランド関連
Route::group(['prefix' => '/brand'], function () {
  Route::get('', 'BrandController@index');
  Route::get('info', 'BrandController@info')->name('brand.info');
});

//レビュー関連
Route::group(['prefix' => '/review'], function () {
  Route::get('', 'ReviewController@index')->name('review.index');
});
Route::group(['prefix' => 'user/review', 'name' => 'user/review/', 'middleware' => 'auth'], function () {
  Route::get('create', 'User\ReviewController@add');
  Route::post('create', 'User\ReviewController@create');
  Route::get('edit', 'User\ReviewController@edit');
  Route::post('update', 'User\ReviewController@update');
  Route::post('delete', 'User\ReviewController@delete');
});

//香水作成関連
Route::group(['prefix' => 'user/perfume', 'middleware' => 'auth'], function () {
  Route::get('create', 'User\PerfumeController@add');
  Route::post('create', 'User\PerfumeController@create');
  Route::get('edit', 'User\PerfumeController@edit');
  Route::post('update', 'User\PerfumeController@update');
  Route::post('delete', 'User\PerfumeController@delete');
});


//プロフィール関連
Route::group(['prefix' => 'user/profile/', 'middleware' => 'auth'], function () {
  Route::get('mypage', 'User\ProfileController@mypage');
  Route::get('info', 'User\ProfileController@info');
  Route::get('edit', 'User\ProfileController@edit');
  Route::post('update', 'User\ProfileController@update');
});

//コンタクトフォーム関連（一般）
Route::group(['prefix' => 'contact'], function () {
  Route::get('', 'ContactController@add')->name('contact.add');
  Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');
  Route::post('process', 'ContactController@process')->name('contact.process');
});



/////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// 管理者 ////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

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
      Route::get('index', 'InformationController@index')->name('index');
      Route::get('create', 'InformationController@add')->name('add');
      Route::post('create', 'InformationController@create')->name('create');
      Route::get('edit', 'InformationController@edit')->name('edit');
      Route::post('update', 'InformationController@update')->name('update');
      Route::post('delete', 'InformationController@delete')->name('delete');
    });

    //ブランド関連
    Route::group(['prefix' => 'brand'], function () {
      Route::get('index', 'BrandController@index')->name('index');
      Route::get('info', 'BrandController@info')->name('brand.info');
      Route::get('create', 'BrandController@add')->name('add');
      Route::post('create', 'BrandController@create')->name('create');
      Route::get('edit', 'BrandController@edit')->name('edit');
      Route::post('update', 'BrandController@update')->name('update');
      Route::post('delete', 'BrandController@delete')->name('delete');
    });

    //香水関連
    Route::group(['prefix' => 'perfume'], function () {
      Route::get('info', 'PerfumeController@info')->name('perfume.info');
      Route::get('create', 'PerfumeController@add')->name('perfume.add');
      Route::post('create', 'PerfumeController@create')->name('perfume.create');
      Route::get('edit', 'PerfumeController@edit')->name('perfume.edit');
      Route::post('update', 'PerfumeController@update')->name('perfume.update');
      Route::post('delete', 'PerfumeController@delete')->name('perfume.delete');
    });

    //コンタクトフォーム関連
    Route::group(['prefix' => 'contact'], function () {
      Route::get('index', 'ContactController@index')->name('contact.index');
      Route::get('reply', 'ContactController@reply')->name('contact.reply');
      Route::post('reply', 'ContactController@process')->name('contact.process');
    });
  });
});

// Route::post('/posts/{post}/likes', 'FavoriteController@store');
// Route::post('/posts/{post}/likes/{like}', 'FavoriteController@destroy');
