@extends('layout')
  
 <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
 <script defer src="{{ asset('/js/news.js') }}"></script>

 @section('content')
 
    <h1 class="news_title">Make <span class="orange">donate</span> with <span class="orange">ZERO</span> price</h1>

    <div class="news_subtitle">We believe Love can be the only way to save the world.<br>
    If you want to save the earth without money.<br>
    If you sympathize with someone or something <br>when you see a miserable news, you want help them.<br>
    Just <span class="red">share</span> your feelings or news.<br>
    Just do it whatever you can do right now!</div>

    <div class="container timeline_section">
        <div class="box">
            @foreach ($news as $value)
            <ul>
                <li class="boxa">
                    <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500"  data-link-color="#37654E" href="{{ $value->url }}?ref_src=twsrc%5Etfw">Tweets by {{ $value->title }}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </li>
            </ul>
            @endforeach
        </div>
    </div> 

    {{-- <div class="container timeline_section">
        <div class="box">
            @foreach ($news as $value)
                <div class="boxa">
                    <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500"  data-link-color="#37654E" href="{{ $value->url }}">{{ $value->title }}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            @endforeach
        </div>
    </div>  --}}

{{--     
    <div class="container timeline_section">
        <div class="item">
            <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500"  data-link-color="#37654E" href="https://twitter.com/WWF?ref_src=twsrc%5Etfw">Tweets by WWF</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500" data-link-color="#37654E" href="https://twitter.com/NatGeo?ref_src=twsrc%5Etfw">Tweets by NatGeo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500" data-link-color="#37654E" href="https://twitter.com/Greenpeace?ref_src=twsrc%5Etfw">Tweets by Greenpeace</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div> 
    </div> 
    
    <div class="container card_section">
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">Malaysia complains to Indonesia demanding action over forest fires <a href="https://t.co/BrfOV0HQ8f">https://t.co/BrfOV0HQ8f</a></p>&mdash; Guardian Environment (@guardianeco) <a href="https://twitter.com/guardianeco/status/1170001980862816256?ref_src=twsrc%5Etfw">September 6, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">Fresh water straight from the river, to the nurseries where millions of trees will be nourished until they are planted! <a href="https://twitter.com/hashtag/EdenProjects?src=hash&amp;ref_src=twsrc%5Etfw">#EdenProjects</a> <a href="https://twitter.com/hashtag/PlantTrees?src=hash&amp;ref_src=twsrc%5Etfw">#PlantTrees</a> <a href="https://twitter.com/hashtag/SaveLives?src=hash&amp;ref_src=twsrc%5Etfw">#SaveLives</a> <a href="https://t.co/ZPfkqPoQ68">pic.twitter.com/ZPfkqPoQ68</a></p>&mdash; Eden Reforestation Projects (@eden_reforest) <a href="https://twitter.com/eden_reforest/status/1172306419195863042?ref_src=twsrc%5Etfw">September 13, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">Can you believe this BEFORE &amp; AFTER transformation after just ten months of forest gardening??<br><br>We&#39;ll have the full report from our drone visit to Senegal soon - stay tuned. 🌳 <a href="https://twitter.com/hashtag/drones?src=hash&amp;ref_src=twsrc%5Etfw">#drones</a> <a href="https://twitter.com/hashtag/forestgarde?src=hash&amp;ref_src=twsrc%5Etfw">#forestgarde</a> <a href="https://twitter.com/hashtag/sustainableagriculture?src=hash&amp;ref_src=twsrc%5Etfw">#sustainableagriculture</a> <a href="https://t.co/1nddnk2nDz">pic.twitter.com/1nddnk2nDz</a></p>&mdash; Trees for the Future (@Treesftf) <a href="https://twitter.com/Treesftf/status/1155877148613337089?ref_src=twsrc%5Etfw">July 29, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>

    <div class="container card_section">
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">WHOAH! <a href="https://twitter.com/Timberland?ref_src=twsrc%5Etfw">@Timberland</a> commits to plant 50 million trees over next five years. And we are helping! <a href="https://twitter.com/hashtag/NatureNeedsHeroes?src=hash&amp;ref_src=twsrc%5Etfw">#NatureNeedsHeroes</a> <a href="https://t.co/3FwrN6dsEB">https://t.co/3FwrN6dsEB</a></p>&mdash; American Forests (@AmericanForests) <a href="https://twitter.com/AmericanForests/status/1172186896384057344?ref_src=twsrc%5Etfw">September 12, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">We have so much to lose with the <a href="https://twitter.com/hashtag/Amazon?src=hash&amp;ref_src=twsrc%5Etfw">#Amazon</a> burning 🐆🌳💧 and yet not enough action is being taken to stop its destruction!😱 It is crucial that we urgently agree to a <a href="https://twitter.com/hashtag/NewDealForNature?src=hash&amp;ref_src=twsrc%5Etfw">#NewDealForNature</a> and People, so moments like these won&#39;t go unnoticed - and unanswered. RT to spread the word! <a href="https://t.co/DwNPQ0lxwG">pic.twitter.com/DwNPQ0lxwG</a></p>&mdash; WWF 🐼 (@WWF) <a href="https://twitter.com/WWF/status/1164488198246023168?ref_src=twsrc%5Etfw">August 22, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="item">
            <blockquote class="twitter-tweet" data-theme="light" data-width="400" data-link-color="#37654E"><p lang="en" dir="ltr">This is a <a href="https://twitter.com/hashtag/climatecrisis?src=hash&amp;ref_src=twsrc%5Etfw">#climatecrisis</a>. Companies cannot stand by as the Amazon is being destroyed. Tell fast-food giants to take a stand against Bolsonaro’s destructive agenda: <a href="https://t.co/MhwzGKlaai">https://t.co/MhwzGKlaai</a><a href="https://twitter.com/hashtag/savetheamazon?src=hash&amp;ref_src=twsrc%5Etfw">#savetheamazon</a> <a href="https://twitter.com/hashtag/forestsarelife?src=hash&amp;ref_src=twsrc%5Etfw">#forestsarelife</a> <a href="https://t.co/oocOyeFLnA">pic.twitter.com/oocOyeFLnA</a></p>&mdash; Greenpeace (@Greenpeace) <a href="https://twitter.com/Greenpeace/status/1169686802090909696?ref_src=twsrc%5Etfw">September 5, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div> --}}

@endsection