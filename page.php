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
            } elseif ($post_type == 'swift_cn') {
                $post_name = "Swift";
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
                'posts_per_page' => '600', 
                'post_type' => $post_type, 
                'post_status' => 'publish', 
                'orderby' => 'ID', 
                'order' => 'DESC' 
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
                    } elseif (get_post_type() == 'datascience' || get_post_type() == 'datascience_cn' || get_post_type() == 'python' || get_post_type() == 'python_cn' ||  get_post_type() == 'swift' ||  get_post_type() == 'swift_cn' ) { ?>
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $post_type; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/<?php echo $post_type; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
                    <?php } else { ?>
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                <?php } ?>
                </a>
            </figure>
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
            <div class="newentry">Article List</div>
            <ul style="list-style-type:decimal; padding-left: 40px;">
            <?php $counter = 0; ?>  
            <?php while ( have_posts() ) : the_post(); ?>
            <?php if($counter>0 && $counter%20==0):?>
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
            <?php endif; ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>
            <?php $counter+=1; ?>  
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
                                        <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
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
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>