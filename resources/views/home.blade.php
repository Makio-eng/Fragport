@extends('layouts.user.home')


@section('content')

<div class="top-image">
  <h2 class="top-text">「あなたの香りを<br>　綴りませんか」</h2>
</div>

<div class="container about-link my-4 px-4">
  <a href="{{url('/about')}}" class="">

    <div class="row shadow">
      <div class="col-4 text-center d-flex align-items-center">
        <h2 class=" mx-auto">about<br><span class="fragport">Fragport</span></h2>
      </div>
      <div class="col-8 px-0">
        <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/about_01.jpeg" alt="" class="img-fluid">
      </div>

    </div>
  </a>
</div>

<!-- インフォメーション関連 -->
<div class="container">
  <div class="information container my-5 shadow">
    <div class="contents-logo mb-3 row">
      <h2 class="mx-auto">Information</h2>
    </div>
    @foreach ($informations as $information)

    <div class="row">
      <div class="col-4">
        <p class="text-center border-bottom w-md-50 mx-auto">{{$information->created_at->format('Y/m/d')}}</p>
      </div>
      <div class="col-8">
        <a class="title" href="{{ url('/information') }}">
          <p class="information-link b-line">{{$information->title}}</p>
        </a>
      </div>
    </div>
    @endforeach
    <div class="row  d-flex justify-content-end m-2">
      <a class="more" href="{{ url('/information') }}">And more</a>
    </div>
  </div>

  <!-- NewPost関連 -->
  <div class="new-post container my-5  shadow">
    <div class="contents-logo mb-3 row">
      <h2 class="mx-auto">New Post</h2>
    </div>
    <div class="new-posts row d-flex align-items-end">
      @foreach($reviews as $review)
      <div class="col-4 py-2">
        <a href="{{ action('ReviewController@index',['id'=>$review->perfume_id]) }}" class="">
          <img src="{{$review->reviewThumb_path}}" class="img-fluid d-block mx-auto mb-2">
        </a>
      </div>
      @endforeach
    </div>
  </div>

  <!-- ブランドリスト関連 -->
  <div class="brandlist container my-5  shadow">
    <div class="contents-logo mb-3 row">
      <h2 class="mx-auto">Bland List</h2>
    </div>
    <div class="row d-flex align-items-end">
      @foreach($brands as $brand)

      <div class="brand col-4">
        <a href="{{ action('BrandController@info',['id' => $brand -> id])}}" class="brand-link">
          <img src="{{$brand -> brandLogo_path}}" class="img-fluid brand-logo d-block mx-auto mb-2">
        </a>
        <p class="text-center">({{$brand -> ja_name}})</p>
      </div>
      @endforeach
    </div>
    <div class="row d-flex justify-content-end m-2">
      <a class="more" href="{{ url('/brand') }}">And more</a>
    </div>
  </div>
</div>

<div class="container contact-form-link px-4">
  <a href="{{url('/contact')}}">
    <div class="row shadow">
      <div class="col-8 px-0">
        <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/contact_01.jpeg" alt="" class="img-fluid">
      </div>
      <div class="col-4 d-flex align-items-center">
        <h3 class="text-center mx-auto">Contact<br>Form</h3>
      </div>
    </div>
  </a>
</div>
@endsection