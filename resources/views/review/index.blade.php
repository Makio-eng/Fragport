@extends('layouts.user.app')
@section('content')
<div class="perfumeindex-header container">
  <div class="perfume-name row d-block text-center mb-4">
    <p class="mx-auto mb-0">Tacit</p>
    <p class="mx-auto mb-0">(タシット)</p>
  </div>
  <div class="perfume row">
    <div class="col-lg-6 perfume-image py-2">
      <img src="https://picsum.photos/400" alt="Tacit(タシット)" class="image-fluid d-block mx-auto">
    </div>
    <div class="col-lg-6 perfume-about">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus numquam provident debitis! Veniam reiciendis reprehenderit, sint exercitationem repudiandae asperiores vitae incidunt consectetur ratione. Eum expedita est culpa voluptas! Impedit, optio.</p>
    </div>
  </div>
  <br>
  <hr class="cp_hr06 mx-auto" />
</div>

<div class="review-list container">
  <div class="review-list-title row mt-3">
    <h1 class="col-10 text-center offset-1">Review List</h1>
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