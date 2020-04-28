@extends('layouts.user.app')


@section('content')
<!-- インフォメーション関連 -->
<div class="information container my-5 border border-secondary shadow">
  <div class="contents-logo mb-3 row">
    <h1 class="mx-auto">Information</h1>
  </div>
  <div class="row">
    <div class="col-4">
      <p class="text-center">2020/11/11</p>
    </div>
    <div class="col-8">
      <a class=information-link href="#">サイトリニューアルのご案内
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <p class="text-center">2020/11/11</p>
    </div>
    <div class="col-8">
      <a class=information-link href="#">サイトリニューアルのご案内
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <p class="text-center">2020/11/11</p>
    </div>
    <div class="col-8">
      <a class=information-link href="#">サイトリニューアルのご案内
      </a>
    </div>
  </div>
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
    <div class="brand col-4">
      <a href="{{ url('/brand/info') }}" class="brand-link">
        <img src="https://picsum.photos/200/100" class="img-fluid brand-logo d-block mx-auto mb-2">
      </a>
      <p class="text-center mb-0">Aesop</p>
      <p class="text-center">(イソップ)</p>
    </div>
  </div>
  <div class="row d-flex justify-content-end m-2">
    <a class="more" href="{{ url('/brand') }}">And more</a>
  </div>
</div>
@endsection