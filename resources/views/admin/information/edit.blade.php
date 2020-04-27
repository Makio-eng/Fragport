@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">インフォメーション編集</h1>
  <form action="{{ action('Admin\InformationController@create')}}" method="post" enctype="multipart/form-data">

    <div class="form-group align-items-center mx-auto">
      <label for="title" class="">タイトル</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">内容</label>
      <textarea id="body" class="form-control" name="body" rows="15"></textarea>
    </div>
    <div class="row">
      <input class="btn btn-primary mx-auto" type="submit" value="新規作成">
    </div>
    @csrf
  </form>

</div>
@endsection