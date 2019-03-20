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
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $cat[0]->category_nicename; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/<?php echo $cat[0]->category_nicename; ?>.png" alt="<?php echo $post_type; ?> Image" width="360" />
                    <?php } else { ?>
                        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/eyecatch.png" alt="Eye Catch Image" width="360" /> -->
                        <img src="https://raw.githubusercontent.com/corptechbird/mediablog/master/images/eyecatch.png" alt="Eye Catch Image" width="360" />
                <?php } ?>
                </a>
            </figure>
            <div id="sns-buttons" class="sns-buttons-pc">
  <ul class="snsb snsb-balloon">
    <li class="balloon-btn twitter-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://twitter.com/search?q=<?php echo urlencode(get_the_permalink()); ?>" target="blank" class="arrow-box-link twitter-arrow-box-link" rel="nofollow">
            <span class="social-count twitter-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://twitter.com/share?text=<?php the_title() ?>&url=<?php the_permalink() ?>" target="blank" class="balloon-btn-link twitter-balloon-btn-link" rel="nofollow">
          <i class="icon-twitter"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn facebook-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>" target="blank" class="arrow-box-link facebook-arrow-box-link" rel="nofollow">
            <span class="social-count facebook-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>" target="blank" class="balloon-btn-link facebook-balloon-btn-link" rel="nofollow">
          <i class="icon-facebook"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn googleplus-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://plus.google.com/share?url=<?php echo rawurlencode(get_permalink($post->ID)) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="blank" class="arrow-box-link googleplus-arrow-box-link" rel="nofollow">
            <span class="googleplus-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://plus.google.com/share?url=<?php echo rawurlencode(get_permalink($post->ID)) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="blank" class="balloon-btn-link googleplus-balloon-btn-link" rel="nofollow">
          <i class="icon-googleplus"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn hatena-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="http://b.hatena.ne.jp/entry/<?php the_permalink() ?>" target="blank" class="arrow-box-link hatena-arrow-box-link" rel="nofollow">
            <span class="social-count hatebu-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink() ?>&title=<?php echo get_encoded_title( get_the_title() ) ?>" target="blank" class="balloon-btn-link hatena-balloon-btn-link" rel="nofollow">
          <i class="icon-hatena"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn pocket-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="arrow-box-link pocket-arrow-box-link" rel="nofollow">
            <span class="social-count pocket-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="balloon-btn-link pocket-balloon-btn-link" rel="nofollow">
          <i class="icon-pocket"></i>
        </a>
      </span>
    </li>
  </ul>
</div>
<div style="clear:both"></div>
            <div class="title"><?php the_title(); ?></div>
            <div class="update">Updated：<?php echo get_the_modified_date('d.m.Y'); ?></div>
            <?php the_content(); ?>
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
        <div class="newentry">Related Articles</div>     
        <ul style="list-style-type:decimal; padding-left: 40px;">
            <?php $args = array(
                'numberposts' => 600,
                'post_type' => $post_type,
                'category_name' => $cat[0]->category_nicename,
                'order' => 'DESC' 
            );
            $counter = 0;
            $posts = get_posts( $args );
            if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
            <?php if($counter>0 && $counter%40==0):?>
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
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>
            <?php $counter+=1; ?>  
            <?php endforeach; ?>
            <?php else : ?>
                <li><p>The page not found</p></li>
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
                                        <img src="https://raw.githubusercontent.com/theOstrichClub/MediaBlog/master/images/<?php echo $term->slug; ?>.png" alt="Eye Catch Image" width="360" height="220" />
                                    </figure>
                                    <span class="more-text">Read More</span>
                                </div>
                                <div class="text-content">
                                <p class="caption">Technical information about <?php echo $term->name; ?> is provided. Articles include a lot of photos, videos and careful explanation of programs to make it easy for beginners to understand.</p>
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