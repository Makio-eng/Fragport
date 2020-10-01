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
        <div class="row py-1">
          <input type="checkbox" class="form-check-input" name="remove" value="true">
          設定中の画像を削除
        </div>

        <div class="row mb-2">
          @if(optional($user->profile)->userImage_path == null)
          <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
          @else
          <img src="{{$user->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
          @endif
        </div>
        <div id="file-preview" class="container">
          <div class="form-group row">
            <label class="form-label file_btn btn-lg btn mx-auto" for="userImage">写真を選択</label>
            <input class="form-input d-none" type="file" name="userImage" id="userImage" accept="image/*" v-on:change="onFileChange">
          </div>
          <p class="pt-2 mb-0">選択中:</p>
          <div class="row">
            <img class="img-fluid mx-auto my-2" v-bind:src="imageData" v-if="imageData">
          </div>

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
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/Twitter.png" class="twitter-logo sns-links ">
          </label>
          <div class="col-9">
            <input type="text" id="twitter-link" class="form-control form-control-sm" name="twitter" value="{{ optional($user->profile)->twitter}}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="instagram-link" class="col-3 mb-0 sns">
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/instagram2.png" class="instagram-logo sns-links">
          </label>
          <div class="col-9">
            <input type="text" id="instagram-link" class="form-control form-control-sm" name="instagram" value="{{ optional($user->profile)->instagram}}">
          </div>
        </div>
        <div class="form-group align-items-center mx-auto row">
          <label for="facebook-link" class="col-3 mb-0 sns">
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/facebook.png" class="facebook-logo sns-links ">
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
          <input type="text" class="form-control form-control-sm" name="myFragrance" id="input-my-fragrance" placeholder="例）トムフォード『ネロリ ポルトフィーノ』" value="{{ optional($user->profile)->myFragrance}}">
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

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
  new Vue({
    el: '#file-preview',
    data: {
      imageData: '' //画像格納用変数
    },
    methods: {
      onFileChange(e) {
        const files = e.target.files;

        if (files.length > 0) {

          const file = files[0];
          const reader = new FileReader();

          reader.onload = (e) => {
            this.imageData = e.target.result;

          };
          reader.readAsDataURL(file);
        }
      }
    }
  });
</script>
@endsection