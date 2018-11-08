<?php get_header(); ?>            
    <div id="contents">
        <div class="post">
        <?php $post_name = ""; 
            $post_type = basename(get_permalink());
            if ($post_type == 'python') {
                $post_name = "Python";
            } elseif ($post_type == 'python_cn') {
                $post_name = "Python";
            } elseif ($post_type == 'swift') {
                $post_name = "Swift";
            } elseif ($post_type == 'kotlin') {
                $post_name = "Kotlin";
            } elseif ($post_type == 'android') {
                $post_name = "Android";
            } elseif ($post_type == 'datascience') {
                $post_name = "Data Science";
            } elseif ($post_type == 'datascience_cn') {
                $post_name = "Data Science";
            } elseif ($post_type == 'mindcontrol') {
                $post_name = "Mind Control";
            } elseif ($post_type == 'mindcontrol_cn') {
                $post_name = "Mind Control";
            }
        ?>
            <?php
            $wp_query = new WP_Query();
            $param = array(
                'posts_per_page' => '-1', 
                'post_type' => $post_type, 
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
                    } elseif (get_post_type() == 'datascience' || get_post_type() == 'datascience_cn' || get_post_type() == 'python' || get_post_type() == 'python_cn' || get_post_type() == 'mindcontrol' || get_post_type() == 'mindcontrol_cn' || get_post_type() == 'swift' || get_post_type() == 'android' || get_post_type() == 'kotlin') { ?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $post_type; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
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
                    <?php $array = array("datascience", "datascience_cn", "python", "python_cn", "mindcontrol", "mindcontrol_cn", "swift", "android", "kotlin");
                        foreach($array as $value){
                        $value_name = ""; 
                        if ($value == 'datascience') {
                            $value_name = "Data Science";
                        } elseif ($value == 'datascience_cn') {
                            $value_name = "Data Science";
                        } elseif ($value == 'python') {
                            $value_name = "Python";
                        } elseif ($value == 'python_cn') {
                            $value_name = "Python";
                        } elseif ($value == 'mindcontrol') {
                            $value_name = "Mind Control";
                        } elseif ($value == 'mindcontrol_cn') {
                            $value_name = "Mind Control";
                        } elseif ($value == 'swift') {
                            $value_name = "Swift";
                        } elseif ($value == 'swift_cn') {
                            $value_name = "Swift";
                        } elseif ($value == 'android') {
                            $value_name = "Android";
                        } elseif ($value == 'kotlin') {
                            $value_name = "Kotlin";
                        }
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="<?php echo $value; ?> Reference">  
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
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>