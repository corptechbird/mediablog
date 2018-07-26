<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
            <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                <p class="title"><?php the_title(); ?></p>
                <span class="time"><i class="far fa-clock" aria-hidden="true"></i> <?php the_time('Y.n.j H:m'); ?></span>
                <div class="addthis_inline_share_toolbox sns"></div>
                <figure class="frame"><?php the_post_thumbnail(); ?></figure>
            <?php the_content(); ?>
            <div class="addthis_inline_share_toolbox sns"></div>
            <div class="afterpost">
            <div><i class="fas fa-bookmark" aria-hidden="true"></i> 他の人はこちらの記事も読んでいます</div>
                <?php
                    foreach((get_the_category()) as $cat) {
                        $catid = $cat->cat_ID ;
                        break ;
                    }
                    $get_posts_parm = "'numberposts=6&category=" . $catid . "'";
                ?>
                <?php $posts = get_posts($get_posts_parm); ?>
                <?php foreach($posts as $post): ?>
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
            <?php endwhile;    // 繰り返し処理終了 ?>
            <?php else :    // 投稿がない場合 ?>
            <?php endif;    // 条件分岐終了 ?>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>