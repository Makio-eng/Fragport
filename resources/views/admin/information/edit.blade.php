@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">インフォメーション編集</h1>
  <form action="{{ action('Admin\InformationController@update')}}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif
    <div class="form-group align-items-center mx-auto">
      <label for="title" class="">タイトル</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$informations->title) }}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">内容</label>
      <textarea id="body" class="form-control" name="body" rows="15">{{ old('body',$informations->body )}}</textarea>
    </div>
    <div class="row">
      <input type="hidden" name="id" value="{{ $informations->id }}">
      <input class="btn btn-primary mx-auto" type="submit" value="更新">
    </div>

    @csrf

  </form>

</div>
@endsection