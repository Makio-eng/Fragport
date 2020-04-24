<!DOCTYPE html>
<html>

<head>
  　　
  <meta charset="utf-8">
  　　
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/slick.css')}}" type="text/css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="{{ asset('js/slick.min.js')}}" type="text/javascript"></script>

  　　　 <title>jQuery</title>
  <style>
    .container {
      margin: 0 auto;
      padding: 40px;
      width: 80%;
      color: #333;
      background: #419be0;
    }

    .slick-slide {
      text-align: center;
      color: #419be0;
      background: white;
    }
  </style>
</head>

<body>
  <div class='container'>
    <div class='single-item'>
      <div>
        <h3>1</h3>
      </div>
      <div>
        <h3>2</h3>
      </div>
      <div>
        <h3>3</h3>
      </div>
      <div>
        <h3>4</h3>
      </div>
      <div>
        <h3>5</h3>
      </div>
      <div>
        <h3>6</h3>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  $(function() {
    $('.single-item').slick({
      centerMode: true,
      autoplay: true,
      autoplayspeed: 2000,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  });
</script>