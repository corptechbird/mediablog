<?php get_header(); ?>        
    <div id="contents">
        <div class="post">
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
            <div class="ads">
            <ins class="adsbygoogle"
                style="display:inline-block;width:728px;height:90px"
                data-ad-client="ca-pub-2330122305834701"
                data-ad-slot="3318403188"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <div class="title"><?php the_title(); ?></div>
            <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
            <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
            <!-- コンテンツ開始 -->
            <?php the_content(); ?>
            <!-- コンテンツ終了 -->
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
        <div class="newentry">『 <?php echo $cat[0]->cat_name; ?> 』Article List</div>     
        <ul style="list-style-type:decimal; padding-left: 40px;">
            <?php $args = array(
                'numberposts' => 100,
                'post_type' => $post_type,
                'category_name' => $cat[0]->category_nicename,
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
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
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
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>