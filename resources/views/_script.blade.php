<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){  

// モーダルウィンドウが開くときの処理    
$(".modalOpen").click(function(){
        
    var navClass = $(this).attr("class"),
        href = $(this).attr("href");
            
        $(href).fadeIn();
    $(this).addClass("open");
    return false;
});

// モーダルウィンドウが閉じるときの処理    
$(".modalClose").click(function(){
    $(this).parents(".modal").fadeOut();
    $(".modalOpen").removeClass("open");
    return false;
});  
});
</script>