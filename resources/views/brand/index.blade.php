@extends('layouts.user.app')
@section('content')
<div class="container">
  <div class="row">
    <h1 class="brandlist-title mx-auto">Bland List</h1>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-a" aria-expanded="true" aria-controls="brand-a">
              ア行
            </button>
          </h5>
        </div>
        <div id="brand-a" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body row  d-flex align-items-end">
            @foreach($brands['ア'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3 ">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample1">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-k" aria-expanded="true" aria-controls="brand-k">
              カ行
            </button>
          </h5>
        </div>
        <div id="brand-k" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['カ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample2">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-s" aria-expanded="true" aria-controls="brand-s">
              サ行
            </button>
          </h5>
        </div>
        <div id="brand-s" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['サ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample3">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-t" aria-expanded="true" aria-controls="brand-t">
              タ行
            </button>
          </h5>
        </div>
        <div id="brand-t" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['タ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample4">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-n" aria-expanded="true" aria-controls="brand-n">
              ナ行
            </button>
          </h5>
        </div>
        <div id="brand-n" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['ナ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample5">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-h" aria-expanded="true" aria-controls="brand-h">
              ハ行
            </button>
          </h5>
        </div>
        <div id="brand-h" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample5">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['ハ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample6">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-m" aria-expanded="true" aria-controls="brand-m">
              マ行
            </button>
          </h5>
        </div>
        <div id="brand-m" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample6">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['マ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample7">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-y" aria-expanded="true" aria-controls="brand-y">
              ヤ行
            </button>
          </h5>
        </div>
        <div id="brand-y" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample7">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['ヤ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample8">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-r" aria-expanded="true" aria-controls="brand-r">
              ラ行
            </button>
          </h5>
        </div>
        <div id="brand-r" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample8">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['ラ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="brand-list container">
  <div class="accordion" id="accordionExample9">
    <div class="brands my-3">
      <div class="card w-100">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link text-dark btn-block text-left" type="button" data-toggle="collapse" data-target="#brand-w" aria-expanded="true" aria-controls="brand-w">
              ワ行
            </button>
          </h5>
        </div>
        <div id="brand-w" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample9">
          <div class="card-body row d-flex align-items-end">
            @foreach($brands['ワ'] as $brand)
            <div class="brand col-4 py-3">
              <div class="row px-3">
                <a href="{{action ('BrandController@info',['id' => $brand->id])}}" class="brand-link">
                  <img src="{{asset('storage/images/' . $brand -> brandLogo_path)}}" class="img-fluid  brand-logo d-block mx-auto mb-2">
                </a>
              </div>
              <p class="text-center">( {{$brand -> ja_name}} )</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection