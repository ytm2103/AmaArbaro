<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
<script type="text/javascript">


$(function(){
   
   // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
   $('.modal_open').click(function(){
  
     // 黒い背景をbody内に追加
     $('body').append('<div class="modal_bg"></div>');
     $('.modal_bg').fadeIn();
     
  
     // data-targetの内容をIDにしてmodalに代入
     let modal = '#' + $(this).attr('data-target');
  
     // モーダルをウィンドウの中央に配置する
     function modalResize(){
         let w = $(window).width();
         let h = $(window).height();
  
         let x = (w - $(modal).outerWidth(true)) / 2;
         let y = (h - $(modal).outerHeight(true)) / 2;
  
         $(modal).css({'left': x + 'px','top': y + 'px'});
     }
  
     // modalResizeを実行
     modalResize();
  
     // modalをフェードインで表示
     $(modal).fadeIn();

          //modal_bgがクリックされたらmodal_box,modal_bgがフェードアウトされる
          $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
     

  
     // ウィンドウがリサイズされたらモーダルの位置を再計算する
     $(window).on('resize', function(){
         modalResize();
     });
  
     // .modal_switchを押すとモーダルを切り替える
     $('.modal_switch').click(function(){
  
       // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
       $(this).parents('.modal_box').fadeOut();
  
       // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
       let modal = '#' + $(this).attr('data-target');
  
       // モーダルをウィンドウの中央に配置する
       function modalResize(){
           let w = $(window).width();
           let h = $(window).height();
  
           let x = (w - $(modal).outerWidth(true)) / 2;
           let y = (h - $(modal).outerHeight(true)) / 2;
  
           $(modal).css({'left': x + 'px','top': y + 'px'});
       }
  
       // modalResizeを実行
       modalResize();
  
       $(modal).fadeIn();
  
       // ウィンドウがリサイズされたらモーダルの位置を再計算する
       $(window).on('resize', function(){
           modalResize();
       });
     });
   });
 });

</script>