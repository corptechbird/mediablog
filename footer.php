                <?php get_sidebar(''); ?>
                <div id="end"></div>
            </div><!-- /#contents -->
            <!-- Footer -->             
            <div class="ads" style="margin-bottom:20px;">
                <div class="adleft">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="4283281946"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="adright">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="5240483851"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr class="clear">
            </div>
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                </div>
                <div class="text">
                    <!-- <p class="category">Category</p>
                    <ul><?php wp_list_categories('title_li=&sort_column=name&hide_empty=1&hierarchical=1&style=list'); ?></ul> -->
                    <ul><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia" target="_blank">Company</a></li>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125050500-1"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
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
                var headerHeight = 48; //固定ヘッダーの高さ
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