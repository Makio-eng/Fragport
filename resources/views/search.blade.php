@extends('layouts.user.app')
@section('content')

<div class="search-result container">
  <div class="row">
    <h2 class="mx-auto py-3">検索結果一覧</h2>
  </div>

  <div class="row border p-3">
    @if(isset($brands))

    <div class="row d-flex align-items-end">
      @foreach($brands as $brand)
      <div class="brand col-4 py-3">
        <div class="row px-3">
          <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
            <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
          </a>
        </div>
        <p class="text-center">( {{$brand -> ja_name}} )</p>
      </div>
      @endforeach
      @elseif(isset($perfumes))
      <div class="perfumes d-flex align-items-end p-3 row">
        @foreach($perfumes as $perfume)
        <div class="perfume col-4">
          <a class="perfume-link" href="{{ action('ReviewController@index',['id' => $perfume -> id])}}">
            <img src="{{ asset('storage/images/'. $perfume->perfumeImage_path)}}" class="img-fluid perfume-image d-block mx-auto mb-2 pt-3">
          </a>
          <p class="text-center mb-0">{{ $perfume -> name}}</p>
          <p class="text-center">({{ $perfume -> ja_name}})</p>
        </div>
        @endforeach
      </div>
      @else
      <h2 class="mx-auto">検索キーワードが空欄です。<br>キーワードを入力して検索してください。</h2>
      @endif
    </div>

  </div>

</div>


@endsection