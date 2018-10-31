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
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="アイキャッチ画像" width="360" height="240" />
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
                    <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home へ戻る</a></div>
                </div>
            <?php endif; ?>
            <div class="newentry"></div>
            <div class="cards">
                <div class="cards-inside">
                    <a href="http://techbird.site:8080/tools" title="Data Science Automator">  
                        <div class="l-card">
                            <div class="l-thumbnail">
                                <figure class="thumbnail-wrapper">
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/automator.png" alt="Eye Catch Image" width="360" height="220" />
                                </figure>
                                <span class="more-text">Read More</span>
                            </div>
                            <div class="text-content">
                                <p class="caption">This tool realizes the basic overhead processing necessary for data science with one click. You will be able to confirm the number of CSV records for each element at a glance.</p>
                            </div>
                        </div>
                    </a>
                    <?php $array = array("datascience", "python", "swift", "android", "kotlin");
                    foreach($array as $value){
                        $value_name = ""; 
                        if ($value == 'datascience') {
                            $value_name = "Data Science";
                        } elseif ($value == 'python') {
                            $value_name = "Python";
                        } elseif ($value == 'swift') {
                            $value_name = "Swift";
                        } elseif ($value == 'android') {
                            $value_name = "Android";
                        } elseif ($value == 'kotlin') {
                            $value_name = "Kotlin";
                        }
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="<?php echo $value; ?> Dictionary">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <p class="caption">This document shows the program of <?php echo $value_name; ?>, images and videos of the execution results at a glance. This is suitable for beginners to use as reference.</p>
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