<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div id="main">
            <div class="single">
                    <?php if(function_exists("the_breadcrumb")){the_breadcrumb();} ?>
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
                                <h3 class="ribbon17">Pick up</h3>
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
                    <?php endwhile; ?>
                    <?php $wp_query = null; $wp_query = $temp; ?>
            </div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>