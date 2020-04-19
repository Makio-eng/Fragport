@extends('layouts.user.app')
@section('content')
<div class="brandlist-title row">
    <h1 class="mx-auto">Bland List</h1>
</div>

<div class="bland-list">
    <div class="accordion" id="accordionExample">
        <div class="brands container my-3">
            <div class="card w-100">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-body" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ア行
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body container d-flex">
                        <div class="bland col-4">
                            <img src="https://picsum.photos/200" class="img-fluid brand-logo d-block mx-auto mb-2">
                            <p class="text-center mb-0">Aesop</p>
                            <p class="text-center">(イソップ)</p>
                        </div>
                        <div class="bland col-4">
                            <img src="https://picsum.photos/200" class="img-fluid brand-logo d-block mx-auto mb-2">
                            <p class="text-center mb-0">Aesop</p>
                            <p class="text-center">(イソップ)</p>
                        </div>
                        <div class="bland col-4">
                            <img src="https://picsum.photos/200" class="img-fluid brand-logo d-block mx-auto mb-2">
                            <p class="text-center mb-0">Aesop</p>
                            <p class="text-center">(イソップ)</p>
                        </div>
                        <div class="bland col-4">
                            <img src="https://picsum.photos/200" class="img-fluid brand-logo d-block mx-auto mb-2">
                            <p class="text-center mb-0">Aesop</p>
                            <p class="text-center">(イソップ)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="brands container my-3">
            <div class="card w-100">
                <div class="card-header" id="headingK">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-body" type="button" data-toggle="collapse" data-target="#collapseK" aria-expanded="true" aria-controls="collapseK">
                        カ行
                        </button>
                    </h5>
                </div>
                <div id="collapseK" class="collapse show" aria-labelledby="headingK" data-parent="#accordionExample">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

        <div class="brands container my-3">
            <div class="card w-100">
                <div class="card-header" id="headingS">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-body" type="button" data-toggle="collapse" data-target="#collapseS" aria-expanded="true" aria-controls="collapseS">
                        サ行
                        </button>
                    </h5>
                </div>
                <div id="collapseS" class="collapse show" aria-labelledby="headingS" data-parent="#accordionExample">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection