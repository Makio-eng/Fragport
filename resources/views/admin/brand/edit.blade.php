@extends('layouts.admin.app')

@section('content')
<div class="information-create container">
  <h1 class="text-center">ブランド編集</h1>
  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" alt="" class="img-fluid">
  <form action="{{ action('Admin\BrandController@update')}}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif
    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Brand Name(英語)</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$brand -> name)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name" value="{{ old('ja_name',$brand -> ja_name)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="country" class="">拠点国</label>
      <input type="text" class="form-control" id="country" name="country" value="{{ old('country',$brand -> country)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15">{{ old('body',$brand -> body)}}</textarea>
    </div>
    <div class="row py-3">
      <input class="mx-auto" type="file" name="brandLogo"><br>
    </div>
    <div class="row">
      <input type="hidden" name="id" value="{{ $brand->id }}">
      <input class="btn btn-primary mx-auto" type="submit" value="更新">
    </div>
    @csrf
  </form>
  <div class="row py-2">
    <form action="{{action('Admin\BrandController@delete',['id'=>$brand->id])}}" method="post">
      @csrf
      <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
    </form>
  </div>
</div>

@endsection


@section('js')
<script>
  $(function() {
    $(".btn-dell").click(function() {
      if (confirm("本当に削除しますか？")) {
        //そのままsubmit（削除）
      } else {
        //cancel
        return false;
      }
    });
  });
</script>
@endsection