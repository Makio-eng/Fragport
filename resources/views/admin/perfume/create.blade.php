@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">香水新規登録</h1>
  <form action="{{ action('Admin\PerfumeController@create')}}" method="post" enctype="multipart/form-data">

    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Perfume Name(英語)</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="rate" class="">賦香率</label>
      <input type="text" class="form-control" id="rare" name="rate">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="note" class="">香調</label>
      <input type="text" class="form-control" id="note" name="note">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="material" class="">香料</label>
      <input type="text" class="form-control" id="material" name="material">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15"></textarea>
    </div>
    <div class="row py-3">
      <input class="mx-auto" type="file" name="brand_logo">
    </div>
    <div class="row">
      <input class="btn btn-primary mx-auto" type="submit" value="新規作成">
    </div>
    @csrf
  </form>

</div>
@endsection