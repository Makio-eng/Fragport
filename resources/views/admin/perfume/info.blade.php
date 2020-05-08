@extends('layouts.admin.app')
@section('content')
<div class="perfumeindex-header container">
  <div class="perfume-name row d-block text-center mb-4">
    <p class="mx-auto mb-0">{{$perfume -> name}}</p>
    <p class="mx-auto mb-0">({{$perfume -> ja_name}})</p>
  </div>
  <div class="row py-2">
    <a class="btn btn-primary ml-auto" href="{{action ('Admin\PerfumeController@edit',['id' => $perfume -> id])}}" role="button">香水編集</a>
  </div>

  <div class="perfume row">
    <div class="col-md-6 perfume-image py-2">
      @if($perfume->perfumeImage_path == null)
      <img src="/storage/images/noimage.png" alt="no_image" class="img-fluid mx-auto">
      @else
      <img src="{{ asset('storage/images/'. $perfume -> perfumeImage_path) }}" alt="{{ $perfume -> ja_name}}" class="img-fluid mx-auto">
      @endif
    </div>
    <div class="col-md-5 mx-2">
      <div class="row perfume-about mx-auto">
        <p class="mx-auto">
          {{$perfume -> body}}
        </p>
      </div>
      <div class="perfume-detail">
        <div class="perfume-rate d-block row">
          <p class="mb-0">-賦香率-</p>
          <p>{{$perfume -> rate}}</p>
        </div>
        <div class="perfume-note d-block row">
          <p class="mb-0">-香調-</p>
          <p>{{$perfume -> note}}</p>
        </div>
        <div class="perfume-note d-block row">
          <p class="mb-0">-香料-</p>
          <p>{{$perfume -> materials}}</p>
        </div>
        <div class="perfume-note d-block row">
          <p class="mb-0">-調香師-</p>
          <p>{{$perfume -> perfumer}}</p>
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
    <a href="{{ action('User\ReviewController@add',['id' => $perfume -> id])}}" class="add-link">
      <svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>
  <div class="user-review-list row">
    @foreach($perfume->reviews as $review)
    <div class="col-4 py-lg-2">
      <a class="review-link" data-toggle="modal" data-target="#exampleModalCenter{{$review->id}}">
        <img src="{{asset('storage/images/'.$review->reviewImage_path)}}" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <!-- Modal -->
    <div class="modal review-modal fade" id="exampleModalCenter{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row py-3">
                <div class="col-lg-7">
                  <img src="{{asset('storage/images/'.$review->reviewImage_path)}}" alt="" class="img-fluid d-block mx-auto my-4 ">
                </div>
                <div class="col-lg-5">
                  <div class="user-profile row">
                    <div class="col-4">
                      @if(optional($review->user->profile)->userImage_path == null)
                      <img src="/storage/user-icon.png" alt=" no_image" class="img-fluid user-image mx-auto">
                      @else
                      <img src="{{ asset('storage/images/'. $review->user->profile->userImage_path) }}" alt="" class="img-fluid user-image mx-auto">
                      @endif
                    </div>
                    <div class="col-8 d-flex align-items-center">
                      <h2 class="user-name">{{$review->user->name}}</h2>
                    </div>
                  </div>
                  <div class="likedate row">
                    <div class="col text-right">
                      <i class="fas fa-heart mr-2">
                        <p class="text-right d-inline">20</p>
                      </i>
                      <i class="far fa-clock">
                        <p class="text-right d-inline">{{$review->created_at->format('Y/m/d')}}</p>
                      </i>
                    </div>
                  </div>

                  <div class="row review-body">
                    <p class="body">
                      {{$review->body}}
                    </p>
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

  @endsection