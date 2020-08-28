<!doctype html>
@if(Session::has('lang'))
@if(Session::get('lang') == 'en')
<html lang="en" dir="ltr">
@else
<html lang="ar" dir="rtl">
@endif
@else
<html lang="en" dir="ltr">
@endif
<head>
  {{ App::setLocale(Session::get('lang')) }}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('/assets/logo.png') }}" type="image/gif" sizes="16x16">

  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <title>Online Shopping</title>

  <!-- Scripts -->

  <!-- Bootstrap core JavaScript-->
  

  <!-- Custom scripts for all pages-->
  

  <!-- Page level plugins -->
  

  <!-- Page level custom scripts -->

  <script src="{{ url('vendor/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ url('js/sb-admin-2.min.js') }}" defer></script>
  <script src="{{ url('js/jquery.js') }}" defer></script>
  <script src="{{ url('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Styles -->
  <link href="{{ url('css/app.css') }}" rel="stylesheet">
  <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body style="background: #566786b8">
  <div id="app">
   
    </div>
    <!---->
    <main class="">
      @yield('content')
    </main>
</body>
</html>
