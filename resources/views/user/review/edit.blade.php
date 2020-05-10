@extends('layouts.user.app')
@section('content')


<div class="review-create container">

  <div class="row">
    <h1 class="review-create-title mx-auto py-3">レビューを編集</h1>
  </div>
  <form action="{{ action('User\ReviewController@update')}}" method="post" enctype="multipart/form-data">
    <div class="row">
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
        <li class="text-danger">{{ $e }}</li>
        @endforeach
      </ul>
      @endif

    </div>

    <div class="review-form row">
      <div class="col-4 p-3">
        <img src="{{asset('storage/images/'.$review->reviewImage_path)}}" alt="" class="img-fluid d-block mx-auto my-4 ">
        <p class="mb-1">写真の変更</p>
        <input type="file" class="form-control-file" name="reviewImage">

      </div>
      <div class="review col-8">
        <div class="user-profile row">
          <div class="col-3">
            @if(optional(Auth::user()->profile)->userImage_path == null)
            <img src="/storage/user-icon.png" alt=" no_image" class="img-fluid mx-auto">
            @else
            <img src="{{ asset('storage/images/'. Auth::user()->profile->userImage_path) }}" alt="" class="img-fluid user-image mx-auto">
            @endif

          </div>
          <div class="col-9 d-flex align-items-center">
            <h3 class="user-name">{{ Auth::user()->name}}</h3>
          </div>
        </div>
        <div class="review-body row p-2">
          <textarea class="form-control" name="body" rows="10">{{ old('body',$review->body) }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input type="hidden" name="id" value="{{ $review -> id }}">
      <input class="btn btn-lg mx-auto" type="submit" value="Save">
    </div>
    @csrf
  </form>
  <div class="row delete py-2">
    <form action="{{action('User\ReviewController@delete',['id'=>$review->id])}}" class="mx-auto" method="post">
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