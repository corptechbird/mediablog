<?php
/*
Template Name: Ranking
*/
?>
<?php get_header(); ?>
<style type="text/css">
    div.mywpp li {
    display: inline-block;
    vertical-align: top;
    width: 9em;
    margin-right: 5px;
    font-size: 13px;
    line-height: 1em;
    }
</style>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <div class="newentry">Weekly Popular Ranking</div>
            <?php
            // views post metaで記事のPV情報を取得する
            setPostViews(get_the_ID());
            $ranking = 1;
            // ループ開始
            query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=10&order=ASC'); while(have_posts()) : the_post(); ?>
            <?php if($ranking < 4){ ?>
            <div class="rankingTop">
            <?php echo $ranking; ?>
            </div>
            <?php } else { ?>
            <div class="ranking">
            <?php echo $ranking; ?>
            </div>
            <?php } ?>
            <!-- サムネイルの表示 -->
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
                                    <div class="content-meta">
                                        <span class="date">
                                        <span class="far fa-clock" aria-hidden="true"></span> <?php the_time('Y.m.d') ?> <?php the_time(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a> 

            <?php $ranking += 1; ?>
            <?php endwhile; ?>
            <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>