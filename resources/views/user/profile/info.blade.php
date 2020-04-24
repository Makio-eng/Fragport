@extends('layouts.user.app')
@section('content')
<div class="user-profile-info container">
  <div class="row">
    <h1 class="profile-title mx-auto py-3">Profile</h1>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <div class="row">
        <img src="/storage/user-icon.png" alt="" class="img-fluid user-image mx-auto">
      </div>
      <div class="row">
        <div class="col-4 offset-8">
          <a href="{{ action('User\ProfileController@edit')}}" class="profile-edit-link mx-auto">
            <i class="fas fa-cog"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <p class="user-name mx-auto">T.Aramaki</p>
      </div>
      <div class="row pt-3 pb-5 text-center">
        <div class="sns col-4">
          <a href="" class="Twitter-link">
            <img src="/storage/Twitter.png" class="Twitter-logo img-fluid sns-links ">
          </a>
        </div>
        <div class="sns col-4">
          <a href="" class="instagram-link">
            <img src="/storage/instagram2.png" class="instagram-logo img-fluid sns-links ">
          </a>
        </div>
        <div class="sns col-4">
          <a href="" class="facebook-link">
            <img src="/storage/facebook.png" class="facebook-logo img-fluid sns-links ">
          </a>
        </div>

      </div>
    </div>
    <div class="users col-sm-7">
      <div class="row">
        <h2 class="favorite-material ml-2">好きな香料</h2>
      </div>
      <div class="row">
        <p class="favorite-materials ml-5 mr-2">ウッディ・オリエンタル</p>
      </div>
      <div class="row">
        <h2 class="my-fragrances ml-2">マイフレグランス</h2>
      </div>
      <div class="row">
        <p class="my-fragrance ml-5 mr-2">Creed 「Aventus」</p>
      </div>
      <div class="row">
        <h2 class="introducts ml-2">自己紹介</h2>
      </div>
      <div class="row">
        <p class="introduction ml-5 mr-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A consequatur beatae unde saepe incidunt consectetur. Dolor, odit! Delectus aliquid consectetur dignissimos mollitia doloremque quo repellat neque! Nihil assumenda tenetur a!</p>
      </div>
    </div>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>


<div class="container">
  <div class="row">
    <h1 class="user-review-title mx-auto">Review List</h1>
  </div>
  <div class="user-review-list row">
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/300" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/300" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/300" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/300" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>

  </div>
</div>

@endsection