<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TECHBIRD - 海外ITトレンドをさきどり</title>
    <meta name="description" content="海外ITトレンドをさきどり">
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
                $('#menu').css({
                    "display":"block",
                    "background-color":"rgba(0,0,0,0.9)",
                    "padding":"20px",
                    "width":"100%"
                });
                $('#menu li').css('display','block');
                $('#menu ul li').css('text-align','center');
                document.getElementById("btn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-times fa-lg"></i></a>';
            }else{
                $('#menu').css('display','none');
                document.getElementById("btn").innerHTML='<a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a>';

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
                            "width":"639px",
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
    <div id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
        <div id="wrapper">
            <!-- Header -->       
            <div id="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                <span id="btn"><a href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a></span>
                <span id="menu">
                    <ul>
                        <li class="naviv"><?php get_search_form(); ?></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pickup">Pick up</a></li>
                        <li class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/ranking">Ranking</a></li>
                    </ul>
                </span><!-- #menu -->
            </div><!-- /#header -->