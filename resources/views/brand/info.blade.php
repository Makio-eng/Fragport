@extends('layouts.user.app')
@section('content')
<div class="brand-info container">
  <div class="brand-logo col-8 offset-2 pt-3">
    <img src="{{ asset('storage/images/'. $brand -> brandLogo_path)}}" class="img-fluid brand-logo border d-block mx-auto mb-2">
    <p class="text-center mb-0">{{ $brand -> name}}</p>
    <p class="text-center">({{ $brand -> ja_name}})</p>
  </div>
  <div class="brandabout row mx-auto col-10 offset-1">
    <p>{{ $brand -> body}}</p>
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
      <a class="perfume-link" href="{{ action('ReviewController@index',['id' => $perfume -> id])}}">
        <img src="{{ asset('storage/images/'. $perfume->perfumeImage_path)}}" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
      </a>
      <p class="text-center mb-0">{{ $perfume -> name}}</p>
      <p class="text-center">({{ $perfume -> ja_name}})</p>
    </div>
    @endforeach
  </div>
</div>

@endsection