<?php get_header(); ?>            
    <div id="contents">
        <div class="post">
        <?php $post_name = ""; 
            $slug_name = basename(get_permalink());
            if ($slug_name == 'datascience') {
                $post_name = "Data Science";
            } elseif ($slug_name == 'python') {
                $post_name = "Python";
            } elseif ($slug_name == 'swift') {
                $post_name = "Swift";
            } elseif ($slug_name == 'android') {
                $post_name = "Android";
            } elseif ($slug_name == 'kotlin') {
                $post_name = "Kotlin";
            }
        ?>
            <?php
            $wp_query = new WP_Query();
            $param = array(
                'posts_per_page' => '-1', 
                'post_type' => $slug_name, 
                'post_status' => 'publish', 
                'orderby' => 'ID', 
                'order' => 'ASC' 
            );
            $wp_query->query($param);
            if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <?php endwhile; endif; ?>
            <?php if ( have_posts() ) : ?>
            <figure class="frame">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $post_type ?>/">
                <?php if (has_post_thumbnail()) {
                        the_post_thumbnail(array(360, 220));
                    } elseif (get_post_type() == 'datascience' || get_post_type() == 'python' || get_post_type() == 'swift' || get_post_type() == 'android' || get_post_type() == 'kotlin') { ?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $slug_name; ?>.png" alt="<?php echo $slug_name; ?> Image" width="360" />
                    <?php } else { ?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                <?php } ?>
                </a>
            </figure>
            <div class="newentry"><p class="front-title">『<?php echo $post_name; ?> Reference』Article List</p></div>
            <ul>
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>     
            </ul>
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
            </div>
            <?php endif; ?>
            <div class="newentry"></div>
            <div class="ads" style="margin-bottom:20px;">
                <div class="adleft">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="4283281946"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="adright">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="5240483851"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr class="clear">
            </div>
            <div class="afterpost">
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
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>