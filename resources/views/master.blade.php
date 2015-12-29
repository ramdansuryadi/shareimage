<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="@9gag" />
    <meta name="twitter:image" content="http://images-cdn.9gag.com/photo/aQ8PKne_700b_v1.jpg" />
    <title>Badge-Composer - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/fabric.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/bootstrap.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/script.js')}}" charset="utf-8"></script>
    <script type="text/javascript">
    var BASE_URL = "{{URL::to('/')}}";
    </script>
</head>
<body>


    <div id="fb-root"></div>
    <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}"  />
 <div class="wrapper">

      @yield('content')

  </div> <!-- end wrapper-->

  <script type="text/javascript">
  $('.carousel').carousel({
      interval: false
  });
  </script>
  <script src="{{asset('js/shareimage.js')}}" charset="utf-8"></script>
</div> <!-- end bandage -->

</body>

</html>
