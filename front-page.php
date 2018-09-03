<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">        
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                <div class="newentry"></div>
                <div class="cards">
                    <div class="cards-inside">
                        <?php $array = array("swift", "python", "javascript", "ruby");
                        foreach($array as $value){ //fruitsの先頭から１つずつ$fruitに代入する
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="逆引き<?php echo $value; ?>">  
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

            <?php else :    // 投稿がない場合 ?>
            <div class="notfound">
                <h3>ページが見つかりません</h3>
                <p>申し訳ありません。お探しのページは見つかりませんでした。</p>
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home へ戻る</a></div>
                <div class="cards">
                    <div class="cards-inside">
                <?php 
                    query_posts('showposts=20');
                    if (have_posts()) : 
                        ?>
                        <div class="cards">
                        <?php 
                        while (have_posts()) : 
                        the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                <figure class="thumbnail-wrapper">
                                <?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
                                    the_post_thumbnail(array(360, 360));
                                    } else { //アイキャッチ画像を設定していない場合 ?>
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="アイキャッチ画像" width="360" height="240" />
                                <?php } ?>
                                </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <p class="caption"><?php the_title(); ?></p>
                                    <div class="content-meta">
                                        <span class="date">
                                        <span class="far fa-clock" aria-hidden="true"></span> <?php the_time('Y.m.d') ?> <?php the_time(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a> 
                        <?php
                        endwhile;
                        ?>
                        </div>
                        <?php 
                    endif;
                ?>
                    </div>
                </div>
            </div>
            <?php endif;    // 条件分岐終了 ?>
            <div class="newentry"></div>
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
        </div>
    </div>
<?php get_footer(); ?>