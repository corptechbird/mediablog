<?php get_header(); ?>           
    <div id="contents">
        <div class="post">
            <div class="post-main">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
                $post_type = get_post_type();
                $post_name = ""; 
                if ($post_type == 'python') {
                    $post_name = "Python";
                } elseif ($post_type == 'swift') {
                    $post_name = "Swift";
                } elseif ($post_type == 'javascript') {
                    $post_name = "JavaScript";
                } elseif ($post_type == 'ruby') {
                    $post_name = "Ruby";
                }
                ?>
                <figure class="frame"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $post_type ?>/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $post_type ?>.png" alt="<?php echo $post_type ?>画像" width="360"></a></figure>
                <p class="title"><?php the_title(); ?></p>
                <div class="tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
                <?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
                <div class="ads" style="margin-bottom:20px;">
                    <div class="adleft">
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:320px;height:100px"
                        data-ad-client="ca-pub-2330122305834701"
                        data-ad-slot="4335446353"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                    <div class="adright">
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:320px;height:100px"
                            data-ad-client="ca-pub-2330122305834701"
                            data-ad-slot="4335446353"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <hr class="clear">
                </div>
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
            <div class="newentry">『逆引き<?php echo $post_name; ?>』記事一覧</div>     
            <ul>
                <?php $args = array(
                    'numberposts' => -1,                //表示（取得）する記事の数
                    'post_type' => $post_type    //投稿タイプの指定
                );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                <?php else : //記事が無い場合 ?>
                    <li><p>No Article</p></li>
                <?php endif;
                wp_reset_postdata(); //クエリのリセット ?>
            </ul>
            <div class="afterpost">
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
                                    <p class="caption"><?php echo $value; ?></p>
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