<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                <div class="newentry">New Entries</div>
                <div class="cards">
                <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
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
                                    <span class="date"><span class="far fa-clock" aria-hidden="true"></span> <?php the_date(); ?> <?php the_time(); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile;    // 繰り返し処理終了 ?>
            </div>
                <p class="pagenation">
                    <?php
                        $big = 9999999999;
                        $arg = array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'current' => max( 1, get_query_var('paged') ),
                            'total'   => $wp_query->max_num_pages,
                            'prev_text' => '« Previous',
                            'next_text' => 'Next »'
                        );
                        echo paginate_links($arg);
                    ?>
                </p>
            <?php else :    // 投稿がない場合 ?>
                <div class="notfound">
                    <h3>ページが見つかりません</h3>
                    <p>申し訳ありません。お探しのページは見つかりませんでした。</p>
                    <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home へ戻る</a></div>
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
                                            <span class="far fa-clock" aria-hidden="true"></span> <?php the_date(); ?> <?php the_time(); ?></span>
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
            <?php endif;    // 条件分岐終了 ?>
            <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>