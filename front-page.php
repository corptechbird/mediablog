<?php get_header(); ?>          
    <div id="contents">
        <div class="post">        
            <?php if ( have_posts() ) : ?>
            <ul class="slider">
            <li class="slide">
                <a class="slide__link" href="#">
                    <img src="http://img.youtube.com/vi/iltRT2WzXIE/sddefault.jpg" alt="image01">
                    <span class="slide__content-wrap">
                        <span class="slide__content">
                            <h2 class="slide__title">slider1 text here!</h2>
                            <p class="slide__text">
                            Lorem ipsum dolor sit amet, 以下省略        
                            </p>
                        </span>
                    </span>
                </a>
            </li>
            <li><a href="https://bluegatepro.com/task-have-fun-kedo-hanikami/"><img src="http://img.youtube.com/vi/PQW2EJ2Wb7M/maxresdefault.jpg" alt="image01"></a></li>
                <li><a href="https://bluegatepro.com/amiina-caravan/"><img src="http://img.youtube.com/vi/iltRT2WzXIE/sddefault.jpg" alt="image02"></a></li>
                <li><a href="https://bluegatepro.com/wa-sutathe-world-standard-galbi-girls-be-ambitious/"><img src="http://img.youtube.com/vi/uTtlmB_hV1M/maxresdefault.jpg" alt="image03"></a></li>
            
            <!--以下省略-->
        </ul>
            <ul class="slider">
                </ul>
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
            <div class="newentry">Newly Arrived</div>
            <?php $args = array(
        'orderby' => 'modified',
        'post_status' => 'publish',
        'posts_per_page' => 40,
        'post_type' => array('post'),
        'order' => 'DESC' 
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        echo '<ul style="margin-bottom:30px;">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><li style="padding-left:10px; border-bottom: 1px solid #d7d7d7; display: flex; flex-wrap: wrap;"> 
                <div style="width: 100px; margin: 0;"><?php the_post_thumbnail(array(100, 65, true)); ?></div>
                <div style="padding-left:8px;width:550px;"><?php the_title(); ?></div>
            </li> 
            </a>
        <?php
        }
        echo '</ul>';
        wp_reset_postdata();
    } else {
    } ?>
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
                                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                    <p class="caption">Information of music trend in <?php echo $term->name; ?> is provided. Articles include a lot of official youtube videos, official SNS photos and careful explanation of music group and songs.</p>
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
        </div>
    </div>
<?php get_footer(); ?>