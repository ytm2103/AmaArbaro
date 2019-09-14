@extends('layouts.default')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    @section('content')
  <main>
            <!--
        ララベル の使い方
        $ mkdir フォルダ名　でフォルダを作り
        $ cd フォルダ名　で移動
        $ composer create-project laravel/laravel フォルダ名 "5.5.*"　でララベル インストール
        $ cd フォルダ名で移動
        $ php artisan serve　でサーバの起動
        -->
<style type="text/css">
    .top{
       
        font-size: 12vw;
        width: 100%;
        height: 100%;
        padding:0%;
        display: flex;
        color:yellow;
        background-color: #37654E;
    }
    .title1 {
        color:#37654E;
        text-align:center;
    }
    .box-img0{
     
        object-fit: fill;
    }
    .box-img1{
        width: 50%;
        float:right;
    }
    .contents1{
        color:#37654E;
        text-align:center;
        margin: 20px; 
        padding: 20px;
    }
    .box-img2{
        width: 50%;
        float:left;
    }
    .contents{
        color:#37654E;
        text-align:center;
    }
    .box-img3{
        height: 600px;
        width: 100%;
        object-fit:contain;
    }
    .title{
        color:#37654E;
        text-align:center;
    }

    .container{
        width:400px;
    margin-right: auto;
    margin-left : auto;
    }

</style>

<script type="text/javascript">
</script>

  

    <h1 class="title1">About Us</h1>
    <img src="{{ asset('/img/mac.jpg')}}" class="box-img1"　alt="mac">
   
    <div class="contents1">
        私達は現在ITを学んでいる学生で構成されたグループです。<br>
        私達はまだ学生で、できることは少ないかもしれませんが、
        世界中のことを知れ、世界中の人と繋がれるインターネットを通じて地球のためになにかできないかと思い
        このアプリケーションを作りました。<br>
        そしてこの美しい地球を守るためになにかできないかと同じ思いをもつ同士のために
        このウェブサイトを運営しています。<br>
    </div>
    
    <img src="{{ asset('/img/tree.jpg')}}" class="box-img2" alt="森を守る" title="protectrre">
    <p class="contents">
        現在は森林を保護するためにNGO団体として活動しており、
        世界（）ヶ国で、募った寄付金により実際に木を植えています。<br>
        当初は５人で結成された小さなグループでしたが世界中に構成員を広げながら成長しています。<br>
    </p>
    
    <p class="contents"><img src="{{ asset('/img/sample.png')}}" alt="データ" title="graph" class="box-img3">
        現在森林の面積は（実際のデータ）減少しており、
        人類だけでなく生物が生きるために必要な貴重な資源が失われつつあります。<br>
        しかし、近年、環境問題がたくさん取り上げられているにも関わらず
        環境の破壊をやめようとしません。<br>
        なぜなら彼らは彼らの生活の水準をさげることを許さないからです。<br>
        ならばせめて木を植えて森林を増やしませんか？<br>
    </p>

    <p class="contents"><img src="sample.png" alt="木か実際の画像" title="tree" class="image">
        木は一本5000円（仮）で（どこ）に植えることができます。<br>
        1人で払うには高いと感じますか？支払い先や方法が難易度が高いと感じますか？<br>
        それならば私たちと一緒に木を植えませんか？<br>
        地球を救うのに難しすぎることなんてないはずです<br>
    </p>

    <h1 class="title">Vision</h1>
    <p class="contents">誰しもが当事者になり、問題を定義し、助け合い、行動し、実現できる社会を実現する</p>

    <h1 class="title">Mission</h1>
    <p class="contents">我々はゼロプライスポリシー（シェアページに飛ぶ。説明）を持っています。<br>
        誰しもが愛のある行動をすぐに、いつでも、シンプルに、拡散でき、実行できる環境を提供する
    </p>
    
    <h1 class="title">Our Works/History</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis doloribus mollitia animi qui error asperiores, accusantium, ipsam veniam eos beatae, veritatis maiores nostrum? Quisquam consequatur quam iusto tenetur minus ab.</p>

    <h1 class="title">あなたの意見は価値があります。/あなたの意見をシェア</h1>
    

    <div class="container"  >
        
<div class="row" >
    <h1>お問い合わせ</h1>
</div>
<div class="row">
    <form action="{{ route('confirm') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="InputEmail">メールアドレス</label>
        <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
        @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputSubject">件名</label>
        <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
        @if($errors->has('subject'))
            <p class="text-danger">{{ $errors->first('subject')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputMessage">メッセージ</label>
        <textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">
        {{ old('message') }}
        </textarea>
        @if($errors->has('message'))
            <p class="text-danger">{{ $errors->first('message')}}</p>
        @endif
    </div>
    @csrf
    <button type="submit" name="action" class="btn btn-primary" value="sent">送信する</button>
    </form>
</div>
</div>
  </main>
  @endsection