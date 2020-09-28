@extends('layouts.user.app')
@section('content')
<div class="user-profile-info container">
  <div class="row">
    <h1 class="profile-title mx-auto py-3">Profile</h1>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <div class="row">
        @if(optional($user->profile)->userImage_path == null)
        <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
        @else
        <img src="{{$user->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
        @endif
      </div>
      <div class="row">
        <h2 class="user-name mx-auto">{{$user -> name}}</h2>
      </div>
      <div class="row pt-3 pb-5 text-center">
        <div class="sns col-4">
          <a href="{{optional($user->profile)->twitter}}" class="Twitter-link">
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/Twitter.png" class="Twitter-logo img-fluid sns-links ">
          </a>
        </div>
        <div class="sns col-4">
          <a href="{{optional($user->profile)->instagram}}" class="instagram-link">
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/instagram2.png" class="instagram-logo img-fluid sns-links ">
          </a>
        </div>
        <div class="sns col-4">
          <a href="{{optional($user->profile)->facebook}}" class="facebook-link">
            <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/facebook.png" class="facebook-logo img-fluid sns-links ">
          </a>
        </div>

      </div>
    </div>
    <div class="users col-sm-7">
      <div class="row">
        <h2 class="favorite-material ml-2">好きな香料</h2>
      </div>
      @if($user->profile)
      <div class="row">
        <p class="favorite-materials ml-5 mr-2">{{$user->profile->favoriteMaterial}}</p>
      </div>
      @endif
      <div class="row">
        <h2 class="my-fragrances ml-2">マイフレグランス</h2>
      </div>
      <div class="row">
        <p class="my-fragrance ml-5 mr-2">{{optional($user->profile)->myFragrance}}</p>
      </div>
      <div class="row">
        <h2 class="introducts ml-2">自己紹介</h2>
      </div>
      <div class="row">
        <p class="introduction ml-5 mr-2">{{optional($user->profile)->introduction}}</p>
      </div>
    </div>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>


<div class="container">
  <div class="row">
    <h2 class="user-review-title mx-auto">Review List</h2>
  </div>
  <div class="user-review-list row">
    @foreach($user->reviews as $review)
    <div class="col-4 py-lg-2">
      <a class="review-link" data-toggle="modal" data-target="#exampleModalCenter{{$review->id}}">
        <img src="{{$review->reviewThumb_path}}" alt="" class="img-fluid d-block mx-auto my-3 ">
      </a>
    </div>
    <!-- modal -->
    <div class="modal review-modal fade" id="exampleModalCenter{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
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
                    <div class="col-3">
                      @if(optional($review->user->profile)->userImage_path == null)
                      <img src="https://fragport-image.s3-ap-northeast-1.amazonaws.com/uploads/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
                      @else
                      <img src="{{$review->user->profile->userImage_path}}" alt="" class="img-fluid user-image mx-auto">
                      @endif
                    </div>
                    <div class="col-9 d-flex align-items-center">
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

                  <div class="perfume-name row ">
                    <h4 class="brand mx-auto pt-1 mb-1">{{$review->perfume->brand->name}}</h4>
                  </div>
                  <div class="perfume-name row ">
                    <h4 class="brand mx-auto pb-1">-{{$review->perfume->ja_name}}-</h4>
                  </div>
                  <div class="row review-body">
                    <p class="body">
                      {{$review->body}}
                    </p>
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

  </div>
</div>

@endsection