@extends('layouts.admin.app')
@section('content')
<div class="container">
  <h1 class="text-center">お問い合わせ一覧</h1>
  <div class="row border d-block">
    <p class="text-right">2020/02/02</p>
    <p class="mb-0">ご氏名</p>
    <p>荒巻貴広</p>
    <p class="mb-0">メールアドレス</p>
    <p>user@example.com</p>
    <p class="mb-0">お問い合わせ内容</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe possimus repellat vitae incidunt reiciendis velit, aperiam consequuntur vel itaque? Nulla architecto sint eligendi beatae. Labore maiores laudantium aliquam ducimus suscipit.</p>
    <div class="col-2 ml-auto">
      <a class="btn btn-primary" href="{{url('admin/contact/reply')}}" role="button">返信</a>
    </div>
  </div>
</div>

@endsection