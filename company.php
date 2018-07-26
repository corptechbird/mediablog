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
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45959800-8"></script>
</head>
<body>
    <script>
        var click_count = 0;    // クリック数の初期化
        function menu_click(){
            if( click_count % 2 == 0 ){
                $('#menu').css('display','block');
                $('#menu li').css('display','block');
                $('#menu').css('background-color','rgba(0,0,0,0.9)');
                $('#menu').css('padding','20px');
                $('#menu ul li').css('text-align','center');
                $('#menu').css('width','100%');
                document.getElementById("btn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-times fa-lg"></i></a>';
            }else{
                $('#menu').css('display','none');
                document.getElementById("btn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a>';

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
    <div id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
        <div id="wrapper">
            <!-- Header -->       
            <div id="header">
            
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia">
                <img src="<?php bloginfo('template_directory'); ?>/images/company.png"> </a>
                <span id="navi">
                <span id="btn"><a href="javascript:menu_click();">MENU</a></span>
                <span id="menu">
                    <ul>
                        <li class="navi"><a href="#mission">MISSION</a></li>
                        <li class="navi"><a href="#vision">VISION</a></li>
                        <li class="navi"><a href="#business">BUSINESS</a></li>
                        <li class="navi"><a href="#contact">CONTACT</a></li>
                        <li class="close"><a href="javascript:menu_click();">×</a></li>
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
            <div id="contents">
                <div id="fullpage">  
                    <div id="mission">
                        <p>MISSION</p>
                        <p>Webマーケティングを世界一簡単にする</p>
                        <p>手を動かしながら自分たちで良いものを作り出していくことがミッションです。ベーシック独自のWebマーケティング力を軸に展開する様々な事業で、社会のあらゆるものを問題解決することがベーシックのミッションです。</p>
                    </div>
                    <div id="vision">
                        <p>VISION</p>
                        <p>Webマーケティングをもっと身近に</p>
                        <p>世の中をもっとクリエイティブに</p>
                        <p>より多くの人にWebマーケティングが広まれば、社会はもっとクリエイティブになる。私たちのビジョンである「Webマーケティングの大衆化」を実現することで、社会の問題解決を目指す。それがベーシックです。</p>
                    </div>
                    <div id="business">
                        <p>BUSINESS</p>
                    </div>
                    モバイル/Webアプリ開発

                    メディア運営

                    プログラミング教育
                    <div id="contact">
                        <p>CONTACT</p>
                    <!-- [contact-form-7 id="248" title="コンタクトフォーム 1"] -->
                    </div>
                </div>  
            </div><!-- /#contents -->
            <!-- Footer -->             
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                </div>
                <div class="text">
                    <p class="category">Category</p>
                    <ul><?php wp_list_categories('title_li=&sort_column=name&hide_empty=1&hierarchical=1&style=list'); ?></ul>
                </div>
                <div class="copy">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.
                </div>
            </div><!-- /#footer -->
        </div><!-- /#wrapper -->
    </div><!-- /#pageTop --> 
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