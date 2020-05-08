@extends('layouts.user.app')
@section('content')
<div class="container">
  <div class="row">
    <h1 class="brandlist-title mx-auto">Bland List</h1>
  </div>
</div>

<div class="brand-list container">
  <div class="accordion" id="accordionExample">
    <div class="brands con my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-a" aria-expanded="true" aria-controls="brand-a">
              ア行
            </button>
          </h5>
        </div>
        <div id="brand-a" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body row d-flex">
            @foreach($brands as $brand)
            <div class="brand col-4">
              <a href="{{ action('BrandController@info',['id' => $brand -> id] )}}" class="brand-link">
                <img src="{{ asset('storage/images/' . $brand -> brandLogo_path) }}" class="img-fluid brand-logo d-block mx-auto mb-2">
              </a>
              <p class="text-center mb-0">{{$brand -> name}}</p>
              <p class="text-center">({{$brand -> ja_name}})</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample">
    <div class="brands con my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-b" aria-expanded="true" aria-controls="brand-b">
              カ行
            </button>
          </h5>
        </div>
        <div id="brand-b" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body row d-flex">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample">
    <div class="brands con my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-c" aria-expanded="true" aria-controls="brand-c">
              サ行
            </button>
          </h5>
        </div>
        <div id="brand-c" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body row d-flex">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection