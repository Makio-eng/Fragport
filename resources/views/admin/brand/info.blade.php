@extends('layouts.admin.app')
@section('content')
<div class="brand-info container">
  <div class="row py-2">
    <a class="btn btn-primary ml-auto" href="{{action ('Admin\BrandController@edit',['id' => $brand->id])}}" role="button">ブランド編集</a>
  </div>
  <div class="row py-2">
    <a class="btn btn-primary ml-auto" href="{{action ('Admin\PerfumeController@add',['id' => $brand->id])}}" role="button">香水新規登録</a>
  </div>

  <div class="bland-logo col-8 offset-2 pt-3">
    <img src="{{$brand -> brandLogo_path}}" class="img-fluid brand-logo d-block rounded mx-auto mb-2">
    <p class="text-center mb-0">{{$brand -> name}}</p>
    <p class="text-center">{{$brand -> ja_name}}<br>({{$brand -> country}})</p>
  </div>
  <div class="brandabout row mx-auto col-10 offset-1">
    <h4>{{$brand -> body}}</h4>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>

<div class="brand-products conteiner">
  <div class="row">
    <h1 class="perfumelist-title mx-auto">Perfume List</h1>
  </div>
  <div class="perfumes d-flex p-3 row">
    @foreach($brand->perfumes as $perfume)
    <div class="perfume col-4">
      <a class="perfume-link" href="{{action ('Admin\PerfumeController@info',['id' => $perfume->id])}}">
        <img src="{{$perfume -> perfumeThumb_path}}" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      </a>
      <p class="text-center mb-0">{{$perfume -> name}}</p>
      <p class="text-center">({{$perfume -> ja_name}})</p>
    </div>
    @endforeach
  </div>
</div>

@endsection