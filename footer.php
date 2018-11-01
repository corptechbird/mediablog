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
        $(function(){
            $('').click(function() {
                var speed = 4100;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var headerHeight = 100; //固定ヘッダーの高さ
                var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                console.log('動いてるで');
                return false;
            });
        }); 
    </script>
</body>
</html>