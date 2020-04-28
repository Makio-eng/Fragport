@extends('layouts.user.app')
@section('content')
<div class="information container">
  <div class="row">
    <h1 class="information-logo mx-auto">Information</h1>
  </div>

  <div class="information-title row py-2 border border-shadow">
    <div class="col-md-4">
      <h3 class="text-center">2020/12/12</h3>
    </div>

    <div class="col-md-8">
      <h3 class="text-center">インフォメーションタイトル</h3>
    </div>

    <div class="information-contents row">
      <p class="contents text-center text-justify p-2 mx-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptatum dicta, libero neque quam, fugit sit dolore perspiciatis tempora impedit obcaecati, harum magni ab iure. Repudiandae rem maxime numquam corporis.</p>
    </div>
  </div>


  <div class="pagination-area p-5 row justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">先頭</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">次へ</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
@endsection