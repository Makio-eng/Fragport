@extends('layouts.user.app')
@section('content')
<div class="review-create container">

  <div class="row">
    <h1 class="review-create-title mx-auto py-3">レビューを投稿</h1>
  </div>


  <form action="{{ action('User\ReviewController@create')}}" method="post" enctype="multipart/form-data">
    <div class="mx-auto">
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
        <h3 class="text-danger">{{ '・'.$e }}</h3>
        @endforeach
      </ul>
      @endif

    </div>

    <div class="review-form row d-flex align-items-center">
      <div class="col-4 p-3">
        <div id="file-preview" class="container">
          <div class="row">
            <div class="col-12">
              <img class="border img-fluid my-2" v-bind:src="imageData" v-if="imageData">
            </div>
          </div>
          <div class="form-group row">
            <label class="form-label file_btn btn-lg btn mx-auto" for="reviewImage">写真を選択</label>
            <input class="form-input d-none" type="file" name="reviewImage" id="reviewImage" accept="image/*" v-on:change="onFileChange">
          </div>
        </div>


      </div>

      <div class="review col-8">
        <div class="user-profile row">
          <div class="col-3">
            @if(optional(Auth::user()->profile)->userImage_path == null)
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
            @else
            <img src="{{ Auth::user()->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
            @endif

          </div>
          <div class="col-9 d-flex align-items-center">
            <h3 class="user-name">{{Auth::user()->name}}</h3>
          </div>
        </div>
        <div class="review-body row py-2">
          <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input type="hidden" name="id" value="{{ $perfume -> id }}">
      <input class="btn btn-lg mx-auto" type="submit" value="Post">
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