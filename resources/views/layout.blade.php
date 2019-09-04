<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
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
            
             <div>
                @if (Route::has('login'))
                    <div class="menu">
                        @auth
                            <a href="{{ url('/home') }}">My page</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Sign up</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </div>
        </div> 
    </header>
        <main>
            @yield('content')
        </main>

    <footer>
        <div class="footer">
         <a id="foot" href="">Terms of use</a>
         <a id="foot" href="">Privacy policy</a>
         <p id="foot" class="ama">(c) 2019  Ama Arbaro</p>
        </div> 
    </footer> 
    </body>
</html>