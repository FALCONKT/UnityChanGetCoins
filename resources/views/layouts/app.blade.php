<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Unityちゃんと不思議な小判</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!--Animate CDN-->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    </head>

    <body>

    <header>
        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')

        </div>

        @include('commons.footer')
    </header>

    

        {{--JQ--}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

        {{--SlideShow Jqueryの後で読み込む--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
        <!--$(window).load(function(){}　V2迄-->
        $(window).on('load',function(){
        
          $("#list_img img").click(function(){
            var img_src = $(this).attr("src");
            $("#display_img img").attr("src", img_src);
          });
        });
        </script>


        {{--TOPへ戻るButton--}}
        <script>
        $(document).ready(function() {
          var pagetop = $('#pagetop');
            
            $(window).scroll(function () {
              if ($(this).scrollTop() > 800) {
                    pagetop.fadeIn();
               } else {
                    pagetop.fadeOut();
                    }
               });
               pagetop.click(function () {
                   $('body, html').animate({ scrollTop: 0 }, 500);
                      return false;
           });
           
        });
        {{--pagetop 変数定義　→　if文　で表示非表示　Click Event すればMethod実行--}}
        </script>
        
        {{--PageSmoothScrall--}}
        <script>
        $(function(){
           // #で始まるアンカーをクリックした場合に処理
           $('a[href^=#]').click(function() {
              // スクロールの速度
              var speed = 400; // ミリ秒
              // アンカーの値取得
              var href= $(this).attr("href");
              // 移動先を取得
              var target = $(href == "#" || href == "" ? 'html' : href);
              // 移動先を数値で取得
              var position = target.offset().top;
              // スムーススクロール
              $('body,html').animate({scrollTop:position}, speed, 'swing');
              return false;
           });
        });
        </script>
    
    </body>
</html>