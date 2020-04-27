@extends('layouts.admin.app')

@section('content')
<div class="information container">
  <div class="row">
    <h1 class="information-logo mx-auto">Information</h1>
  </div>
  <div class="row py-2">
    <a href="{{url('admin/information/create')}}" class="ml-auto"><button type="button" class="btn btn-primary">新規作成</button></a>
  </div>
  <div class="information-title container py-2 border border-shadow">
    <div class="row">
      <div class="col-md-4">
        <h2 class="text-center">2020/12/12</h2>
      </div>

      <div class="col-md-8">
        <h2 class="text-center">インフォメーションタイトル</h2>
      </div>
    </div>
    <p class="contents text-center text-justify p-2 mx-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptatum dicta, libero neque quam, fugit sit dolore perspiciatis tempora impedit obcaecati, harum magni ab iure. Repudiandae rem maxime numquam corporis.</p>
    <div class="row ml-auto px-2">
      <a href="{{url('admin/information/edit')}}" class="ml-auto mx-2 btn btn-primary" role="button">編集</a>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        削除
      </button>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal review-delete fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">削除確認</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          投稿を削除してもよろしいですか？
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          <a href="{{action('Admin\InformationController@delete')}}"><button type="button" class="btn btn-danger">削除</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
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

@endsection