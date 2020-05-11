@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">{{$brand -> name}}<br>香水新規登録</h1>
  <form action="{{ action('Admin\PerfumeController@create')}}" method="post" enctype="multipart/form-data">

    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif

    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Perfume Name(英語)</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name" value="{{old('ja_name')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="rate" class="">賦香率</label>
      <input type="text" class="form-control" id="rate" name="rate" value="{{old('rate')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="note" class="">香調</label>
      <input type="text" class="form-control" id="note" name="note" value="{{old('note')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="materials" class="">香料</label>
      <input type="text" class="form-control" id="materials" name="materials" value="{{old('materials')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="perfumer" class="">調香師</label>
      <input type="text" class="form-control" id="perfumer" name="perfumer" value="{{old('perfumer')}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15">{{old('body')}}</textarea>
    </div>
    <div class="row py-3 view_box">
      <input class="mx-auto" type="file" class="file" name="perfumeImage">
    </div>
    <div class="row">
      <input type="hidden" name="id" value="{{ $brand -> id }}">
      <input class="btn btn-primary mx-auto" type="submit" value="新規作成">
    </div>
    @csrf
  </form>

</div>
@endsection