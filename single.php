<?php get_header(); ?>           
    <div id="contents">
        <div class="post">
            <div class="post-main">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
                $post_type = get_post_type();
                $post_name = ""; 
                if ($slug_name == 'python') {
                    $post_name = "Python";
                } elseif ($slug_name == 'swift') {
                    $post_name = "Swift";
                } elseif ($slug_name == 'kotlin') {
                    $post_name = "Kotlin";
                } elseif ($slug_name == 'android') {
                    $post_name = "Android";
                }
                ?>
                <figure class="frame">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $post_type ?>/">
                    <?php if (has_post_thumbnail()) {
                            the_post_thumbnail(array(360, 220));
                        } elseif (get_post_type() == 'python' || get_post_type() == 'flutter' || get_post_type() == 'go' || get_post_type() == 'swift' || get_post_type() == 'kotlin' || get_post_type() == 'android' || get_post_type() == 'scala' || get_post_type() == 'unity') { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $post_type; ?>.png" alt="<?php echo $post_name; ?>画像" width="360" />
                        <?php } else { ?>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="アイキャッチ画像" width="360" />
                    <?php } ?>
                    </a>
                </figure>
                <p class="title"><?php the_title(); ?></p>
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
            <div class="newentry">『<?php echo $post_name; ?> Dictionary』Article List</div>     
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
                        <?php $array = array("swift", "python", "android", "kotlin");
                        foreach($array as $value){
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="<?php echo $value; ?> Dictionary">  
                            <div class="l-card">
                                <div class="l-thumbnail">
                                    <figure class="thumbnail-wrapper">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <?php 
                                        if ($slug_name == 'python') {
                                            $post_name = "Python";
                                        } elseif ($slug_name == 'swift') {
                                            $post_name = "Swift";
                                        } elseif ($slug_name == 'kotlin') {
                                            $post_name = "Kotlin";
                                        } elseif ($slug_name == 'android') {
                                            $post_name = "Android";
                                        }
                                    ?>
                                    <p class="caption">This document shows the program of <?php echo $value; ?>, images and videos of the execution results at a glance. This is suitable for beginners to use as reference.</p>
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