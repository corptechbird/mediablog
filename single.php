<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
            <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                <p class="title"><?php the_title(); ?></p>
                <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
                <span class="time"><i class="far fa-clock" aria-hidden="true"></i> <?php the_date(); ?> <?php the_time(); ?></span>
                <figure class="frame"><?php the_post_thumbnail(); ?></figure>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <div class="afterpost">
            <?php if( has_category() ) {
                $cats = get_the_category();
                $catkwds = array();
                foreach($cats as $cat) {
                    $catkwds[] = $cat->term_id;
                }
            } ?>
            <?php
            $myposts = get_posts( array(
                'post_type' => 'post',
                'posts_per_page' => '9',
                'post__not_in' => array( $post->ID ),
                'category__in' => $catkwds,
                'orderby' => 'rand'
            )); 
            if( $myposts ): ?>
                <div><i class="fas fa-bookmark" aria-hidden="true"></i> 他の人はこちらの記事も読んでいます</div>
                <div class="cards">
                <div class="cards-inside">
                    <?php foreach($myposts as $post):
                    setup_postdata($post); ?>
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
                                    <span class="date"><i class="far fa-clock" aria-hidden="true"></i> <?php the_date(); ?> <?php the_time(); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                    </div>
                </div>
                <?php wp_reset_postdata();
            endif; ?>
            </div>
            <?php endwhile;    // 繰り返し処理終了 ?>
            <?php else :    // 投稿がない場合 ?>
            <?php endif;    // 条件分岐終了 ?>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>