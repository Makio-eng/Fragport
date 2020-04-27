ff @extends('layouts.user.app')
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
        投稿を削除してもよろしいですか？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-danger">削除</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<div class="review-create container">

  <div class="row">
    <h1 class="review-create-title mx-auto py-3">レビューを編集</h1>
  </div>
  <form action="{{ action('User\ReviewController@create')}}" method="post" enctype="multipart/form-data">
    <div class="review-form row">
      <div class="col-4 p-3">
        <img src="/storage/tacit01.jpg" alt="" class="img-fluid d-block mx-auto my-4 perfume-pic">
      </div>

      <div class="review col-8">
        <div class="user-profile row">
          <div class="col-3">
            <img src="/storage/user-icon.png" alt="" class="img-fluid user-image">
          </div>
          <div class="col-9 d-flex align-items-center">
            <p class="user-name">T.Aramaki</p>
          </div>
        </div>
        <div class="review-body row p-2">
          <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
        </div>
      </div>
    </div>
    <div class="row py-3">
      <input class="btn btn-lg mx-auto" type="submit" value="Save">
    </div>
    @csrf
  </form>
  <div class="row">
    <input class="btn-danger btn-lg mx-auto" type="submit" data-toggle="modal" data-target="#exampleModalCenter" value="Delete">
  </div>
</div>
@endsection