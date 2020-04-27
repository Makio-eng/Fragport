@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row py-3">
    <h1 class="mx-auto">管理者メニュー</h1>
  </div>
  <div class="row py-3">
    <h2 class="mx-auto"><a href="{{ url('admin/information/index') }}" class="text-body">インフォメーション管理</a></h2>
  </div>
  <div class="row py-3">
    <h2 class="mx-auto"><a href="{{ url('admin/brand/index') }}" class="text-body">ブランド管理</a></h2>
  </div>
  <div class="row py-3">
    <h2 class="mx-auto"><a href="{{ url('admin/contact/index') }}" class="text-body">お問い合わせ一覧</a></h2>
  </div>
  @endsection