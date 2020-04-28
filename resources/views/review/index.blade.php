@extends('layouts.user.app')
@section('content')
<div class="perfumeindex-header container">
  <div class="perfume-name row d-block text-center mb-4">
    <h1 class="mx-auto mb-0">Tacit<br>(タシット)</h1>
  </div>
  <div class="perfume row">
    <div class="col-md-6 perfume-image py-2">
      <img src="/storage/tacit.png" alt="Tacit(タシット)" class="img-fluid mx-auto">
    </div>
    <div class="col-md-5 mx-2">
      <div class="row perfume-about mx-auto py-2">
        <h4 class="mx-auto">
          バジルグランベールとさわやかなシトラスノートが贅沢に香る、活気に満ちた非常に現代的な香り。
        </h4>
      </div>
      <div class="perfume-detail">
        <div class="perfume-rate d-block row">
          <p class="mb-0">-賦香率-</p>
          <p>オードパルファン</p>
        </div>
        <div class="perfume-note d-block row">
          <p class="mb-0">-香調-</p>
          <p>クリスピー、グリーン、シトラス</p>
        </div>
        <div class="perfume-material d-block row">
          <p class="mb-0">-香料-</p>
          <p>ユズ、ベチバーハート、バジルグランベール</p>
        </div>
        <div class="perfumer d-block row">
          <p class="mb-0">-調香師-</p>
          <p>セリーヌ・バレル</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>

<!-- Modal -->
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
              <div class="user-profile row py-2">
                <div class="col-3">
                  <img src="/storage/user-icon.png" alt="" class="img-fluid user-image">
                </div>
                <div class="col-9 d-flex align-items-center">
                  <h2 class="user-name">T.Aramaki</h2>
                </div>
              </div>
              <div class="row review-body">
                <p class="body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ad sit nulla nisi tenetur commodi. Fuga quibusdam neque iusto aliquid est, officiis nihil voluptatibus quo, accusantium harum ex voluptates voluptatem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nam maiores, similique debitis explicabo repudiandae, animi ut maxime, temporibus aliquid eum. Sunt, perferendis? Iste incidunt magnam nesciunt nostrum possimus! Exercitationem?
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


<div class="review-list container">
  <div class="review-list-title row mt-3">
    <h2 class="col-10 text-center offset-1">Review List</h2>
    <div class="add-btn col-sm-1 text-right pt-3">
      <a href="{{ action('User\ReviewController@add')}}" class="add-link">
        <svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
  </div>
  <div class="reviews row">
    <div class="col-4 py-lg-2">
      <a class="review-link" data-toggle="modal" data-target="#exampleModalCenter">
        <img src="/storage/tacit01.jpg" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="/storage/tacit02.jpg" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="/storage/tacit03.png" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="/storage/tacit04.jpg" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/600" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/600" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
    <div class="col-4 py-lg-2">
      <a class="review-link" href="#">
        <img src="https://picsum.photos/600" alt="" class="img-fluid d-block mx-auto my-4 ">
      </a>
    </div>
  </div>

</div>

@endsection