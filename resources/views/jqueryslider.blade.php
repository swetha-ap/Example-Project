<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
        img{
            float:left;
            height: 100%;;
            width: 100%;
            object-fit:cover;
        }
        ul,li{
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>
<body>
    <ul id="lightSlider" class="gallery">
        <li data-thumb="{{ asset ('images/flower.jpg') }}">
            <a href="#"><img src="{{ asset ('images/flower.jpg') }}" alt=""></a>
        </li>
        <li data-thumb="{{ asset ('images/flower.jpg') }}">
            <a href="#"><img src="{{ asset ('images/flower.jpg') }}" alt=""></a>
        </li>
        <li data-thumb="{{ asset ('images/jerry.jpg') }}">
            <a href="#"><img src="{{ asset ('images/jerry.jpg') }}" alt=""></a>
        </li>
    </ul>
    <script>
        $().ready(function(){
            $('#lightSlider').lightSlider({
                item:1,
                slideMove:1,
                slideMargin:10,
                // type of transition slide or fade
                mode:"slide",
                // if true then it will use css transitions
                useCSS:true,
                // transition time in ms
                speed:2000,
                // if true slider will automatically play
                auto:true,
                // time pause btw each transition
                pause:4500,
                loop:true, //to loop back to first element when on last
                controls:true,
                keyPress:true, //to enable keyboard
                pager:true, //enable pager option
                gallery:true, //enable gallery mode
                thumbMargin:3, //space bte each thumbnails
                currentPagerPosition:'middle', //right middle or left
                enableDrag:true,
                swipeThreshold:40, //to set how far user must swipe for next/prev slide
                responsive:[],
                onBeforeStart:function($el){},
                onSliderLoad:function($el){},
                onBeforeSlide:function($el,scene){},
                onAfterSlide:function($el,scene){},
                onBeforeNextSlide:function($el,scene){},
                onAfterNextSlide:function($el,scene){}
            })
        })
    </script>
</body>
</html>