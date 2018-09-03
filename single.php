<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <div class="post-main">
                <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                    <figure class="frame"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/python/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/python.png" alt="アイキャッチ画像" width="360"></a></figure>
                    <p class="title"><?php the_title(); ?></p>
                    <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
                    <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
                    <div class="ads" style="margin-bottom:20px;">
                        <div class="adleft">
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:320px;height:100px"
                            data-ad-client="ca-pub-2330122305834701"
                            data-ad-slot="4335446353"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        </div>
                        <div class="adright">
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:320px;height:100px"
                                data-ad-client="ca-pub-2330122305834701"
                                data-ad-slot="4335446353"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <hr class="clear">
                    </div>
                    <?php the_content(); ?>
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
                <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
            </div>
            <div class="afterpost">
                <div class="cards">
                    <div class="cards-inside">
                        <?php $array = array("swift", "python", "javascript", "ruby");
                        foreach($array as $value){ //fruitsの先頭から１つずつ$fruitに代入する
                            ?>
                            <a href="<?php echo get_bloginfo('template_directory'); ?>/<?php echo $value; ?>" title="逆引き<?php echo $value; ?>">  
                                <div class="l-card">
                                    <div class="l-thumbnail">
                                        <figure class="thumbnail-wrapper">
                                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="アイキャッチ画像" width="360" height="220" />
                                        </figure>
                                        <span class="more-text">Read More</span>
                                    </div>
                                    <div class="text-content">
                                        <p class="caption"><?php echo $value; ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                        } ?>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php endwhile;    // 繰り返し処理終了 ?>
            <?php endif;    // 条件分岐終了 ?>
        </div>
    </div>
<?php get_footer(); ?>