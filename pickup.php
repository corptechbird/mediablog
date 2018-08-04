<?php
/*
Template Name: Pick up
*/
?>
<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <div class="newentry"></div>
            <div class="cards">
                    <div class="cards-inside">
                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('post_type=post' . '&posts_per_page=10' . '&tag=pickup' . '&paged=' . $paged);
                ?>
                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <!-- ループさせたい内容 -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                        <div class="l-card ribbon_box">
                            <h3 class="ribbon17">Pick Up</h3>
                            <div class="l-thumbnail">
                                <figure class="thumbnail-wrapper"><?php the_post_thumbnail(array(360, 360)); ?></figure>
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
                <?php endwhile; ?>
                </div>
                        </div>
                <?php $wp_query = null; $wp_query = $temp; ?>
                <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>