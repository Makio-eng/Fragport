@extends('layouts.user.app')

@section('content')
<div class="perfume-create container">
  <h1 class="text-center">香水編集</h1>
  <h3 class="text-center">{{$perfume->brand->name}}</h3>
  <h3 class="text-center">-{{$perfume->name}}-</h3>
  <form action="{{ action('User\PerfumeController@update')}}" method="post" enctype="multipart/form-data">

    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
    @endif

    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Perfume Name(アルファベット)</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old('name',$perfume->name)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name" value="{{old('ja_name',$perfume->ja_name)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="rate" class="">賦香率</label>
      <input type="text" class="form-control" id="rate" name="rate" value="{{old('rate',$perfume->rate)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="note" class="">香調</label>
      <input type="text" class="form-control" id="note" name="note" value="{{old('note',$perfume->note)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="materials" class="">香料</label>
      <input type="text" class="form-control" id="materials" name="materials" value="{{old('materials',$perfume->materials)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="perfumer" class="">調香師</label>
      <input type="text" class="form-control" id="perfumer" name="perfumer" value="{{old('perfumer',$perfume->perfumer)}}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15">{{old('body',$perfume->body)}}</textarea>
    </div>
    <div class="row py-3">
      <input class="mx-auto" type="file" name="perfumeImage">
    </div>
    <div class="row">
      <input type="hidden" name="id" value="{{ $perfume -> id }}">
      <input class="btn mx-auto" type="submit" value="更新">
    </div>
    @csrf
  </form>
  <div class="row delete py-2">
    <form action="{{action('User\PerfumeController@delete',['id'=>$perfume->id])}}" class="mx-auto" method="post">
      @csrf
      <input type="submit" value="削除" class="btn btn-danger btn-sm btn-del">
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