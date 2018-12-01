<?php get_header(); ?>        
    <div id="contents">
        <div class="post">
            <div class="post-main">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
                $cat = get_the_category();
                $post_type = get_post_type();
                ?>
                <figure class="frame">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/<?php echo $cat[0]->category_nicename; ?>/">
                    <?php if (has_post_thumbnail()) {
                            the_post_thumbnail(array(360, 220));
                        } elseif (get_post_type() == 'post') { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $cat[0]->category_nicename; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
                        <?php } elseif (get_post_type() == 'datascience' || get_post_type() == 'datascience_cn' || get_post_type() == 'python' || get_post_type() == 'python_cn' || get_post_type() == 'swift' || get_post_type() == 'swift_cn') { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $post_type; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
                        <?php } else { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                    <?php } ?>
                    </a>
                </figure>
                <div class="title"><?php the_title(); ?></div>
                <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
                <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
                <?php the_content(); ?>
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
                <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
            </div>
            <div class="newentry">『<?php echo $cat[0]->category_nicename; ?> 』Article List</div>     
            <ul style="list-style-type:decimal; padding-left: 40px;">
                <?php $args = array(
                    'numberposts' => -1,
                    'post_type' => $post_type,
                    'category' => $cat[0]->category_nicename,
                    'order' => 'DESC' 
                );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                <?php else : ?>
                    <li><p>No Article</p></li>
                <?php endif;
                wp_reset_postdata(); ?>
            </ul>
            <div class="afterpost">
                <div class="cards">
                    <div class="cards-inside">
                        <?php $array = array("datascience", "datascience_cn", "python", "python_cn", "swift", "swift_cn");
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
                            } elseif ($value == 'swift') {
                                $value_name = "Swift";
                            } elseif ($value == 'swift_cn') {
                                $value_name = "Swift";
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
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>