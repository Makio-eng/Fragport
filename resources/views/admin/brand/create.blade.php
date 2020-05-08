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
    <div class="row py-3">
      <input class="mx-auto" type="file" name="brandLogo">
    </div>
    <div class="row">
      <input class="btn btn-primary mx-auto" type="submit" value="新規作成">
    </div>
    @csrf
  </form>

</div>
@endsection