

        @extends('layout')

        @section('title')
     <!-- モーダルウィンドウを開くボタン -->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
     @section('content')
       <div><a href="#modal00" class="modalOpen"  class="container">
            <input class="tree" type="image" src="{{ asset('/img/tree_color.png')}}"  alt="送信する" >
        </a></div>

        <!-- モーダルウィンドウ -->
        <div class="modal" id="modal00">

            <!-- モーダルウィンドウが開いている時のオーバーレイ -->
            <div class="overLay modalClose"></div>

            <!-- モーダルウィンドウの中身 -->
            <div class="inner">
                <div class="titile">Donate</div>
                <a href="" class="modalClose">×</a><!--デフォルトなどでリセットで消すか、単純に消すか。aタグ使うのやめるか-->
                <a href="" class="button02">$0</a><!--画面遷移されるのならaタグの方がいいか-->
                <a href="" class="button02">$10</a>
                <a href="" class="button02">$20</a>
                <a href="" class="button02">$50</a>
                <a href="" class="button02">$100</a>
                <a href="" class="button02">Optional</a>
            </div>
        </div>
    </body>
    @endsection
   
</html>
