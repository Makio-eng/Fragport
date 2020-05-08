@extends('layouts.admin.app')

@section('content')
<div class="information container">
  <div class="row">
    <h1 class="information-logo mx-auto">Information</h1>
  </div>
  <div class="row py-2">
    <a href="{{url('admin/information/create')}}" class="ml-auto"><button type="button" class="btn btn-primary">新規作成</button></a>
  </div>
  @foreach($informations as $information)

  <div class="information-title container my-5 py-2 border border-shadow">
    <div class="row">
      <div class="col-md-4">
        <h2 class="text-center">{{$information->created_at->format('Y/m/d')}}</h2>
      </div>

      <div class="col-md-8">
        <h2 class="text-center">{{$information->title}}</h2>
      </div>
    </div>
    <p class="contents text-center text-justify p-2 mx-4">{{$information->body}}</p>
    <div class="row ml-auto px-2">
      <a href="{{action ('Admin\InformationController@edit',['id' => $information->id])}}" class="ml-auto mx-2 btn btn-primary" role="button">編集</a>
      <form action="{{action('Admin\InformationController@delete',['id'=>$information->id])}}" method="post">
        @csrf
        <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
      </form>
    </div>
  </div>
  @endforeach
</div>





<div class="pagination-area p-5 row justify-content-center">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">先頭</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">次へ</a>
      </li>
    </ul>
  </nav>
</div>

@endsection
@section('js')
<script>
  $(function() {
    $(".btn-dell").click(function() {
      if (confirm("本当に削除しますか？")) {
        //そのままsubmit（削除）
      } else {
        //cancel
        return false;
      }
    });
  });
</script>
@endsection