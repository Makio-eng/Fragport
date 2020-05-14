@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">ブランド新規登録</h1>
  <form action="{{ action('Admin\BrandController@create')}}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif
    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Brand Name(英語)</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="country" class="">拠点国</label>
      <input type="text" class="form-control" id="country" name="country">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15"></textarea>
    </div>
    <div id="file-preview" class="container">
      <div class="row">
        <div class="col-4 offset-4">
          <img class="border img-fluid my-2" v-bind:src="imageData" v-if="imageData">
        </div>
      </div>
      <div class="form-group row">
        <label class="form-label file_btn btn btn-dark mx-auto" for="brandLogo">写真を選択</label>
        <input class="form-input d-none" type="file" name="brandLogo" id="brandLogo" accept="image/*" v-on:change="onFileChange">
      </div>
    </div>
    <div class="row">
      <input class="btn btn-primary mx-auto" type="submit" value="新規作成">
    </div>
    @csrf
  </form>
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