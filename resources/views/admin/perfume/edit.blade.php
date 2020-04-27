@extends('layouts.admin.app')

@section('content')
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
        香水を削除してもよろしいですか？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <a href="{{action('Admin\PerfumeController@delete')}}"><button type="button" class="btn btn-danger">削除</button></a>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<div class="information-create container">
  <h1 class="text-center">香水編集</h1>
  <form action="{{ action('Admin\PerfumeController@create')}}" method="post" enctype="multipart/form-data">

    <div class="form-group align-items-center mx-auto">
      <label for="name" class="">Perfume Name(英語)</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="ja_name" class="">読み方</label>
      <input type="text" class="form-control" id="ja_name" name="ja_name">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="rate" class="">賦香率</label>
      <input type="text" class="form-control" id="rare" name="rate">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="note" class="">香調</label>
      <input type="text" class="form-control" id="note" name="note">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="material" class="">香料</label>
      <input type="text" class="form-control" id="material" name="material">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="">説明</label>
      <textarea id="body" class="form-control" name="body" rows="15"></textarea>
    </div>
    <div class="row py-3">
      <input class="mx-auto" type="file" name="brand_logo">
    </div>
    <div class="row">
      <input class="btn btn-primary mx-auto" type="submit" value="更新">
    </div>
    <div class="row py-2">
      <button type="button" class="btn btn-danger mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
        削除
      </button>
    </div>

    @csrf
  </form>

</div>
@endsection