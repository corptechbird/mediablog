<?php
/*
Template Name: Company
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>bizMedia - 最新ITを身近な存在に</title>
    <meta name="description" content="海外ITトレンド情報をさきどり">
    <meta name="keywords" content="海外, IT, トレンド, 情報, さきどり, Fintech, 人工知能, AI, AR, VR, 武田勝輝">
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.min.css">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/vendors/easings.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/vendors/scrolloverflow.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45959800-8"></script>
</head>
<body>
    <script>
        var click_count = 0;    // クリック数の初期化
 
 // １回目押されたときはメニュー表示、２回目押されたときは非表示としているだけのJavaScript
 function menu_click(){
     if( click_count % 2 == 0 ){
         $('#menu').css('display','block');
     }else{
         $('#menu').css('display','none');
     }
     click_count++;
 }
    </script>
    <div id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
        <div id="wrapper">
            <!-- Header -->       
            <div id="header">
            
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia">
                <img src="<?php bloginfo('template_directory'); ?>/images/bizmedia.png"> </a>
                <span id="navi">
                <span id="btn"><a href="javascript:menu_click();">MENU</a></span>
                <span id="menu">
                    <ul>
                        <li class="navi"><?php get_search_form(); ?></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pickup">Pick up</a></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/ranking">Ranking</a></li>
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
                    <div class="section">Some section</div>  
                    <div class="section">Some section</div>  
                    <div class="section">Some section</div>  
                    <div class="section">Some section</div>  
                </div>  
            </div><!-- /#contents -->
            <!-- Footer -->             
            <div id="footer">
                <div class="footer-image">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                </div>
                <div class="footer-text">
                    <p class="footer-category">Category</p>
                    <ul><?php wp_list_categories('title_li=&sort_column=name&hide_empty=1&hierarchical=1&style=list'); ?></ul>
                </div>
                <div class="footer-copy">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.
                </div>
            </div><!-- /#footer -->
        </div><!-- /#wrapper -->
    </div><!-- /#page --> 
<?php wp_footer(); ?>
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