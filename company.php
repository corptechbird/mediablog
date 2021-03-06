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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Favicon, Thumbnail image -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/biz_fav-16.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/biz_fav-32.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/biz_fav-48.ico">
    <link rel="icon" type="image/x-icon" sizes="152x152" href="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/biz_fav-152.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45959800-8"></script>
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
  background-color: rgba(0, 182, 214, 1);
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
  color: rgba(0, 182, 214, 1);
  text-decoration: none;
}
#end {
  height: 5px;
}
.rankingTop {
  font-size: 1.8em;
  color: rgba(198, 185, 111, 1);
  border-bottom: solid 3px rgba(198, 185, 111, 1);
  position: relative;
  margin: 0 20px;
  width: 320px;
}
.rankingTop:after {
  position: absolute;
  content: " ";
  display: block;
  border-bottom: solid 3px #ffc778;
  bottom: -3px;
  width: 30%;
}
.ranking {
  font-size: 1.6em;
  border-bottom: solid 3px rgba(198, 185, 111, 1);
  position: relative;
  margin: 0 20px;
  width: 320px;
}
.ranking:after {
  position: absolute;
  content: " ";
  display: block;
  border-bottom: solid 3px skyblue;
  bottom: -3px;
  width: 30%;
}
.rankingCard {
  padding: 10px;
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
  color:rgba(0, 182, 214, 1);
  word-break: break-all;
}
.post a:visited {
  color:rgba(0, 182, 214, 0.7);
}
.post a:hover {
  color:rgba(0, 182, 214, 0.7);
}
.post p {
  margin: 1.0em 30px;
}
.post p {
  margin: 1.0em 30px;
}
.newentry {
  border-bottom: solid 3px skyblue;
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
  border-bottom: solid 3px #ffc778;
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
  color:rgba(0, 182, 214, 1);
}
.frame a:hover{
  text-decoration: none;
  color:rgba(0, 182, 214, 0.7);
}
.abstract-frame {
  text-align: center;
}
.abstract {
  display: inline-block;
  background-color: rgba(240, 240, 240, 1);
  color: rgba(102, 102, 102, 1);
  padding: 20px;
  max-width: 620px;
  height: auto;
  margin: 30px 0px 0px 0px;
  text-align: left;
}
.emphasis {
  /* background:linear-gradient(transparent 70%, #87ccc7 0%); */
  border-bottom: solid 2px rgba(255, 114, 92, 1);
}
.emphasis a {
  color: rgba(255, 114, 92, 1);
}
.emphasis a:hover {
  text-decoration: none;
  color:rgba(255, 114, 92, 0.7);
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
  background-color: rgba(0, 182, 214, 1);
  border: solid 1px rgba(0, 182, 214, 1);
}
a.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(0, 182, 214, 1);
  background-color: white;
  border: solid 1px rgba(0, 182, 214, 1);
}
a.page-numbers:hover {
  color: white;
  background-color: rgba(0, 182, 214, 1);
}
a.prev.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(0, 182, 214, 1);
  background-color: transparent;
  box-shadow: none;
}
a.next.page-numbers{
  padding: 4px 8px;
  margin: 4px;
  color: rgba(0, 182, 214, 1);
  background-color: transparent;
  box-shadow: none;
}
a.prev.page-numbers:hover{
  color: white;
  background-color: rgba(0, 182, 214, 1);
}
a.next.page-numbers:hover{
  color: white;
  background-color: rgba(0, 182, 214, 1);
}
.pagenation {
  text-align: center;
  font-size: 0.9em;
}
.time {
  color: gray;
  font-size:0.8em;
}
.headline {
  display: inline-block;
  position: relative;
  padding: 15px 20px;
  font-size: 18px;/*フォントサイズ*/
  color: white;
  background: rgba(0, 182, 214, 1);/*リボンの色*/
  /* background: #a6d3c8; */
  margin: 50px 0px 25px 0px;
  width: 100%;
}
.headline:before {
  position: absolute;
  content: '';
  top: 100%;
  left: 0;
  border: none;
  border-bottom: solid 15px transparent;
  border-right: solid 20px rgba(0, 182, 214, 0.7);/*折り返し部分*/
  /* border-right: solid 20px #87ccc7; */
}
.naviv {
  position: relative;
  display: inline-block;
  top: 10px;
}
.navi {
  color: #87ccc7;
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
  background: #87ccc7;
  transition: 0.5s;
}
.navi:hover:before {
  width: 100%;
}
.navi a:link {
  text-decoration: none;
  color:#87ccc7;
}
.navi a:visited {
  text-decoration: none;
  color:#87ccc7;
}
.navi a:hover {
  text-decoration: none;
  color:#87ccc7;
}
#breadcrumb {
  color: #87ccc7;
  padding: 0 0 10px 0;
}
#breadcrumb a:link {
  color:#87ccc7;
}
#breadcrumb a:visited {
  color:#87ccc7;
}
#breadcrumb a:hover {
  text-decoration: none;
  color:rgba(135, 204, 199, 0.7);
}
.notfound-navi{
  color: #87ccc7;
}
.notfound-navi a:link {
  color:#87ccc7;
}
.notfound-navi a:visited {
  color:#87ccc7;
}
.notfound-navi a:hover {
  text-decoration: none;
  color:rgba(135, 204, 199, 0.7);
}
.ribbon_box {    
  display: block;
  position: relative;
  margin: 0 auto;
  padding: 20px 0;
  width: 300px;
  background: #f1f1f1;
  z-index: 100;
}
.ribbon17 {
  display: inline-block;
  position: absolute;
  left: 0;
  top: 5px;
  box-sizing: border-box;
  padding: 0 12px;
  margin: 0;
  height: 30px;
  line-height: 30px;
  font-size: 18px;
  letter-spacing: 0.1em;
  color: white;
  background: #87ccc7;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.12);
  border-radius: 0 5px 5px 0;
  z-index: 100;
}
.ribbon17:before {
  position: absolute;
  content: '';
  top: 0;
  left: -7px;
  border: none;
  height: 38px;
  width: 7px;
  background: #87ccc7;
  border-radius: 0 5px 0 5px;
  z-index: 100;
}
.ribbon17:after {
  position: absolute;
  content: '';
  bottom: -7px;
  left: -5px;
  border: none;
  height: 7px;
  width: 5px;
  background: #87ccc7;
  border-radius: 0 5px 0 5px;
  z-index: 100;
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
  background: linear-gradient(238deg, rgba(14, 236, 179, 0.95), rgba(239, 255, 17, 0.95), rgba(17, 255, 136, 0.95), rgba(223, 116, 255, 0.95));
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
  color: #4cc48e;
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
  background-color: #87ccc7;
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
  color: #87ccc7;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}
.s:placeholder-shown {
  color: #f5f5f5;
  font-size: 0.8em;
  border: 2px solid #87ccc7;
  border-radius: 6px;
  padding: 6px;
}
.searchsubmit {
  border: 1px solid #87ccc7;
  background: #87ccc7;
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
  color: #87ccc7;
}
#btn a:visited {
  text-decoration:none;
  color: #87ccc7;
}
#btn a:hover{
  text-decoration:none;
  color: #87ccc7;
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
.tag ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.tag ul li {
  display: inline-block;
  margin: 0 0 .3em 1em;
  padding: 0;
}
.tag ul li a {
  position: relative;
  display: inline-block;
  height: 30px;
  line-height: 30px;
  padding: 0 1em;
  background-color: #87ccc7;
  border-radius: 0 3px 3px 0;
  color: #fff;
  font-size: 13px;
  text-decoration: none;
  -webkit-transition: .2s;
  transition: .2s;
}
.tag ul li a::before {
  position: absolute;
  top: 0;
  left: -15px;
  content: '';
  width: 0;
  height: 0;
  border-color: transparent #87ccc7 transparent transparent;
  border-style: solid;
  border-width: 15px 15px 15px 0;
  -webkit-transition: .2s;
  transition: .2s;
}
.tag ul li a::after {
  position: absolute;
  top: 50%;
  left: 0;
  z-index: 2;
  display: block;
  content: '';
  width: 6px;
  height: 6px;
  margin-top: -3px;
  background-color: #fff;
  border-radius: 100%;
}
.tag ul li span {
  display: block;
  max-width: 100px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.tag ul li a:hover {  
  background-color: rgba(135, 204, 199, 0.7);
  color: #fff;
}
.tag ul li a:hover::before {
  border-right-color: rgba(135, 204, 199, 0.7);
}
#bbtn {
  display: block;
  float: left;
  padding: 15px 5px 15px 15px;
}
#bbtn a:link {
  text-decoration: none;
  color: rgba(45, 12, 175, 1);
}
#bbtn a:visited {
  text-decoration: none;
  color: rgba(45, 12, 175, 1);
}
#bbtn a:hover{
  text-decoration: none;
  color: rgba(45, 12, 175, 1);
}
@media screen and (min-width: 1100px) {
  #btn {
    display: none;
    float: right;
  }
  #bbtn {
    display: none;
    float: right;
  }
  #menu {
      display: block;
      top: 10px;
      float: right;
  }
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
#mission, #business {
  background-color: rgba(251, 251, 251, 1);
}
#mission {
  background-image : url(https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/mission.png);
  background-repeat : no-repeat;
  background-position : center center;  
  background-size:cover;
}
#mission h4{
  color: white;
}
#mission span{
  color: white;
}
#mission h5{
  color: white;
}
.bnavi {
  color: rgba(45, 12, 175, 1);
  font-size: 18px;
  margin: 0 18px;
  position: relative;
  display: inline-block;
  top: 10px;
}
.bnavi:before {
  position: absolute;
  top: 1.3em;
  left: 0;
  content: "";
  display: inline-block;
  width: 0;
  height: 3px;
  background: rgba(45, 12, 175, 1);
  transition: 0.5s;
}
.bnavi:hover:before {
  width: 100%;
}
.bnavi a:link {
  text-decoration: none;
  color:rgba(45, 12, 175, 1);
}
.bnavi a:visited {
  text-decoration: none;
  color:rgba(45, 12, 175, 1);
}
.bnavi a:hover {
  text-decoration: none;
  color:rgba(45, 12, 175, 1);
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
  color:#87ccc7;
}
.navir a:visited {
  text-decoration: none;
  color:#87ccc7;
}
.navir a:hover {
  text-decoration: none;
  color:#87ccc7;
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
.insta-center {
  margin:0 auto;max-width: 380px;
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
.code-lang {
  margin: 0px 30px 0 30px;
}
.codecaption {
  margin: 1.0em 0 0 1.0em; 
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
  border: solid 2px rgba(101, 210, 161, 1);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1), 0 8px 20px rgba(0, 0, 0, 0.1);
}
#toc_container .toc_title {
  text-align: center;
  padding: 0.5em;
  margin: 0;
  border: none;
  background: rgba(101, 210, 161, 1);
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
  color: rgba(0, 182, 214, 1);
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
.line {
  background: rgba(250, 241, 244, 1);
  color: rgba(210, 0, 69, 1);
  border: solid 1px rgba(224, 224, 224, 1);
  border-radius: 4px;
  padding-left: 5px;
  padding-right: 5px;
}





.memoarea {
  padding: 0.5em;
  margin: 1.0em;
  background: #fff9e5;
  color: #545454;
  border-radius: 10px;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1), 0 8px 20px rgba(0, 0, 0, 0.1);
}
.memo-title {
  color: #ffb36b;
  font-size: 1.2em;
  font-weight: 700;
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
  .rankingTop {
    margin: 0;
    width: 100%;
  }
  .ranking {
    margin: 0;
    width: 100%;
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
ul.recipe {
  list-style-type: none;
}
ol.recipe {
  counter-reset: list-count; 
  list-style: none; 
}

ol.recipe > li::before {
  content:counter(list-count) ".";
  counter-increment: list-count;
  font-weight: bold;
  margin-right: 10px; 
}
ol.recipe li{
  border-bottom: 1px #eee solid;
  margin-right: 2.0em;
}
</style>
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
                <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/company.png"> </a>
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
In bizMedia, we are working around three projects: ① mobile / Web application development, ② media management, and ③ programming education.</br>
① In mobile / web application development, we mainly develop business applications incorporating AI and AR / VR and 2D / 3D game applications.</br>
② In media management, we provide effective references about programming languages on <a href="https://techbird.site" target="_blank"> TECHBIRD </a>.</br>
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
                    <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/company.png"> </a>
                </div>
            </div><!-- /#footer -->
        </div><!-- /#wrapper -->

<?php wp_footer(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b58a0fda9fc44fd"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-125050500-1');
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