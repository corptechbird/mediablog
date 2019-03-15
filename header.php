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
    <meta name="description" content="小・中学生向けのオンラインプログラミング教室です。iOS/Androidアプリ開発やデータ分析などのコード・プログラムに関する丁寧な解説をはじめ、初心者にもわかりやすいように写真や動画を多く使用しています。">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS_CHTML">
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- External files -->
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->
    <!-- <link rel="stylesheet" href="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/style.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tocify/1.9.0/stylesheets/jquery.tocify.min.css">
    <!-- Favicon, Thumbnail image -->
    <!-- <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="<?php bloginfo('template_directory'); ?>/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon-152.ico"> -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/favicon-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/favicon-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/favicon-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/favicon-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <style type="text/css">  
    /*
Theme Name: Media Blog
Theme URI: https://bizmedia.com/
Description: Media Blog用のデザインテーマ
Version: 1.0
Author: bizMedia
Author URI: https://bizmedia.com
*/
html, body {
  font-family:"游ゴシック", YuGothic, "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, sans-serif;
  margin: 0;         
  padding: 0;        
  width:100%;
  height:100%;
  background-color: #f5f5f5;
  word-wrap: normal;
}
#wrapper {
  background-color: #f5f5f5;
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
}
#header {
  text-align: left;
  background-color: white;
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 50px;  
  text-align: left;
  z-index: 1000;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
}
#header img{
  max-width:300px;
  height: 50px;  
  padding: 2px;
}
#header img:hover{
  opacity: 0.7;
}
#footer {
  text-align: center;
  padding: 25px;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
  background-color: white;
}
#footer img{
  width:320px;
  height:auto;
  max-width:320px;
  max-height:100%;
  margin: auto;
}
#footer img:hover{
  opacity: 0.7;
}
#footer div.category {
  color:grey;
}
#footer div.text {
  width:320px;
  height:auto;
  text-align: center;
  color:#505050;
  display: inline-block;
  padding: 10px;
}
#footer div.text ul {
  list-style:none;
  padding-left: 0;
}
#footer div.text ul li{
  display: inline;
  margin-right: 20px;
}
#footer div.text a:link {
  color:#505050;
}
#footer div.text a:visited {
  color:#505050;
}
#footer div.text a:hover {
  text-decoration: none;
  color: rgba(80, 80, 80, 0.7);
}
#footer div.copy {
  color: gray;
  margin: 10px;
  font-size: 0.8em;
}
#contents {
  background-color: #f5f5f5;
  padding: 1.2em;
  margin-top: 50px;
  width: 70%;
}
#primary {
  margin-top: 50px;
  width: 30%;
  background-color: #f5f5f5;
}
#primary ul {
  margin: 1.2em 1.2em 1.2em 0;
  background-color: white;
  padding: 10px;
}
#primary ul h3 {
  background-color: rgba(44, 84, 161, 1);
  border-radius: 5px;
  color: white;
  font-size: 1.2em;
  padding: 10px;
  margin: 0;
  box-shadow: 1px 1px 20px -5px rgba(0, 0, 0, 0.8);
}
#primary ul div {
  padding: 10px 0 0 0;
}
#primary ul div ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
#primary ul div ul li {
  padding: 5px;
  margin: 0;
}
#primary ul div ul li a {
  color: #505050;
}
#primary ul div ul li a:visited {
  color: rgba(80, 80, 80, 0.7);
}
.post ul {
  margin: 0 5px 1.0em 5px;
  padding: 0 10px 10px 10px;
  list-style: none;
}
.post ul li {
  border-bottom:1px solid lightgray;
  padding: 5px;
}
.post ul li:first-child {
  padding: 0 5px 5px 5px;
}
.post ul li a {
  color: #505050;
}
.post ul li a:visited {
  color: gray;
}
.post ul li a:hover {
  color: rgba(44, 84, 161, 0.7);
  text-decoration: none;
}
#end {
  height: 5px;
}
.screen-reader-text{
  display: none;
}
.post {
  text-align: left;
  max-width: 1200px;
  margin: 0;
  padding: 10px;
  background-color: white;
  font-size: 1.1em;
  color:#505050;
}
.post a {
  color:rgba(44, 84, 161, 1);
  word-break: break-all;
}
.post a:visited {
  color:rgba(44, 84, 161, 0.7);
}
.post a:hover {
  color:rgba(44, 84, 161, 1);
}
.post p {
  margin: 1.0em 30px;
}
.post p {
  margin: 1.0em 30px;
}
.newentry {
  border-bottom: solid 3px rgba(198, 185, 111, 1);
  position: relative;
  margin: 10px;
  font-size: 1.3em;
  color: rgba(198, 185, 111, 1);
  padding: 0px;
}
.newentry:after {
  position: absolute;
  content: " ";
  display: block;
  border-bottom: solid 3px rgba(44, 84, 161, 1);
  bottom: -3px;
  width: 30%;
}
.cards {
  text-align: center;
  padding: auto;
}
.cards-inside{
  width:730px;
  text-align: left;
  margin: auto;
}
.at-share-btn-elements {
    float: none;
    text-align: center;
    margin: 20px;
}
.title {
  font-size: 1.6em;
  color: rgba(198, 185, 111, 1);
  margin: 10px;
  word-break: break-all;
}
.front-title {
  font-size: 1.3em;
  color: rgba(198, 185, 111, 1);
  margin: 0px;
  padding: 0px;
}
.result-frame {
  text-align: center;
}
.result-frame img {
  display: inline-block;
  max-width: 100%;
  height: auto;
  margin: 1.0em 0px 1.0em 0px;
  padding: 10px;
}
.post img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 100%;
}
.frame {
  text-align: center;
}
.frame img {
  display: inline-block;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
  border-radius: 10px;
  max-width: 320px;
  height: auto;
  margin: 1.0em 0px 1.0em 0px;
}
.frame a img:hover{
  opacity: 0.7;
}
.frame a{
  color:rgba(44, 84, 161, 1);
}
.frame a:hover{
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.afterpost {
  border-top: solid 2px #f5f5f5;
  border-bottom: solid 2px #f5f5f5;
  padding: 10px 0px 10px 0px;
  margin: 15px 0px 20px 0px;
}
.page-numbers.current{
  padding: 4px 8px;
  margin: 4px;
  color: white;
  background-color: rgba(44, 84, 161, 1);
  border: solid 1px rgba(44, 84, 161, 1);
}
a.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(44, 84, 161, 1);
  background-color: white;
  border: solid 1px rgba(44, 84, 161, 1);
}
a.page-numbers:hover {
  color: white;
  background-color: rgba(44, 84, 161, 1);
}
a.prev.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(44, 84, 161, 1);
  background-color: transparent;
  box-shadow: none;
}
a.next.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(44, 84, 161, 1);
  background-color: transparent;
  box-shadow: none;
}
a.prev.page-numbers:hover{
  color: white;
  background-color: rgba(44, 84, 161, 1);
}
a.next.page-numbers:hover{
  color: white;
  background-color: rgba(44, 84, 161, 1);
}
.pagenation {
  text-align: center;
  font-size: 0.9em;
}
.naviv {
  position: relative;
  display: inline-block;
  top: 10px;
}
.navi {
  color: rgba(44, 84, 161, 1);
  font-size: 18px;
  margin: 0 18px;
  position: relative;
  display: inline-block;
  top: 10px;
}
.navi:before {
  position: absolute;
  top: 1.3em;
  left: 0;
  content: "";
  display: inline-block;
  width: 0;
  height: 3px;
  background: rgba(44, 84, 161, 1);
  transition: 0.5s;
}
.navi:hover:before {
  width: 100%;
}
.navi a:link {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.navi a:visited {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.navi a:hover {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.l-card {
  transition: 0.5s;
  overflow: hidden;
  width: 320px;
  padding: 0;
  margin: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1), 0 8px 20px rgba(0, 0, 0, 0.1);
  display: inline-block;
  color:#505050;
  text-align: left;
}
.l-card:hover .thumbnail-wrapper:after {
  opacity: 0.8;
  -webkit-animation: bg-gradient 30s ease infinite;
  -moz-animation: bg-gradient 30s ease infinite;
  animation: bg-gradient 30s ease infinite;
}
.l-card:hover .thumbnail-wrapper img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  filter: grayscale(100%);
}
.l-card:hover .more-text {
  opacity: 1;
  transform: translate(-50%, -50%);
}
.l-thumbnail {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: auto;
}
.l-thumbnail .more-text {
  transition: 0.5s;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -80%);
  opacity: 0;
  display: inline-block;
  padding: 6px 12px 8px;
  border: 2px solid #fff;
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
}
.thumbnail-wrapper {
  display: block;
  margin: 0;
  padding: 0;
}
.thumbnail-wrapper:after {
  content: "";
  transition: 0.5s;
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  background: linear-gradient(238deg, rgba(14, 236, 179, 0.95), rgba(239, 255, 17, 0.95), rgba(44, 84, 161, 1), rgba(223, 116, 255, 0.95));
  background-size: 800% 800%;
}
.thumbnail-wrapper img {
  transition: 0.5s;
  display: block;
  max-width: 100%;
}
.text-content {
  padding: 16px;
}
.text-content .title {
  margin: 0 0 12px 0;
  font-size: 20px;
  color: rgba(44, 84, 161, 1);
}
.text-content .caption {
  margin: 0 0 12px 0;
  font-size: 16px;
  font-weight: lighter;
  columns: #505050;
}
.content-meta {
  overflow: hidden;
  width: 100%;
  font-size: 12px;
}
.content-meta .date {
  float: left;
  color: #aaa;
}
#pageTop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
}
#pageTop i {
  padding-top: 8px;
  z-index: 999;
}
#pageTop a {
  display: block;
  z-index: 999;
  border-radius: 30px;
  width: 35px;
  height: 35px;
  background-color: rgba(44, 84, 161, 1);
  color: #fff;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  box-shadow: 3px 3px 20px -5px rgba(0, 0, 0, 0.8);
}
#pageTop a:hover {
  text-decoration: none;
  opacity: 0.7;
  z-index: 999;
}
.notfound {
  padding: 20px;
}
.s {
  border: 1px solid #D6D6D6;
  margin: 0;
  height: 28px;
  width: 200px;
  color: rgba(44, 84, 161, 1);
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}
.s:placeholder-shown {
  color: #f5f5f5;
  font-size: 0.8em;
  border: 2px solid rgba(44, 84, 161, 1);
  border-radius: 6px;
  padding: 6px;
}
.searchsubmit {
  border: 1px solid rgba(44, 84, 161, 1);
  background: rgba(44, 84, 161, 1);
  padding: 3px 14px;
  color: #FFFFFF;
  font-size: 0.9em;
}
@-webkit-keyframes bg-gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@-moz-keyframes bg-gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes bg-gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
#btn a:link {
  text-decoration:none;
  color: rgba(44, 84, 161, 1);
}
#btn a:visited {
  text-decoration:none;
  color: rgba(44, 84, 161, 1);
}
#btn a:hover{
  text-decoration:none;
  color: rgba(44, 84, 161, 1);
}
#btn {
  display: block;
  float: left;
  padding: 15px 5px 15px 15px;
}
#menu {
  display: none;
  float: left;
  margin-right: 10px;
}
.fade-in {
  transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
}
#frame-contents {
  margin-top: 50px;
  text-align: center;
}
#frame-contents h4 {
  text-align: center;
  padding-top: 50px;
  color: rgba(0, 129, 237, 1);
}
#frame-contents div {
  margin-top : -50px;
  padding-top : 50px;
}
.phrase-form {
  max-width: 620px;
  text-align: left;
  margin:auto;
}
.phrase-form h5 {
  color: #505050;
}
.phrase-form span {
  display: table-cell;
  vertical-align: middle;
  height: 480px;
  padding-bottom: 80px;
  color: gray;
}
#contact {
  padding: 20px;
}
input.wpcf7-form-control.wpcf7-submit {
  display: inline-block;
  padding: 0.3em 1em;
  text-decoration: none;
  color: #67c5ff;
  border: solid 2px #67c5ff;
  border-radius: 3px;
  transition: .4s;
  width: 200px;
}
input.wpcf7-form-control.wpcf7-submit:hover {
  background: #67c5ff;
  color: white;
}
.remodal.remodal-is-initialized {
  background-color: black;
}
.remodal {
  background-color: black;
}
.remodal ul {
  list-style:none;
}
.navir {
  color: #87ccc7;
  font-size: 18px;
  margin: 0 18px;
  position: relative;
  display: block;
  top: 10px;
}
.navir:before {
  position: absolute;
  top: 1.3em;
  left: 0;
  content: "";
  display: inline-block;
  width: 0;
  height: 3px;
  background: #87ccc7;
  transition: 0.5s;
}
.navir:hover:before {
  width: 100%;
}
.navir a:link {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.navir a:visited {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.navir a:hover {
  text-decoration: none;
  color:rgba(44, 84, 161, 1);
}
.remodal .s {
  width: 70%;
}
.remodal ul {
  padding-left: 0;
}
#recent-posts-2 ul li a {
  padding-top:10px;
  padding-bottom:10px;
  color: yellow;
}
.page {
  margin: 10px;
  padding: 10px;
  font-size: 0.9em;
}
.ads {
  border-top: solid 2px #f5f5f5;
  padding-top: 20px;
  margin:0 auto;
  max-width: 720px;
  text-align: center;
}
.adleft {float:left; width:336px;margin: 10px;}
.adright {float:left; width:336px;margin: 10px;}
.clear {clear:both;}
.clear hr {color: transparent; display:none; height: 0px;border:none;}
.hljs{
  font-size:0.8em;
  margin: 10px 30px 0 30px;
  padding: 1.0em;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
  border-radius: 5px;
  height: auto;
}
.post ul {
  list-style-type: disc;
  margin:0;
  padding-left:40px;
}
.post ul li{
  list-style-type: disc;
  display:list-item;
  border: none;
}
.post ul li ul li{
  list-style-type: circle;
}
.post table {
  width: 90%;
  margin: 1.0em;
  margin-left: auto;
  margin-right: auto;
}
.small-table {
  padding: 10px;
  padding-left: 30px;
}
.small-table ul {
  list-style-type: disc;
  margin:0;
  padding-left:40px;
}
.small-table ul li{
  list-style-type: disc;
  display:list-item;
  border: none;
}
.small-table ul li ul li{
  list-style-type: circle;
}
#toc_container {
  margin: 0.5em 0.5em 1.5em 0.5em;
  border: solid 2px rgba(44, 84, 161, 1);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1), 0 8px 20px rgba(0, 0, 0, 0.1);
}
#toc_container .toc_title {
  text-align: center;
  padding: 0.5em;
  margin: 0;
  border: none;
  background: rgba(44, 84, 161, 1);
  color: white;
  font-size: 1.0em; 
}
#toc_container .toc_title::before {
  content: "\f03a";
	margin-right: .5em;
  font-size: 0.8em; 
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
}
#toc_container a {
  color: rgba(84, 84, 84, 1);
  padding: 5px;
}
#toc_container a:visited {
  color: rgba(84, 84, 84, 0.7);
  text-decoration: none;
}
#toc_container a:hover {
  color: rgba(44, 84, 161, 0.7);
  text-decoration: underline;
}
#toc_container .toc_list {
  padding: 1.0em;
  background: white;
}
#toc_container ul {
  border: none;
  padding: 0;
  margin: 0;
  background: white;
  list-style-type: decimal;
}
#toc_container ul li {
  border: none;
  background: white;
  padding-bottom: 0px;
  padding-top: 0px;
  padding-left: 0em;
  margin-left: 1.0em;
}
#toc_container ul li ul{
  list-style-type: circle;
  padding-left: 0em;
}
.post h1 {
  color: #494949;/*文字色*/
  font-size: 1.8em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
.post h2 {
  color: #494949;/*文字色*/
  font-size: 1.4em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
.post h3 {
  color: #494949;/*文字色*/
  font-size: 1.2em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
.post h4 {
  color: #494949;/*文字色*/
  font-size: 1.0em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
.post h5 {
  color: #494949;/*文字色*/
  font-size: 0.8em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
h1 {
  color: #494949;/*文字色*/
  font-size: 1.8em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
h2 {
  color: #494949;/*文字色*/
  font-size: 1.4em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
h3 {
  color: #494949;/*文字色*/
  font-size: 1.2em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
h4 {
  color: #494949;/*文字色*/
  font-size: 1.0em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
h5 {
  color: #494949;/*文字色*/
  font-size: 0.8em;
  font-weight: bold;
  padding: 0.4em;/*上下の余白*/
  border-bottom: solid 1px rgba(221, 221, 221, 1);/*下線*/
  margin: 0.8em 0.5em 0.5em 0.5em;
  word-break: break-all;
}
@media screen and (max-width: 800px) {
  .cards {
    text-align: center;
  }
  .cards-inside{
    width:100%;
    text-align: center;
  }
  .l-card {
    max-width:100%;
    padding-left: 0;
    padding-right: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .frame img {
    width: 100%;
    max-width: 300px;
  }
  .title {
    margin: 0 0 20px 0;
    font-size: 1.3em;
  }
  .post {
    font-size: 1.1em;
    padding: 5px;
  }
  #contents {
    padding: 5px;
  }
  .post p {
    margin: 5px;
  }
  .code-lang {
    margin: 0;
  }
  .post h1 {
    margin: 0.8em 0em 0.2em 0em;
    padding: 0.2em;
    font-size: 1.4em;
  }
  .post h2 {
    margin: 0.8em 0em 0.2em 0em;
    padding: 0.2em;
    font-size: 1.2em;
  }
  .post h3 {
    margin: 0.8em 0em 0.2em 0em;
    padding: 0.2em;
    font-size: 1.0em;
  }
  .post h4 {
    margin: 0.8em 0em 0.2em 0em;
    padding: 0.2em;
    font-size: 0.8em;
  }
  .post h5 {
    margin: 0.8em 0em 0.2em 0em;
    padding: 0.2em;
    font-size: 0.8em;
  }
  h1 {
    margin: 0.8em 0 0 0;
    padding: 0.2em;
  }
  h2 {
    margin: 0.8em 0 0 0;
    padding: 0.2em;
  }
  h3 {
    margin: 0.8em 0 0 0;
    padding: 0.2em;
  }
  h4 {
    margin: 0.8em 0 0 0;
    padding: 0.2em;
  }
  h5 {
    margin: 0.8em 0 0 0;
    padding: 0.2em;
  }
  .hljs{
    margin: 10px 0 0 0;
  }
  .post ul {
    list-style-type: disc;
    margin:0;
    padding-left:25px;
  }
  #toc_container {
    margin: 1.0em 0em 1.0em 0em;
  }
  #toc_container .toc_list {
    padding: 0.4em 0.4em 0.4em 0.8em;
  }
}
@media screen and (max-width: 1100px) {
  #contents {
    width: 100%;
  }
  #primary {
    width: 100%;
    min-width: 320px;
    margin-top: 0px;
    padding: 0 1.2em 1.2em 1.2em;
  }
  #primary ul {
    margin: 0;
  }
  #header {
    text-align: center;
  }
  #header img{
    padding-right: 20px;
  }
}
@media screen and (min-width: 1100px) {
  #btn {
    display: none;
    float: right;
  }
  #menu {
      display: block;
      top: 10px;
      float: right;
  }
}
</style>
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
                <!-- <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a> -->
                <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/icon.png"> </a>

                <span id="btn"><a data-remodal-target="modal" href="javascript:menu_click();"><i class="fas fa-bars fa-lg"></i></a></span>
                <span id="menu">
                    <ul>
                        <li class="naviv"><?php get_search_form(); ?></li>
                    </ul>
                </span><!-- #menu -->
            </div><!-- /#header -->