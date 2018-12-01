<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
    <link rel="dns-prefetch" href="//tpc.googlesyndication.com">
    <link rel="dns-prefetch" href="//www.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(is_home()): ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_page()): //固定ページ ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_single()): //シングルページ ?><?php wp_title(''); ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_category()): //カテゴリ一覧ページ ?><?php single_cat_title() ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_month()): //月別ページ ?><?php the_time("Y年m月") ?> Article List ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_year()): //年別ページ ?><?php the_time("Y年") ?> ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php elseif(is_search())://検索結果ページ ?>Search Result ｜ <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php else: //それ以外のページ ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php endif; ?></title>
    <meta name="description" content="TECHBIRD explains various programming languages clearly to beginners.">
    <?php
        $post_type = get_post_type();
        $post_name = ""; 
        if ($post_type == 'python') {
            $post_name = "Python";
        } elseif ($post_type == 'python_cn') {
            $post_name = "Python";
        } elseif ($post_type == 'swift') {
            $post_name = "Swift";
        } elseif ($post_type == 'swift_cn') {
            $post_name = "Swift";
        } elseif ($post_type == 'datascience') {
            $post_name = "Data Science";
        } elseif ($post_type == 'datascience_cn') {
            $post_name = "Data Science";
        }
        if($post_type == 'python' || $post_type == 'python_cn' || $post_type == 'swift' || $post_type == 'swift_cn' || $post_type == 'datascience' || $post_type == 'datascience_cn' ){ ?>
        <meta name="keywords" content="<?php echo $post_name; ?>, Reference, Programming, Coding, Sample, Example, Tutorial, Download, Beginner, Entrance, Study">
        <?php
            } else { ?>
         <meta name="keywords" content="Reference, Programming, Coding, Sample, Example, Tutorial, Download, Beginner, Entrance, Study">
        <?php
            }
        ?>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS_CHTML">
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tocify/1.9.0/stylesheets/jquery.tocify.min.css">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
</head>
<body>
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