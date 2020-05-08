@extends('layouts.admin.app')
@section('content')
<div class="container">
  <h1 class="text-center">お問い合わせ一覧</h1>
  @foreach($contactforms as $contactform)
  <div class="row border d-block my-4">
    <p class="text-right">{{ $contactform -> created_at }}</p>
    <p class="mb-0">ご氏名</p>
    <p>{{ $contactform -> name}}</p>
    <p class="mb-0">メールアドレス</p>
    <p>{{ $contactform -> email}}</p>
    <p class="mb-0">お問い合わせ内容</p>
    <p>{{ $contactform -> body}}</p>
    <div class="col-2 ml-auto">
      <a class="btn btn-primary" href="{{action('Admin\ContactController@reply',['id'=> $contactform->id]) }}" role="button">返信</a>
    </div>
  </div>
  @endforeach
</div>

@endsection