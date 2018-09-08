<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(is_home()): //トップページ ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_page()): //固定ページ ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_single()): //シングルページ ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_category()): //カテゴリ一覧ページ ?><?php single_cat_title() ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_month()): //月別ページ ?><?php the_time("Y年m月") ?>の記事一覧 ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_year()): //年別ページ ?><?php the_time("Y年") ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_search())://検索結果ページ ?>検索結果 ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php else: //それ以外のページ ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php endif; ?></title>
    <meta name="description" content="「プログラミングを独学ではじめるならTECHBIRD」をコンセプトに、様々なプログラミング言語を解説しています。武田勝輝">
    <meta name="keywords" content="武田勝輝, 逆引き, 独学, 入門, プログラミング">
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125050500-1"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-2330122305834701",
        enable_page_level_ads: true
    });
    </script>
</head>
<body>
    <script>

        var addthis_config = addthis_config||{};
        addthis_config.data_track_addressbar = false;
        addthis_config.data_track_clickback = false;

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
    <div id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
        <div id="wrapper">
        <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
            <button data-remodal-action="close" class="remodal-close"></button>
                <?php get_search_form(); ?>
            </div>
            <!-- Header -->       
            <div id="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                <span id="btn"><a data-remodal-target="modal" href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a></span>
                <span id="menu">
                    <ul>
                        <li class="naviv"><?php get_search_form(); ?></li>
                    </ul>
                </span><!-- #menu -->
            </div><!-- /#header -->