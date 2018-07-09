<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TECHBIRD - 最新テクノロジーをさきどり</title>
    <meta name="description" content="WordPress 3.0用の無料テーマです。">
    <meta name="keywords" content="WordPress 無料 テーマ, WordPress テーマ, WordPress 3.0 テーマ, WordPress テンプレート, WordPress 無料テンプレート">
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45959800-8"></script>
</head>
<body>
    <div id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
    <div id="page">
        <div id="wrapper">
            <!-- Header -->       
            <div id="header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                <div>
                    <span class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Home</a></span>
                    <span class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/pickup">Pick up</a></span>
                    <span class="navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/ranking">Ranking</a></span>
                </div>
            </div>
            <!-- /#header -->