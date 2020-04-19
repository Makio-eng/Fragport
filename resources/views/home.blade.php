@extends('layouts.user.app')


@section('content')
<div class="information container my-5 border border-secondary shadow">
    <div class="contents-logo">
        <p>Information</p>
    </div>
    <div class="contents">

    </div>
    <a class="more" href="{{ url('/information') }}">And more</a>
</div>

<div class="new-post container my-5 border border-secondary shadow">
    <div class="contents-logo">
        <p>New Posts</p>
    </div>
    <div class="contents">

    </div>
</div>

<div class="brand-list container my-5 border border-secondary shadow">
    <div class="contents-logo">
        <p>Brand List</p>
    </div>
    <div class="contents">
    <div class="row">
        <div class="box1 col-1 bg-primary">1</div>
        <div class="box2 col-1 bg-secondary"></div>
        <div class="box1 col-1 bg-primary"></div>
        <div class="box2 col-1 bg-secondary"></div>
        <div class="box1 col-1 bg-primary"></div>
        <div class="box2 col-1 bg-secondary"></div>
        <div class="box1 col-1 bg-primary"></div>
        <div class="box2 col-1 bg-secondary"></div>
        <div class="box1 col-1 bg-primary"></div>
        <div class="box2 col-1 bg-secondary"></div>
        <div class="box1 col-1 bg-primary"></div>
        <div class="box2 col-1 bg-secondary"></div>
        </div>
    </div>
    <a class="more" href="{{ url('/brand') }}">And more</a>
</div>

@endsection