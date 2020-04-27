@extends('layouts.admin.app')
@section('content')
<div class="brand-info container">
  <div class="row py-2">
    <a class="btn btn-primary ml-auto" href="{{url('admin/brand/edit')}}" role="button">ブランド編集</a>
  </div>
  <div class="row py-2">
    <a class="btn btn-primary ml-auto" href="{{url('admin/perfume/create')}}" role="button">香水新規登録</a>
  </div>

  <div class="bland-logo col-8 offset-2 pt-3">
    <img src="https://picsum.photos/400/200" class="img-fluid brand-logo d-block mx-auto mb-2">
    <p class="text-center mb-0">Aesop</p>
    <p class="text-center">(イソップ)</p>
  </div>
  <div class="brandabout row mx-auto col-10 offset-1">
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo voluptatum asperiores incidunt eaque dicta accusantium, natus laborum necessitatibus, vel architecto nihil tempora. Ullam perferendis doloribus autem deleniti veniam, blanditiis vitae.</h2>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>

<div class="brand-products conteiner">
  <div class="row">
    <h1 class="perfumelist-title mx-auto">Perfume List</h1>
  </div>
  <div class="perfumes d-flex p-3 row">
    <div class="perfume col-4">
      <a class="perfume-link" href="{{ url('admin/perfume/info')}}">
        <img src="https://picsum.photos/300" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      </a>
      <p class="text-center mb-0">Tacit</p>
      <p class="text-center">(タシット)</p>
    </div>
    <div class="perfume col-4">
      <img src="https://picsum.photos/300" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      <p class="text-center mb-0">Tacit</p>
      <p class="text-center">(タシット)</p>
    </div>
    <div class="perfume col-4">
      <img src="https://picsum.photos/300" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      <p class="text-center mb-0">Tacit</p>
      <p class="text-center">(タシット)</p>
    </div>
    <div class="perfume col-4">
      <img src="https://picsum.photos/300" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      <p class="text-center mb-0">Tacit</p>
      <p class="text-center">(タシット)</p>
    </div>
  </div>
</div>

@endsection