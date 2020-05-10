@extends('layouts.user.app')
@section('content')
<div class="information container">
  <div class="row">
    <h1 class="information-logo mx-auto">Information</h1>
  </div>
  @foreach($informations as $information)
  <div class="information-title row py-2 my-3 border border-shadow">
    <div class="col-md-4">
      <h4 class="text-center">{{ date("Y/m/d", strtotime($information->created_at)) }}</h4>
    </div>

    <div class="col-md-8">
      <h4 class="text-center">{{$information->title}}</h4>
    </div>

    <div class="information-contents row">
      <p class="contents text-center text-justify p-2 mx-4">{{$information->body}}</p>
    </div>
  </div>
  @endforeach

  <div class="pagination justify-content-center container">
    {{$informations -> links()}}
  </div>
  @endsection