<?php
/*
Template Name: Company
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>bizMedia - Contribute to society by the latest IT</title>
    <meta name="description" content="Contribute to society by the latest IT">
    <meta name="keywords" content="Reference, Programming, Coding, Sample, Example, Tutorial, Download, Beginner, Entrance, Study">
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

        var addthis_config = addthis_config||{};
        addthis_config.data_track_addressbar = false;
        addthis_config.data_track_clickback = false;

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
                $('#menu').css({
                    "display":"block",
                    "background-color":"rgba(0,0,0,0.9)",
                    "padding":"20px",
                    "width":"100%"
                });
                $('#menu li').css('display','block');
                $('#menu ul li').css('text-align','center');
                document.getElementById("bbtn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-times fa-lg"></i></a>';
            }else{
                $('#menu').css('display','none');
                document.getElementById("bbtn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a>';

                var $win = $(window);
                $win.on('load resize', function() {
                    var windowWidth = $win.width();
                    if (windowWidth >= 1000) {
                        // PCの処理
                        $('#btn').css({
                            "display":"none",
                            "float":"right"
                        });
                        $('#bbtn').css({
                            "display":"none",
                            "float":"right"
                        });
                        $('#menu').css({
                            "display":"inline",
                            "float":"right",
                            "background-color":"white"
                        });
                        $('#menu li').css('display','inline-block');
                    } else if (windowWidth < 1000) {
                        $('#btn').css({
                            "display":"block",
                            "float":"left",
                            "padding":"15px"
                        });
                        $('#bbtn').css({
                            "display":"block",
                            "float":"left",
                            "padding":"15px"
                        });
                        $('#menu').css({
                            "display":"none",
                            "float":"right",
                            "width":"auto",
                            "padding":"0"
                        });
                        // TABの処理
                    } else {
                        // SPの処理
                    }
                });
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
                        <span><h5>Contribute to society through IT</h5>
                        We have mission to create solutions to improve problems of daily living.
                        In various projects that develop based on the technical strength cultivated through years of research and development,
                        we will provide products that are truly needed while treating users feedback.</span>
                    </div>
                </div>
                <div id="vision" class="fade-in">
                    <h4>VISION</h4>
                    <div class="phrase-form">
                        <span><h5>Provide a platform that can utilize state-of-the-art IT</h5>
                        By using the latest IT you can create a new world you have never had before.
                        We will focus on the world and conduct cutting-edge R&D and solution development,
                        We will provide environments and platforms that people can easily utilize its results,
                        and we aim to solve problems and problems of daily life and society. bizMedia's mind is there.</span>
                    </div>
                </div>
                <div id="business" class="fade-in">
                    <h4>BUSINESS</h4>
                    <div class="phrase-form">
                        <span><h5>3 key businesses</h5>
                        In bizMedia, we are working around three projects: ① mobile / Web application development, ③ media management, and (3) programming education.</br>
                        ① In mobile / web application development, we mainly develop business applications incorporating AI and AR / VR and 2D / 3D game applications.</br>
                        ② In media management, we provide effective references about programming languages on <a href="http://techbird.site" target="_blank"> TECHBIRD </a>.</br>
                        ③ In programming education, we mainly teach Swift, JavaScript, PHP, Java, Python.</span>
                    </div>
                </div>
                
                <div id="contact" class="fade-in">
                    <h4>CONTACT</h4>
                        <?php echo do_shortcode('[contact-form-7 id="257" title="contact"]'); ?>
                </div>
            </div><!-- /#contents -->
            <!-- Footer -->             
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia">
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