            </div><!-- /#contents -->
            <!-- Footer -->             
            <div id="footer">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon.png"> </a>
                </div>
                <div class="text">
                    <p class="category">Category</p>
                    <ul><?php wp_list_categories('title_li=&sort_column=name&hide_empty=1&hierarchical=1&style=list'); ?></ul>
                    <ul><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/bizmedia">運営会社</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">お問い合わせ</a></li></ul>
                </div>
                <div class="copy">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.
                </div>
            </div><!-- /#footer -->
        </div><!-- /#wrapper -->
    </div><!-- /#pageTop --> 
<?php wp_footer(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b58a0fda9fc44fd"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-45959800-8');
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