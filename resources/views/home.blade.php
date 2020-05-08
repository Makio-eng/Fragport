@extends('layouts.user.app')


@section('content')
<!-- インフォメーション関連 -->
<div class="information container my-5 border border-secondary shadow">
  <div class="contents-logo mb-3 row">
    <h1 class="mx-auto">Information</h1>
  </div>
  @foreach ($informations as $information)

  @if ($loop->index == 2)
  @endif

  <div class="row">
    <div class="col-4">
      <p class="text-center">{{$information->created_at->format('Y/m/d')}}</p>
    </div>
    <div class="col-8">
      <p class=information-link>{{$information->title}}</p>
    </div>
  </div>
  @endforeach
  <div class="row  d-flex justify-content-end m-2">
    <a class="more" href="{{ url('/information') }}">And more</a>
  </div>
</div>

<!-- NewPost関連 -->
<div class="new-post container my-5 border border-secondary shadow">
  <div class="contents-logo mb-3 row">
    <h1 class="mx-auto">New Post</h1>
  </div>
  <div class="new-posts row d-flex">
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/234/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/135/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/236/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/137/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/238/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
    <div class="brand col-4">
      <a href="{{ url('/review') }}" class="brand-link">
        <img src="https://picsum.photos/id/139/300" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
    </div>
  </div>
</div>

<!-- ブランドリスト関連 -->
<div class="brandlist container my-5 border border-secondary shadow">
  <div class="contents-logo mb-3 row">
    <h1 class="mx-auto">Bland List</h1>
  </div>
  <div class="row d-flex">
    @foreach($brands as $brand)
    @if ($loop->index == 5)
    @endif

    <div class="brand col-4">
      <a href="{{ action('BrandController@info',['id' => $brand -> id])}}" class="brand-link">
        <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
      <p class="text-center mb-0">{{$brand -> name}}</p>
      <p class="text-center">({{$brand -> ja_name}})</p>
    </div>
    @endforeach
  </div>
  <div class="row d-flex justify-content-end m-2">
    <a class="more" href="{{ url('/brand') }}">And more</a>
  </div>
</div>
@endsection