@extends('layouts.user.home')
@section('content')
<div class="about-contents">
  <div class='box'>
    <div class='wave -one'></div>
    <div class='wave -two'></div>
    <div class='wave -three'></div>
    <div class='title'>about Fragport</div>
  </div>
</div>
<div class="about-contents container my-5">
  <div class="container head">
    <div class="row">
      <h2 class="mx-auto mb-4">「あなたの香りを綴りませんか？」</h2>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-md-6">
        <p class="m-1">近年じわじわと脚光を浴び始めている「メゾンフレグランス」、「ニッチフレグランス」と呼ばれる比較的流通数の少ない香水や、
          ファッションブランド発の少しお高い香水。<br>
          これらの香水は情報量もまだまだ不足気味かつ、<br>
          各WebサイトやSNS等に散在しており調べるのがやや煩雑な現状です。
        </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="{{asset('storage/materials/about04.jpeg')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="container my-5 scroll-animation fadein-left mid">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 order-md-2">
        <p class="m-1">
          そこで、皆さんが持っている香水の情報を集約し、誰もが手軽に楽しめる香水図鑑サイトを一緒に創りませんか？<br>
          Fragportは、香水好きな人たちで創り上げる香りのSNSです。
        </p>
      </div>

      <div class="col-md-6">
        <img src="{{asset('storage/materials/about05.jpeg')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="row">
    <a href="{{url('/')}}" class="sub-btn mx-auto btn-lg btn">Home</a>
  </div>
</div>
@endsection
@section('js')
<script>
  function scrollChk() {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    jQuery('.scroll-animation').not('.active').each(function() {
      var pos = $(this).offset().top;

      if (scroll > pos - windowHeight) {
        $(this).addClass("active");
      }
    });
  }
  $(window).scroll(function() {
    scrollChk();
  });
  $('body').on('touchmove', function() {
    scrollChk();
  });
</script>
@endsection