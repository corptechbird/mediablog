                <?php get_sidebar(''); ?>
                <div id="end"></div>
            </div><!-- /#contents -->
            <!-- Footer -->
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a> -->
                    <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/icon.png"> </a>
                </div>
                <div class="text">
                    <!-- <p class="category">Category</p>
                    <ul><?php wp_list_categories('title_li=&sort_column=name&hide_empty=1&hierarchical=1&style=list'); ?></ul> -->
                    <ul>
                    <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia" target="_blank">Company</a></li> -->
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">Contact</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/privacy">Privacy</a></li></ul>
                </div>
                <div class="copy">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b58a0fda9fc44fd"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125050500-1"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
        // Twitterのシェア数を取得
function get_social_count_twitter(url, selector) {
  jQuery.ajax({
  url:'http://urls.api.twitter.com/1/urls/count.json',
  dataType:'jsonp',
  data:{
    url:url
  },
  success:function(res){
    jQuery( selector ).text( res.count || 0 );
  },
  error:function(){
    jQuery( selector ).text('0');
  }
  });
}
jQuery(function(){
  <!-- 関数はjavascript.jsの中 -->
  get_social_count_twitter('<?php the_permalink(); ?>', '.twitter-count');
  get_social_count_facebook('<?php the_permalink(); ?>', '.facebook-count');
  get_social_count_googleplus('<?php the_permalink(); ?>', '.googleplus-count');
  get_social_count_hatebu('<?php the_permalink(); ?>', '.hatebu-count');
  get_social_count_pocket('<?php the_permalink(); ?>', '.pocket-count');
});
 
function get_social_count_facebook(url, selector) {
  jQuery.ajax({
    url:'https://graph.facebook.com/',
    dataType:'jsonp',
    timeout: 10000, //10sec
    data:{ id:url }
  }).done(function(res){
    if ( res.share && res.share.share_count ) {
      jQuery( selector ).text( res.share.share_count );
    } else {
      jQuery( selector ).text( 0 );
    }
  }).fail(function(){
    jQuery( selector ).text('0');
  });
}
 
//Google＋のシェア数を取得
function get_social_count_googleplus(url, selector) {
  jQuery.ajax({
    type: "get", dataType: "xml",
    url: "http://query.yahooapis.com/v1/public/yql",
    data: {
      q: "SELECT content FROM data.headers WHERE url='https://plusone.google.com/_/+1/fastbutton?hl=ja&url=" + url + "' and ua='#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36'",
      format: "xml",
      env: "http://datatables.org/alltables.env"
    },
    success: function (data) {
      var content = jQuery(data).find("content").text();
      var match = content.match(/window\.__SSR[\s*]=[\s*]{c:[\s*](\d+)/i);
      var count = (match != null) ? match[1] : 0;
 
      jQuery( selector ).text(count);
    }
  });
}
 
//はてなブックマークではてブ勝を取得
function get_social_count_hatebu(url, selector) {
  jQuery.ajax({
    url:'http://api.b.st-hatena.com/entry.count?callback=?',
    dataType:'jsonp',
    data:{
      url:url
    },
    success:function(res){
      jQuery( selector ).text( res || 0 );
    },
    error:function(){
      jQuery( selector ).text('0');
    }
  });
}
 
//ポケットのストック数を取得
function get_social_count_pocket(url, selector) {
  jQuery.ajax({
    type: "get", dataType: "xml",
    url: "http://query.yahooapis.com/v1/public/yql",
    data: {
      q: "SELECT content FROM data.headers WHERE url='https://widgets.getpocket.com/v1/button?label=pocket&count=vertical&v=1&url=" + url + "' and ua='#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36'",
      format: "xml",
      env: "http://datatables.org/alltables.env"
    },
    success: function (data) {
      var content = jQuery(data).find("content").text();
      var match = content.match(/<em id="cnt">(\d+)<\/em>/i);
      var count = (match != null) ? match[1] : 0;
 
      jQuery( selector ).text(count);
    }
  });
}
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
            $('a').click(function() {
                var speed = 400;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var headerHeight = 55; //固定ヘッダーの高さ
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
<script>
(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2330122305834701",
    enable_page_level_ads: true
});
var addthis_config = addthis_config||{};
        addthis_config.data_track_addressbar = false;
        addthis_config.data_track_clickback = false;

</script>
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
                topBtn.fadeIn();
            }else{
                topBtn.fadeOut();
            } 
            });
            topBtn.click(function(){
                $('body,html').animate({
                scrollTop: 0},500);
                return false;
            });
        });
    </script>
</body>
</html>