@extends('layouts.user.app')
@section('content')
<div class="perfumeindex-header container">
  <div class="perfume-name row d-block text-center mb-4">
    <h1 class="mx-auto mb-0">{{ $perfume -> name}}</h1>
    <h3 class="mx-auto mb-0">({{ $perfume -> ja_name}})</h3>
  </div>

  @unless(Auth::guest())
  @if(Auth::id() == $perfume->user_id)
  <div class="row">
    <a href="{{action('User\PerfumeController@edit',['id'=>$perfume->id])}}" class="perfume-edit-btn ml-auto">
      <button type="button" class="btn">香水を編集</button>
    </a>
  </div>
  @endif
  @endunless

  <div class="perfume row">
    <div class="col-md-6 perfume-image py-2">
      @if($perfume->perfumeImage_path == null)
      <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/noimage.png" alt="no_image" class="img-fluid mx-auto">
      @else
      <img src="{{$perfume -> perfumeImage_path}}" alt="{{ $perfume -> ja_name}}" class="img-fluid mx-auto">
      @endif
    </div>
    <div class="col-md-5 mx-2">
      <div class="row perfume-about mx-auto py-2">
        <p class="mx-auto">{{ $perfume -> body}}</p>
      </div>
      <div class="perfume-detail">
        <div class="perfume-rate d-block row">
          <p class="mb-0">-賦香率-</p>
          <p class="ml-3">{{ $perfume -> rate}}</p>
        </div>
        <div class="perfume-note d-block row">
          <p class="mb-0">-香調-</p>
          <p class="ml-3">{{ $perfume -> note}}</p>
        </div>
        <div class="perfume-material d-block row">
          <p class="mb-0">-香料-</p>
          <p class="ml-3">{{ $perfume -> materials}}</p>
        </div>
        <div class="perfumer d-block row">
          <p class="mb-0">-調香師-</p>
          <p class="ml-3">{{ $perfume -> perfumer}}</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>



<div class="container">
  <div class="review-list-title row mt-3">
    <h2 class="mx-auto">Review List</h2>
  </div>
  <div class="review-list-title text-right">
    <p>レビューを投稿
      <a href="{{ action('User\ReviewController@add',['id' => $perfume -> id])}}" class="add-link">
        <svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
        </svg>
      </a></p>
  </div>

  <div class="user-review-list row">
    @foreach($perfume->reviews as $review)
    <div class="col-4 py-lg-2 review-link">
      <a data-toggle="modal" data-target="#exampleModalCenter{{$review->id}}">
        <img src="{{$review->reviewThumb_path}}" alt="" class="img-fluid d-block mx-auto my-3">
      </a>
    </div>


    <!-- Modal -->

    <div class="modal review-modal fade" id="exampleModalCenter{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="row pb-3">
                <div class="col-lg-7">
                  <img src="{{$review->reviewImage_path}}" alt="" class="img-fluid d-block mx-auto my-4 ">
                </div>
                <div class="col-lg-5">
                  <div class="user-profile row">
                    <div class="col-4">
                      @if(Auth::id() == $review->user_id)
                      <a href="{{action('User\ProfileController@mypage')}}">
                        @if(optional($review->user->profile)->userImage_path == null)
                        <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
                        @else
                        <img src="{{$review->user->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
                        @endif</a>

                      @else
                      <a href="{{action('User\ProfileController@info',['id'=>$review->user->id])}}">
                        @if(optional($review->user->profile)->userImage_path == null)
                        <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
                        @else
                        <img src="{{$review->user->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
                        @endif</a>
                      @endif
                    </div>
                    <div class="col-8 d-flex align-items-center">
                      <h2 class="user-name">{{$review->user->name}}</h2>
                    </div>
                  </div>
                  <div class="likedate row">
                    <div class="col text-right">
                      @if(!$review->is_favorite($review->id))
                      <form action="{{ action('FavoriteController@store',['id'=>$review->id]) }}" method="post">
                        <input type="submit" value="&#xf004;" class="far">
                        <p class="text-right d-inline">{{count($review->favorites)}}</p>
                        @csrf
                      </form>
                      @else
                      <form action="{{ action('FavoriteController@destroy',['id'=>$review->id]) }}" method="post">
                        <input type="submit" value="&#xf004;" class="fas">
                        <p class="text-right d-inline">{{count($review->favorites)}}</p>
                        @csrf
                      </form>
                      @endif
                    </div>
                  </div>

                  <div class="row review-body">
                    <p class="body">{{$review->body}}</p>
                  </div>
                  <div class="likedate row">
                    <i class="far fa-clock ml-auto">
                      <p class="text-right d-inline">{{$review->created_at->format('Y/m/d')}}</p>
                    </i>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ModalEnd -->

    @endforeach
    <div class="pagination justify-content-center container">
      {{$reviews -> links()}}
    </div>

  </div>

  @endsection