@extends('layouts.user.app')
@section('content')
<div class="review-create container">

  <div class="row">
    <h1 class="review-create-title mx-auto py-3">レビューを投稿</h1>
  </div>


  <form action="{{ action('User\ReviewController@create')}}" method="post" enctype="multipart/form-data">
    <div class="mx-auto">
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
        <h3 class="text-danger">{{ '・'.$e }}</h3>
        @endforeach
      </ul>
      @endif

    </div>

    <div class="review-form row">
      <div class="col-4 p-3">
        <img src="{{asset('storage/materials/nopict.png')}}" alt="" class="img-fluid d-block mx-auto my-4 perfume-pic">
        <input type="file" class="form-control-file" name="reviewImage">
      </div>

      <div class="review col-8">
        <div class="user-profile row">
          <div class="col-3">
            @if(optional(Auth::user()->profile)->userImage_path == null)
            <img src="{{ asset('storage/materials/user-icon.png') }}" alt=" no_image" class="img-fluid user-image mx-auto">
            @else
            <img src="{{ asset('storage/images/'. Auth::user()->profile->userImage_path) }}" alt="" class="img-fluid user-image mx-auto">
            @endif

          </div>
          <div class="col-9 d-flex align-items-center">
            <h3 class="user-name">{{Auth::user()->name}}</h3>
          </div>
        </div>
        <div class="review-body row py-2">
          <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input type="hidden" name="id" value="{{ $perfume -> id }}">
      <input class="btn btn-lg mx-auto" type="submit" value="Post">
    </div>
    @csrf
  </form>
</div>
@endsection