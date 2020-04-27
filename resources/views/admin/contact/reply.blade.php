@extends('layouts.admin.app')
@section('content')
<div class="container">
  <h1 class="text-center">お問い合わせ返信</h1>
  <div class="row border d-block">
    <p class="text-right">2020/02/02</p>
    <p class="mb-0">ご氏名</p>
    <p>荒巻貴広</p>
    <p class="mb-0">メールアドレス</p>
    <p>user@example.com</p>
    <p class="mb-0">お問い合わせ内容</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe possimus repellat vitae incidunt reiciendis velit, aperiam consequuntur vel itaque? Nulla architecto sint eligendi beatae. Labore maiores laudantium aliquam ducimus suscipit.</p>
  </div>
</div>

<div class="container">
  <h2>返信内容</h2>
  <form action="{{action('Admin\ContactController@process')}}" method="post">
    <div class="form-group align-items-center mx-auto">
      <label for="title" class="text-center  mb-0">件名</label>
      <input type="text" class="form-control form-control-sm" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="form-group align-items-center mx-auto">
      <label for="body" class="text-center  mb-0">本文</label>
      <textarea class="form-control" rows="10" name="body" id="body">{{ old('body') }}</textarea>
    </div>
    <div class="row py-3">
      <input class="btn btn-lg btn-primary mx-auto" type="submit" value="返信">
    </div>

    @csrf
  </form>
</div>

@endsection