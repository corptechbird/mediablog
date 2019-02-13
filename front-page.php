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
            <div class="newentry">Newly Arrived Articles</div>
            <?php $args = array(
        'orderby' => 'modified',
        'post_status' => 'publish',
        'posts_per_page' => 40,
        'category_name' => 'python',
        'post_type' => array('post'),
        'order' => 'DESC' 
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
            <div class="newentry">Category List</div>
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
                                        <img src="https://github.com/theOstrichClub/MediaBlog/blob/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <p class="caption"><?php echo $term->name; ?>に関する現役のエンジニアのノウハウ・トレンドのトピックなど技術的な情報を提供しています。コード・プログラムの丁寧な解説をはじめ、初心者にもわかりやすいように写真や動画を多く使用しています。</p>
                                </div>
                            </div>
                        </a>
                        <?php
                    } ?>
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