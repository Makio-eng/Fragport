@extends('layouts.user.app')
@section('content')
<div class="review-create container">

  <div class="row">
    <h1 class="review-create-title mx-auto py-3">レビューを投稿</h1>
  </div>

  <form action="{{ action('User\ReviewController@create')}}" method="post" enctype="multipart/form-data">
    <div class="review-form row">
      <div class="col-4 p-3">
        <img src="/storage/nopict.png" alt="" class="img-fluid d-block mx-auto my-4 perfume-pic">
        <input type="file" class="form-control-file" name="image">
      </div>

      <div class="review col-8">
        <div class="user-profile row">
          <div class="col-3">
            <img src="/storage/user-icon.png" alt="" class="img-fluid user-image">
          </div>
          <div class="col-9 d-flex align-items-center">
            <p class="user-name">ユーザーネーム</p>
          </div>
        </div>
        <div class="review-body row py-2">
          <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input class="btn btn-outline-success btn-lg mx-auto" type="submit" value="Post">
    </div>
  </form>
</div>
@endsection