<?php
/*
Template Name: Company
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>bizMedia - 最新ITを身近に</title>
    <meta name="description" content="最新ITを身近に">
    <meta name="keywords" content="海外, IT, トレンド, 情報, さきどり, Fintech, 人工知能, AI, AR, VR, 武田勝輝">
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/biz_fav-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/biz_fav-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/biz_fav-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/biz_fav-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45959800-8"></script>
</head>
<body>
    <script>
        $(window).on('load',function(){
            // fade-in
            $(window).scroll(function (){
                $('.fade-in').each(function(){
                    var POS = $(this).offset().top;  //fade-inがついている要素の位置
                    var scroll = $(window).scrollTop();  //スクロール一
                    var windowHeight = $(window).height();  //ウィンドウの高さ

                    if (scroll > POS - windowHeight + windowHeight*2/5){
                        $(this).css("opacity","1" );
                    } else {
                        $(this).css("opacity","0" );
                    }
                });
            });
        });

        $(function(){
            $('').click(function() {
                var speed = 400;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var headerHeight = 50; //固定ヘッダーの高さ
                var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                return false;
            });
        });

        var click_count = 0;    // クリック数の初期化
        function menu_click(){
            if( click_count % 2 == 0 ){
                $('#menu').css('display','block');
                $('#menu li').css('display','block');
                $('#menu').css('background-color','rgba(0,0,0,0.9)');
                $('#menu').css('padding','20px');
                $('#menu ul li').css('text-align','center');
                $('#menu').css('width','100%');
                document.getElementById("bbtn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-times fa-lg"></i></a>';
            }else{
                $('#menu').css('display','none');
                document.getElementById("bbtn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a>';

//                 var $win = $(window);

// $win.on('load resize', function() {
//   var windowWidth = $win.width();

//   if (windowWidth > 1024) {
//     // PCの処理
//   } else if (windowWidth > 768) {
//     // TABの処理
//   } else {
//     // SPの処理
//   }
// });
            }
            click_count++;
        }
    </script>
        <div id="wrapper">
            <!-- Header -->
            <div id="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia">
                <img src="<?php bloginfo('template_directory'); ?>/images/company.png"> </a>
                <span id="bbtn"><a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a></span>
                <span id="menu">
                    <ul>
                        <li class="bnavi"><a href="#mission">MISSION</a></li>
                        <li class="bnavi"><a href="#vision">VISION</a></li>
                        <li class="bnavi"><a href="#business">BUSINESS</a></li>
                        <li class="bnavi"><a href="#contact">CONTACT</a></li>
                    </ul>
                </span><!-- #menu -->
            </div>      
            <!-- /#header -->
            <style type="text/css">
                div.mywpp li {
                    display: inline-block;
                    vertical-align: top;
                    width: 9em;
                    margin-right: 5px;
                    font-size: 13px;
                    line-height: 1em;
                }
            </style>
<!-- Contents -->             
            <div id="frame-contents">
                <div id="mission" class="fade-in">
                    <h4>MISSION</h4>
                    <div class="phrase-form">
                        <span><h5>ITを通じて社会に貢献する</h5>
                        日々進化していくITを手を動かしながら検証し、
                        毎日の生活の問題・課題を改善するソリューションを自ら作りだすことがミッションです。
                        長年の研究開発で培った技術力を軸に展開する様々な事業で、
                        ユーザーからのフィードバックを大切にしながら本当に必要とされるプロダクトを提供していきます。</span>
                    </div>
                </div>
                <div id="vision" class="fade-in">
                    <h4>VISION</h4>
                    <div class="phrase-form">
                        <span><h5>最先端のITを活用できるプラットフォームを提供する</h5>
                        最新のITを使うことにより今までになかった新しい世界を創ることができます。
                        我々は世界に目を向けながら最先端のITの研究開発・ソリューション開発を実施し、
                        その成果を人々が容易に活用できる環境・プラットフォームを提供していきます。
                        そして、日常生活や社会の問題・課題解決を目指します。bizMediaの思いはそこにあります。</span>
                    </div>
                </div>
                <div id="business" class="fade-in">
                    <h4>BUSINESS</h4>
                    <div class="phrase-form">
                        <span><h5>3つの重点事業</h5>
                        bizMediaでは、①モバイル/Webアプリ開発、②メディア運営、③プログラミング教育の3つの事業を軸に活動しています。</br>
                        ①モバイル/Webアプリ開発では、AIやAR/VRを組み込んだ業務アプリや2D/3Dゲームアプリをメインで開発しています。</br>
                        ②メディア運営では、<a href="http://techbird.site" target="_blank">TECHBIRD</a>というメディアにて海外ITトレンドを発信しています。</br>
                        ③プログラミング教育では、Swift, JavaScript, PHP, Java, Pythonを中心に教えています。</span>
                    </div>
                </div>
                
                <div id="contact" class="fade-in">
                    <h4>CONTACT</h4>
                        <?php echo do_shortcode('[contact-form-7 id="256" title="contact"]'); ?>
                </div>
            </div><!-- /#contents -->
            <!-- Footer -->             
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/company.png"> </a>
                </div>
            </div><!-- /#footer -->
        </div><!-- /#wrapper -->

<?php wp_footer(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b58a0fda9fc44fd"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-45959800-8');
        $(function(){
            var topBtn=$('#pageTop');
            topBtn.hide();
            //◇ボタンの表示設定
            $(window).scroll(function(){
            if($(this).scrollTop()>100){
                //---- 画面を100pxスクロールしたら、ボタンを表示する
                topBtn.fadeIn();
            }else{
                //---- 画面が100pxより上なら、ボタンを表示しない
                topBtn.fadeOut();
            } 
            });
            // ◇ボタンをクリックしたら、スクロールして上に戻る
            topBtn.click(function(){
                $('body,html').animate({
                scrollTop: 0},500);
                return false;
            });
        });
    </script>
</body>
</html>