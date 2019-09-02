<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  


    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <!--google font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">

        @include('._script')

        <title>AmaArbaro @yield('title')</title>
    </head>
    <body>
        <header>
        <div class="header">
           <!--ヘッダー左側部分-->
           <div class="header-left">
               <img src="{{ asset('/img/logo.png')}}" class="ticon">
               <div class="name">Ama Arbaro</div>
               <div class="zero">Make donations/contributions<br>with ZERO price</div>
            </div>
            <!--ヘッダー右側部分-->
            <div class="header-right">
            <a href="http://twitter.com/share?url="><img src="{{ asset('/img/logo_twitter.png')}}" id="icon" class="twitter_button" ontouchstart=""></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u="><img src="{{ asset('/img/logo_facebook.png')}}" id="icon" class="facebook_button" ontouchstart=""></a>
            <a href="{{url('/instagram/')}}"><img src="{{ asset('/img/logo_instagram.png')}}" id="icon"  class="instagram_button" ontouchstart=""></a>
                <div class="about">About us</div>
                <!-- モーダルウィンドウを開くボタン -->
                <div><a href="#modal01" class="modalOpen">My page</a></div>
                 <!-- モーダルウィンドウ -->
                <div class="modal" id="modal01">

                <!-- モーダルウィンドウが開いている時のオーバーレイ -->
                <div class="overLay modalClose"></div>

                <!-- モーダルウィンドウの中身 -->
                <div class="inner">モーダルウィンドウ
                <a href="" class="modalClose">Close</a>
                </div> 
             </div>
                <div class="log">Logout</div>
            </div>
        </div> 
    </header>
        <main>
            @yield('content')
        </main>

        <footer>
        <div class="footer">
         <p class="terms"><a href="">Terms of use</a></p>
          <p class="policy"><a href="">Privacy policy</a></p>
         <p class="ama">(c) 2019  Ama Arbaro</p>
        </div> 
    </footer> 
    </body>
</html>