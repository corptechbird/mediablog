<?php get_header(); ?>        
    <div id="contents">
        <div class="post">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php
            $cat = get_the_category();
            $post_type = get_post_type();
            ?>
            <!-- <figure class="frame">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/<?php echo $cat[0]->category_nicename; ?>/">
                <?php if (has_post_thumbnail()) {
                        the_post_thumbnail(array(360, 220));
                    } elseif (get_post_type() == 'post') { ?>
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/<?php echo $cat[0]->category_nicename; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
                    <?php } else { ?>
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                <?php } ?>
                </a>
            </figure> -->
            <div class="title"><?php the_title(); ?></div>
            <div class="update"><i class="far fa-clock"></i> <?php echo get_the_modified_date('d.m.Y'); ?></div>
            <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if( isset($prev_post) || isset($next_post) ):
            ?>
            <div class="pager-wrapper">
                <?php if(isset($next_post)): ?>
                    <div class="pager-next">
                        <?php next_post_link('%link', '<i class="fas fa-caret-left"></i> next', true); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($prev_post)): ?>
                    <div class="pager-prev">
                        <?php previous_post_link('%link', 'prev <i class="fas fa-caret-right"></i>', true); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php
            $cat = get_the_category();
            $cat = $cat[0];?>
            <div style="text-align:center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/<?php echo $cat->slug; ?>" title="<?php echo $cat->name; ?>"><i class="fas fa-newspaper"></i> 『Music Trend in <?php echo $cat->name; ?>』Article List</a></div>
            <?php the_content(); ?>
            <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if( isset($prev_post) || isset($next_post) ):
            ?>
            <div class="pager-wrapper">
                <?php if(isset($next_post)): ?>
                    <div class="pager-next">
                        <?php next_post_link('%link', '<i class="fas fa-caret-left"></i> next', true); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($prev_post)): ?>
                    <div class="pager-prev">
                        <?php previous_post_link('%link', 'prev <i class="fas fa-caret-right"></i>', true); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
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
        <div class="newentry">See also</div>     
        <ul>
            <?php $args = array(
                'numberposts' => 100,
                'post_type' => 'post',
                'category_name' => 'japan',
                'order' => 'DESC' 
            );
            $counter = 0;
            $posts = get_posts( $args );
            if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
            <?php if($counter>0 && $counter%30==0):?>
            <div class="ads" style="margin-bottom:20px;">
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2330122305834701"
                    data-ad-slot="9848871375"
                    data-ad-format="rectangle"
                    data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <?php endif; ?>
            <li style="padding-left:10px; border-bottom: 1px solid #d7d7d7; display: flex; flex-wrap: wrap;"> 
                <div style="width: 100px; margin: 0;"><?php the_post_thumbnail(array(100, 80, true)); ?></div>
                <div style="padding-left:8px;width:650px;"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
            </li> 
            <?php $counter+=1; ?>  
            <?php endforeach; ?>
            <?php else : ?>
            <div class="notfound">
                <h3>Page Not Found</h3>
                <p>Sorry. The page you were looking for could not be found.</p>
                <div class="notfound-navi"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></div>
            </div>
            <?php endif; ?>
        </ul>
        <div class="afterpost">
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
                                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" /> -->
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
            <?php wp_reset_postdata(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>