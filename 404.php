<?php get_header(); ?>          
    <div id="contents">
        <div class="post">
            <div class="newentry"></div>
            <?php if ( have_posts() ) : ?>
            <div class="cards">
                <div class="cards-inside">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                        <div class="l-card">
                            <div class="l-thumbnail">
                                <figure class="thumbnail-wrapper">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail(array(360, 360));
                                    } else { ?>
                                    <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" height="240" /> -->
                                    <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/eyecatch.png" alt="Eye Catch Image" width="360" height="240" />
                                <?php } ?>
                                </figure>
                                <span class="more-text">Read More</span>
                            </div>
                            <div class="text-content">
                                <p class="caption"><?php the_title(); ?></p>
                            </div>
                        </div>
                    </a> 
                    <?php endwhile; ?>
                </div>
            </div>
            <p class="pagenation">
            <?php
                $big = 9999999999;
                $arg = array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'current' => max( 1, get_query_var('paged') ),
                    'total'   => $wp_query->max_num_pages,
                    'prev_text' => '«',
                    'next_text' => '»'
                );
                echo paginate_links($arg);
            ?>
            </p>
            <?php else : ?>
            <div class="notfound">
                <h3>Page Not Found</h3>
                <p>Sorry. The page you were looking for could not be found.</p>
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></div>
            </div>
            <?php endif; ?>
            <div class="newentry"></div>
            <div class="cards">
                <div class="cards-inside">
                <?php
                    $args = array(
                        'orderby' => 'name'
                    );
                    $categories = get_categories( $args );
                    foreach ( $categories as $term ) {
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/<?php echo $term->slug; ?>" title="<?php echo $term->name; ?>">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" /> -->
                                        <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                <p class="caption">Technical information about <?php echo $term->name; ?> is provided. Articles include a lot of photos, videos and careful explanation of programs to make it easy for beginners to understand.</p>
                                </div>
                            </div>
                        </a>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>