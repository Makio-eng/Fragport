@extends('layouts.user.app')
@section('content')
<div class="row">
  <h1 class="profile-title mx-auto py-3">アカウント編集</h1>
</div>

<div class="user-profile-edit container">
  <form action="{{ action('User\ProfileController@update')}}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif

    <div class="row py-3">
      <div class="col-md-5">
        <div class="row">
          @if(optional($user->profile)->userImage_path == null)
          <img src="/storage/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
          @else
          <img src="{{ asset('storage/images/'. $user->profile->userImage_path) }}" alt="" class="img-fluid user-image mx-auto">
          @endif
        </div>
        <div class="row">
          <input type="file" class="form-control-file" name="userImage" value="{{ optional($user->profile)->userImage_path }}">
        </div>
        <div class="row">
          <input type="checkbox" class="form-check-input" name="remove" value="true">
          画像を削除
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="name" class="text-center mb-0">ユーザーネーム</label>
          <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ old('name',$user->name) }}">
        </div>
        <div class="form-group align-items-center mx-auto">
          <label for="Email" class=" mb-0 text-center">メールアドレス</label>
          <input type="text" id="Email" class="form-control form-control-sm" name="email" value="{{ old('email',$user->email) }}">
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="twitter-link" class="col-3 mb-0 sns">
            <img src="/storage/Twitter.png" class="twitter-logo sns-links ">
          </label>
          <div class="col-9">
            <input type="text" id="twitter-link" class="form-control form-control-sm" name="twitter" value="{{ optional($user->profile)->twitter}}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="instagram-link" class="col-3 mb-0 sns">
            <img src="/storage/instagram2.png" class="instagram-logo sns-links">
          </label>
          <div class="col-9">
            <input type="text" id="instagram-link" class="form-control form-control-sm" name="instagram" value="{{ optional($user->profile)->instagram}}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="facebook-link" class="col-3 mb-0 sns">
            <img src="/storage/facebook.png" class="facebook-logo sns-links ">
          </label>
          <div class="col-9">
            <input type="text" id="facebook-link" class="form-control form-control-sm" name="facebook" value="{{ optional($user->profile)->facebook}}">
          </div>
        </div>


      </div>


      <div class="users col-md-7 border border-secondary shadow rounded">
        <div class="form-group align-items-center mx-auto pt-4">
          <label for="input-favorite-material" class="text-center  mb-2">
            <h3>好きな香料</h3>
          </label>
          <input type="text" class="form-control form-control-sm" name="favoriteMaterial" id="input-favorite-material" placeholder="例）・サンダルウッド ・ネロリ" value="{{ optional($user->profile)->favoriteMaterial}}">
        </div>
        <div class="form-group align-items-center mx-auto py-3">
          <label for="input-my-fragramce" class="text-center  mb-2">
            <h3>マイフレグランス</h3>
          </label>
          <input type="text" class="form-control form-control-sm" name="myFragrance" id="input-my-fragrance" placeholder="例）トムフォード「ネロリ ポルトフィーノ」" value="{{ optional($user->profile)->myFragrance}}">
        </div>
        <div class="form-group align-items-center mx-auto py-3">
          <label for="input-introduction" class="text-center  mb-2">
            <h3>自己紹介</h3>
          </label>
          <textarea class="form-control" rows="10" name="introduction" id="introduction">{{ optional($user->profile)->introduction}}</textarea>
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