@extends('layouts.user.app')
@section('content')
<div class="contact-form-head">
  <div class="row">
    <h1 class="contact-form-title mx-auto">Contact</h1>
  </div>
  <div class="row">
    <p class="text-center mx-auto">ご意見ご要望等ございましたら<br>お気軽にお問い合わせください。</p>
  </div>
</div>

<div class="contact-form container">
  <form action="{{action('ContactController@confirm')}}" method="post">
    @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif
    <div class="col-8 offset-2">
      <div class="form-group align-items-center mx-auto">
        <label for="contact-name" class="text-center  mb-0">ご氏名</label>
        <input type="text" class="form-control contact-name" name="name" id="contact-name" value="{{ old('name') }}">
      </div>
      <div class="form-group align-items-center mx-auto">
        <label for="contact-email" class="text-center  mb-0">メールアドレス</label>
        <input type="text" class="form-control form-control-sm" name="email" id="contact-email" value="{{ old('email') }}">
      </div>
      <div class="form-group align-items-center mx-auto">
        <label for="contact-body" class="text-center  mb-0">お問い合わせ内容</label>
        <textarea class="form-control" rows="10" name="body" id="contact-body">{{ old('body') }}</textarea>
      </div>
      <div class="row py-3">
        <input class="btn btn-lg mx-auto" type="submit" value="確認">
      </div>
      @csrf
    </div>
  </form>
</div>
@endsection