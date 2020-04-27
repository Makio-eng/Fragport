@extends('layouts.user.app')
@section('content')
<div class="contact-form-head">
  <div class="row">
    <h1 class="contact-form-title mx-auto">Contact</h1>
  </div>
  <div class="row">
    <p class="text-center mx-auto">ご入力内容確認</p>
  </div>
</div>

<div class="contact-form container">
  <form action="{{action('ContactController@process')}}" method="post">
    <div class="col-8 offset-2">
      <div class="form-group align-items-center mx-auto my-2">
        <p class="mb-0">ご氏名</p>
        <p>{{$contact->name}}　様</p>
      </div>
      <div class="form-group align-items-center mx-auto my-2">
        <p class="mb-0">メールアドレス</p>
        <p>{{$contact->email}}</p>
      </div>
      <div class="form-group align-items-center mx-auto my-2">
        <p class="mb-0">お問い合わせ内容</p>
        <p>{{$contact->body}}</p>
      </div>
      <div class="row pt-3">
        <input class="btn btn-lg btn-secondary mx-auto" type="submit" name="action" value="戻る">
      </div>
      <div class="row py-3">
        <input class="btn btn-lg mx-auto" type="submit" name="action" value="送信">
      </div>
      @foreach($contact->getAttributes() as $key => $value)
      <input type="hidden" name="{{$key}}" value="{{$value}}">
      @endforeach
      @csrf
    </div>
  </form>
</div>
@endsection