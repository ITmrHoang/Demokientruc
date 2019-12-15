<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DEMO kiến trúc</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script> -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<!-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"> -->
<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{ asset('css/home.css')}}" rel="stylesheet">
<link href="{{ asset('css/animate.css')}}" rel="stylesheet">

<!-- <script src="{{ asset('js/jquery-3.4.1.js')}}"></script> -->
<!-- <script src="{{ asset('js/home.js')}}"></script> -->
<!-- <script src="{{ asset('js/bootstrap.js')}}"></script> -->

<!-- icon -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- Map -->
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
crossorigin="">
</script> -->

</head>
<body  >
    <div class="container-fluid home" >

        <div class="thumbnail" >
            <img src="{{asset('../public/bg_dulich.jpg')}}" alt="">
        </div>
        <div class="home">
            <ul class="row nav  text-center menu" style="
            margin-right: 0px;
            margin-left: 0px;">
            <li class="col-md-3" style="width: 268px;">
                <a class="nav-link" href="{{url('/blogs')}}"><b>Trang chủ</b></a>
            </li>
            <li class="col-md-3" style="width: 268px;">
                <a class="nav-link" href="{{url('/blogs/create')}}">
<!-- hoac vao banwgf ten route {{route('blogs.create')}} -->
                  <b>Tạo Bài viết mới</b></a>
            </li>
            <li class=" col-md-3 selectitem" style="width: 268px;">
                <div style="margin-top:10px;">
                  <a data-toggle="collapse" href="#collapse1"><b>Danh sach</b></a>
                  <div id="collapse1" class="panel-collapse collapse" style="background-color:#d9faff">
                      <a href="">Bài viết của tôi</a><br>
                      <a href="">Bài viết tôi theo dõi</a><br>
                      <a href=""></a><br>
                  </div>
              </div>

          </li>

    </ul>
</div>
</div>

<!--   het menu -->

<div id="app">
 <main class="mt-4">
  <div class="container-fluid" style="min-height: 600px">
      @yield('content')
  </div>
</main>

</div>
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container  text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Người thực hiện:</h5>

        <ul class="list-unstyled">
          <li>
           <h5>Nguyễn Văn Hoàng 1521050212</h5>
          </li>
          <li>
             <h5>Hà Thọ Đức  15210501756</h5>
          </li>

        </ul>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Chi tiết liên hệ</h5>

        <ul class="list-unstyled">
          <li>
          <p><i class="far fa-clock"></i>&nbsp 8:00AM - 17:00 PM</p>
          </li>
          <li>
          <p><i class="fas fa-phone-volume"></i>0582625538</p>
          </li>

           <p><i class="fas fa-tty"></i></p>
        </ul>

      </div>
      <!-- Grid column -->



      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Liên hệ</h5>

        <ul class="list-unstyled">
          <li>
            <h5><i class="fab fa-facebook-square"></i>&nbspFacebook</h5>
          </li>
          <li>
         <h5><i class="fab fa-instagram"></i>&nbspInstagram</h5>
          </li>
          <li>
           <h5><i class="fab fa-twitter-square"></i>&nbspTwitter</h5>
          </li>
          <li>
           <h5><i class="fab fa-skype"></i>&nbspSky</h5>
          </li>
        </ul>

      </div>
      <!-- Grid column -->



      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Địa chỉ</h5>

        <ul class="list-unstyled">
          <li>

           <h5>Cơ sở 1: &nbspĐông Anh-Hà Nội</h5>
          </li>
          <li>
            <h5>Cơ sở 2: &nbspAn Châu-Hải Dương</h5>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
    <!-- Grid row-->


    </div>

    <!-- Grid row-->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="fb.com/mrh2510">HOÀNG & ĐỨC</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>