<?php get_header(); ?>        
    <div id="contents">
        <div class="post">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
            <div class="title"><?php the_title(); ?></div>
            <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
            <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
            <?php the_content(); ?>
            
            <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
        
            <?php 
            wp_reset_postdata(); ?>
        
            <?php wp_reset_postdata(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>