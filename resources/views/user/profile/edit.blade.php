@extends('layouts.user.app')
@section('content')
<div class="row">
  <h1 class="profile-title mx-auto py-3">アカウント設定</h1>
</div>

<div class="user-profile-edit container">
  <form action="{{ action('User\ProfileController@update')}}" method="post" enctype="multipart/form-data">
    <div class="row py-3">
      <div class="col-md-5">
        <div class="row">
          <img src="/storage/user-icon.png" alt="" class="img-fluid user-image mx-auto">
        </div>
        <div class="row">
          <input type="file" class="form-control-file" name="perfume-pic">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="input-user-name" class="text-center mb-0">名前</label>
          <input type="text" class="form-control form-control-sm" name="name" id="input-user-name" value="{{ old('name') }}">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="input-user-Email" class=" mb-0 text-center">{{ __('messages.E-Mail Address') }}</label>
          <input type="text" id="input-user-Email" class="form-control form-control-sm" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="input-user-password" class="text-center mb-0">登録済みパスワード</label>
          <input type="password" class="form-control form-control-sm" name="password" id="input-user-password" value="">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="input-new-password" class=" mb-0 text-center">新規パスワード</label>
          <input type="password" id="input-new-password" class="form-control form-control-sm" name="password" value="">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="input-confirm-password" class=" mb-0 text-center">確認用パスワード</label>
          <input type="password" id="input-confirm-password" class="form-control form-control-sm" name="password" value="">
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="twitter-link" class="col-3 mb-0 sns">
            <img src="/storage/Twitter.png" class="twitter-logo sns-links ">
          </label>
          <div class="col-9">
            <input type="text" id="twitter-link" class="form-control form-control-sm" name="twitter" value="{{ old('twitter') }}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="instagram-link" class="col-3 mb-0 sns">
            <img src="/storage/instagram2.png" class="instagram-logo sns-links">
          </label>
          <div class="col-9">
            <input type="text" id="instagram-link" class="form-control form-control-sm" name="instagram" value="{{ old('instagram') }}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="facebook-link" class="col-3 mb-0 sns">
            <img src="/storage/facebook.png" class="facebook-logo sns-links ">
          </label>
          <div class="col-9">
            <input type="text" id="facebook-link" class="form-control form-control-sm" name="facebook" value="{{ old('facebook') }}">
          </div>
        </div>


      </div>


      <div class="users col-md-7 border border-secondary shadow rounded">
        <div class="form-group align-items-center mx-auto pt-4">
          <label for="input-favorite-material" class="text-center  mb-2">好きな香料</label>
          <input type="text" class="form-control form-control-sm" name="favoriteMaterial" id="input-favorite-material" placeholder="例）・サンダルウッド ・ネロリ">
        </div>
        <div class="form-group align-items-center mx-auto py-3">
          <label for="input-my-fragramce" class="text-center  mb-2">マイフレグランス</label>
          <input type="text" class="form-control form-control-sm" name="myFragrance" id="input-my-fragrance" placeholder="例）トムフォード「ネロリ ポルトフィーノ」">
        </div>
        <div class="form-group align-items-center mx-auto py-3">
          <label for="input-introduction" class="text-center  mb-2">自己紹介</label>
          <textarea class="form-control" rows="10" name="introduction" id="introduction">{{ old('introduction') }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input class="btn btn-lg mx-auto" type="submit" value="Save">
    </div>
    @csrf
  </form>
</div>
@endsection