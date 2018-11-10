<?php get_header(); ?>          
    <div id="contents">
        <div class="post">        
            <?php if ( have_posts() ) : ?>
            <div class="ads" style="margin-bottom:20px;">
            <ins class="adsbygoogle"
                style="display:inline-block;width:728px;height:90px"
                data-ad-client="ca-pub-2330122305834701"
                data-ad-slot="3318403188"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <div class="newentry"><p class="front-title">Newly Arrived Articles</p></div>
            <?php $args = array(
        'posts_per_page' => 20,
        'post_type' => 'any',
        'order' => 'ASC' 
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        echo '<ul style="margin-bottom:30px;">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
            <li style="border-bottom: 1px solid #d7d7d7;">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php
        }
        echo '</ul>';
        wp_reset_postdata();
    } else {
    } ?>


            <div class="ads" style="margin-bottom:20px;">
            <ins class="adsbygoogle"
                style="display:inline-block;width:728px;height:90px"
                data-ad-client="ca-pub-2330122305834701"
                data-ad-slot="3318403188"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <div class="newentry"><p class="front-title">TECHBIRD Service List</p></div>
            <div class="cards">
                <div class="cards-inside">
                    <?php $array = array("datascience", "datascience_cn", "python", "python_cn", "swift", "swift_cn");
                    foreach($array as $value){
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="<?php echo $value; ?> Dictionary">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="Eyecatch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <?php 
                                        if ($value == 'datascience') {
                                            $value = "Data Science";
                                        } elseif ($value == 'datascience_cn') {
                                            $value = "Data Science";
                                        } elseif ($value == 'python') {
                                            $value = "Python";
                                        } elseif ($value == 'python_cn') {
                                            $value = "Python";
                                        } elseif ($value == 'swift') {
                                            $value = "Swift";
                                        } elseif ($value == 'swift_cn') {
                                            $value = "Swift";
                                        }
                                    ?>
                                    <p class="caption">This document shows the program of <?php echo $value; ?>, images and videos of the execution results at a glance. This is suitable for beginners to use as reference.</p>
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
        </div>
    </div>
<?php get_footer(); ?>