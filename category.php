<?php get_header(); ?>            
    <div id="contents">
        <div class="post">
        <?php $cat_info = get_category( $cat ); ?>
            <?php
            $wp_query = new WP_Query();
            $param = array(
                'posts_per_page' => '600', 
                'post_type' => 'post', 
                'category_name' => esc_html( $cat_info->slug ),
                'post_status' => 'publish', 
                'orderby' => 'title', 
                'order' => 'ASC' 
            );
            $wp_query->query($param);
            if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <?php endwhile; endif; ?>
            <?php if ( have_posts() ) : ?>
            <figure class="frame">
                <?php if (get_post_type() == 'post') { ?>
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo esc_html( $cat_info->slug ); ?>.png" alt="<?php echo $cat_info->name; ?> Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/<?php echo esc_html( $cat_info->slug ); ?>.png" alt="<?php echo $cat_info->name; ?> Image" width="360" />
                    <?php } else { ?>
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                <?php } ?>
            </figure>
            <div class="newentry">『<?php echo esc_html( $cat_info->name ); ?>』Article List</div>
            <ul>
            <?php $counter = 0; ?>  
            <?php while ( have_posts() ) : the_post(); ?>
            <?php if($counter>0 && $counter%10==0):?>
            <div class="ads" style="margin-bottom:20px;">
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2330122305834701"
                    data-ad-slot="9848871375"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <?php endif; ?>
            <li style="border-bottom: 1px solid #d7d7d7; display: flex; flex-wrap: wrap;"> 
                <div class="left-pannel"><?php the_post_thumbnail(array(100, 65, true)); ?></div>
                <div class="right-pannel"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
            </li> 
            <?php $counter+=1; ?>  
            <?php endwhile; ?>     
            </ul>
            <?php else : ?>
            <div class="notfound">
                <h3>Page Not Found</h3>
                <p>Sorry. The page you were looking for could not be found.</p>
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></div>
            </div>
            <?php endif; ?>
            <div class="newentry"></div>
            <div class="ads" style="margin-bottom:20px;">
                <div class="adleft">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:600px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="8660278409"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="adright">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:600px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="8660278409"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr class="clear">
            </div>
            <div class="afterpost">
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
                                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                <p class="caption">Information of <?php echo $term->name; ?> is provided. Articles include a lot of photos, videos and careful explanation of programs to make it easy for beginners to understand.</p>
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