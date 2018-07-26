<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
            <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                <p class="title"><?php the_title(); ?></p>
                <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
                <span class="time"><i class="far fa-clock" aria-hidden="true"></i> <?php the_time('Y.n.j H:m'); ?></span>
                <div class="sns"><div class="addthis_inline_share_toolbox sns"></div></div>
                <figure class="frame"><?php the_post_thumbnail(); ?></figure>
            <?php the_content(); ?>
            <div class="sns"><div class="addthis_inline_share_toolbox"></div></div>
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
            ) ); 
            if( $myposts ): ?>
            <div><i class="fas fa-bookmark" aria-hidden="true"></i> 他の人はこちらの記事も読んでいます</div>
                <?php foreach($myposts as $post):
                setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>"  target="_blank" title="<?php the_title_attribute(); ?>">  
                    <div class="l-card">
                        <div class="l-thumbnail">
                            <figure class="thumbnail-wrapper"><?php the_post_thumbnail(array(360, 360)); ?></figure>
                            <span class="more-text">Read More</span>
                        </div>
                        <div class="text-content">
                            <p class="caption"><?php the_title(); ?></p>
                            <div class="content-meta">
                                <span class="date">
                                <i class="far fa-clock" aria-hidden="true"></i> <?php the_time('Y.n.j H:m'); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata();
            endif; ?>
            <?php endwhile;    // 繰り返し処理終了 ?>
            <?php else :    // 投稿がない場合 ?>
            <?php endif;    // 条件分岐終了 ?>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>