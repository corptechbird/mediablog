<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TECHBIRD - 海外ITトレンド情報をさきどり</title>
    <meta name="description" content="海外ITトレンド情報をさきどり">
    <meta name="keywords" content="海外, IT, トレンド, 情報, さきどり, Fintech, 人工知能, AI, AR, VR, 武田勝輝">
<!-- External files -->
    <link rel="stylesheet" href=" <?php echo get_bloginfo('stylesheet_url') ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
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
                    <?php get_search_form(); ?>
                </div>
            </div>
            <!-- /#header -->