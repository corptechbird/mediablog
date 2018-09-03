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
                                        <?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
                                            the_post_thumbnail(array(360, 360));
                                            } else { //アイキャッチ画像を設定していない場合 ?>
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
                    <?php $array = array("swift", "python", "javascript", "ruby");
                        foreach($array as $value){
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="逆引き<?php echo $value; ?>">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="アイキャッチ画像" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <?php 
                                        if ($value == 'python') {
                                            $value = "Python";
                                        } elseif ($value == 'swift') {
                                            $value = "Swift";
                                        } elseif ($value == 'javascript') {
                                            $value = "JavaScript";
                                        } elseif ($value == 'ruby') {
                                            $value = "Ruby";
                                        }
                                    ?>
                                    <p class="caption"><?php echo $value; ?>で実現したいことからプログラムを逆引きできるドキュメントです。初心者から上級者まで、使用用途に応じて幅広くお使いいただけます。</p>
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