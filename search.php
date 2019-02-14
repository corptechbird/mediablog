<?php get_header(); ?>
<?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
    ?>
    <div id="contents">
        <div class="post">
            <div class="newentry">
            <?php if ($search_query == "") { ?>
                All Articles
                <?php
            } elseif( $total_results > 0 ){?>
                <?php echo $total_results; ?> Results of <?php echo $search_query; ?>
            <?php } ?>
            </div>
            <?php if( $total_results > 0 ):
                if(have_posts()): ?>
                <div class="cards">
                    <div class="cards-inside">
                        <?php while(have_posts()): the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail(array(360, 220));
                                            } elseif (get_post_type() == 'python' || get_post_type() == 'flutter' || get_post_type() == 'go' || get_post_type() == 'swift' || get_post_type() == 'kotlin' || get_post_type() == 'android' || get_post_type() == 'scala' || get_post_type() == 'unity') { ?>
                                                <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo get_post_type(); ?>.png" alt="<?php echo get_post_type(); ?>画像" width="360" height="220" /> -->
                                                <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/<?php echo get_post_type(); ?>.png" alt="<?php echo get_post_type(); ?>画像" width="360" height="220" />
                                            <?php } else { ?>
                                                <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="アイキャッチ画像" width="360" height="220" /> -->
                                                <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/eyecatch.png" alt="アイキャッチ画像" width="360" height="220" />
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
                <?php endif; 
            else: ?>
            <div class="notfound">
                <p>申し訳ありません。お探しのページは見つかりませんでした。</p>
                <?php echo $search_query; ?> に一致する情報は見つかりませんでした。
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home へ戻る</a></div>
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
                                <p class="caption"><?php echo $term->name; ?>に関する現役のエンジニアのノウハウ・トレンドのトピックなど技術的な情報を提供しています。コード・プログラムの丁寧な解説をはじめ、初心者にもわかりやすいように写真や動画を多く使用しています。</p>
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