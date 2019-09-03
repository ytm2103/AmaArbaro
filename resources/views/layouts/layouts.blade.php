<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- {{ app()->getLocale() }} -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
   <!--google font-->
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <title>
        @section('title')
        @show
        : bnote
    </title>
</head>
<body>
    <header>
    
        <div class="header">
           <!--ヘッダー左側部分-->
           <div class="header-left">
               <img src="{{ asset('/images/logo.png')}}" class="ticon">
               <div class="name">Ama Arbaro</div>
               <div class="zero">Make donations/contributions<br>with ZERO price</div>
            </div>
            <!--ヘッダー右側部分-->
            <div class="header-right">
            <a href="http://twitter.com/share?url="><img src="{{ asset('/images/logo_twitter.png')}}" id="icon" class="twitter_button" ontouchstart=""></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u="><img src="{{ asset('/images/logo_facebook.png')}}" id="icon" class="facebook_button" ontouchstart=""></a>
            <a href="{{url('/instagram/')}}"><img src="{{ asset('/images/logo_instagram.png')}}" id="icon"  class="instagram_button" ontouchstart=""></a>
                <div class="about">About us</div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
     <div class="footer">
      <p class="terms"><a href="">Terms of use</a></p>
      <p class="policy"><a href="">Privacy policy</a></p>
      <p class="ama">(c) 2019  Ama Arbaro</p>
     </div> 
    </footer>
</body>
</html>