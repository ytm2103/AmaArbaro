

        @extends('layout')

        @section('title')
     <!-- モーダルウィンドウを開くボタン -->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
     @section('content')
       <div id="demoslide01" class="main_visual bg_aaa">
       <a data-target="modal1" class="modal_open"> <img class="tree" src="{{ asset('/img/tree_color.png')}}"></a>
        </div>

       
        <!-- モーダル1 -->
        <div id="modal1" class="modal_box">
                <div class="overLay modalClose"> </div> 
                        <h2 id="make">Make your donations?</h2>
                        <div class="link_area">
                    <a href="" class="modalClose">×</a><!--デフォルトなどでリセットで消すか、単純に消すか。aタグ使うのやめるか-->
                <div class="list">
                    <div class="modal_link"><a href="https://www.youtube.com/" class="button02">$0</a></div><!--画面遷移されるのならaタグの方がいいか-->
                    <div class="modal_link"><a data-target="modal2" class="modal_switch"><span>$1</span></a></div>
                    <div class="modal_link"><a data-target="modal2" class="modal_switch"><span>$5</span></a></div>
                    <div class="modal_link"><a data-target="modal2" class="modal_switch"><span>$10</span></a></div>
                    <div class="modal_link"><a data-target="modal2" class="modal_switch"><span>$50</span></a></div>
                    <div class="modal_link"><a data-target="modal2" class="modal_switch"><span>$100</span></a></div>
                </div>   
                <a href="http://localhost:8000/login" id="log" >Log in your account.></a>
           
         </div>
    </div>
     
    <!-- モーダル2 -->
    <div id="modal2" class="modal_box" >
         <div class="overLay modalClose"> </div> 
            
            <div class="link_area">
                
                    <h2>決済画面（仮）</h2>
                    <a href="" class="modalClose">×</a>
                <div>google pay</div>
                
            </div>
            
            </div>

    </body>
    @endsection
   
</html>
