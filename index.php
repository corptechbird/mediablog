<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div id="main">
            <div class="post">
                <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                    <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper"><?php the_post_thumbnail(array(360, 360)); ?></figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <p class="caption"><?php the_title(); ?></p>
                                    <div class="content-meta">
                                        <span class="date">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('Y.n.j H:m'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a> 
                    <?php endwhile;    // 繰り返し処理終了 ?>
                <?php else :    // 投稿がない場合 ?>
                    <div class="notfound">
                        <h3>ページが見つかりません</h3>
                        <p>申し訳ありません。お探しのページは見つかりませんでした。</p>
                        <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Home へ戻る</a></div>
                        <?php 
                            query_posts('showposts=20');
                            if (have_posts()) : 
                                while (have_posts()) : 
                                the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                                    <div class="l-card">
                                        <div class="l-thumbnail">
                                            <figure class="thumbnail-wrapper"><?php the_post_thumbnail(array(360, 360)); ?></figure>
                                            <span class="more-text">Read More</span>
                                        </div>
                                        <div class="text-content">
                                            <p class="caption"><?php the_title(); ?></p>
                                            <div class="content-meta">
                                                <span class="date">
                                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('Y.n.j H:m'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a> 
                                <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                <?php endif;    // 条件分岐終了 ?>
            </div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>