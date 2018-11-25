<?php get_header(); ?>            
    <div id="contents">
        <div class="post">
            <div class="newentry"><?php $cat_info = get_category( $cat ); ?><?php echo esc_html( $cat_info->name ); ?></div>
            <?php if ( have_posts() ) : ?>
            <div class="cards">
                <div class="cards-inside">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php else : ?>
            <div class="notfound">
                <h3>Page Not Found</h3>
                <p>Sorry. The page you were looking for could not be found.</p>
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home へ戻る</a></div>
            </div>
            <?php endif; ?>
            <div class="newentry"></div>
            <div class="cards">
                <div class="cards-inside">
                    <?php $array = array("swift", "python", "go", "scala", "android", "kotlin", "flutter", "unity");
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
                                        } elseif ($value == 'flutter') {
                                            $value = "Flutter";
                                        } elseif ($value == 'go') {
                                            $value = "Go";
                                        } elseif ($value == 'swift') {
                                            $value = "Swift";
                                        } elseif ($value == 'kotlin') {
                                            $value = "Kotlin";
                                        } elseif ($value == 'android') {
                                            $value = "Android";
                                        } elseif ($value == 'scala') {
                                            $value = "Scala";
                                        } elseif ($value == 'unity') {
                                            $value = "Unity";
                                        }
                                    ?>
                                    <p class="caption"><?php echo $value; ?>でできることからプログラムを逆引きできるドキュメントです。実行結果の画像を添付していますし、プログラムは動作確認済みなのでコピペでもすぐ動きます。</p>
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