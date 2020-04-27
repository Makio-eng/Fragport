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

<!-- modal -->
<div class="modal review-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row py-3">
            <div class="col-lg-7">
              <img src="https://picsum.photos/600" alt="" class="img-fluid mx-auto">
            </div>
            <div class="col-lg-5">
              <div class="row">
                <a href="{{ action('User\ReviewController@edit')}}" class="ml-auto review-edit-link">
                  <i class="fas fa-cog review-edit-link"></i>
                </a>
              </div>
              <div class="user-profile row">
                <div class="col-3">
                  <img src="/storage/user-icon.png" alt="" class="img-fluid user-image">
                </div>
                <div class="col-9 d-flex align-items-center">
                  <p class="user-name">T.Aramaki</p>
                </div>
              </div>
              <div class="perfume-name row ">
                <p class="brand mx-auto">Aesop 「タシット」</p>
              </div>
              <div class="row review-body">
                <p class="body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ad sit nulla nisi tenetur commodi. Fuga quibusdam neque iusto aliquid est, officiis nihil voluptatibus quo, accusantium harum ex voluptates voluptatem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil similique rem excepturi possimus ipsa architecto laudantium molestias voluptatibus esse corporis impedit totam, perspiciatis laborum doloremque vel, expedita, magnam magni? Praesentium.
                </p>
              </div>
              <div class="row">
                <div class="col-6 like">
                  <p class="text-center"><i class="fas fa-heart"></i>20</p>
                </div>
                <div class="col-6 date">
                  <p class="text-center"><i class="far fa-clock"></i>2020/03/01</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ModalEnd -->

<div class="container">
  <div class="row">
    <h1 class="user-review-title mx-auto">Review List</h1>
  </div>
  <div class="user-review-list row">
    <div class="col-4 py-lg-2">
      <a class="review-link" data-toggle="modal" data-target="#exampleModalCenter">
        <img src=" https://picsum.photos/300" alt="" class="img-fluid d-block mx-auto my-4 ">
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