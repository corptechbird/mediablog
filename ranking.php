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

            // ループ開始
            query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post(); ?>

            <!-- サムネイルの表示 -->
            <div class="col-sm-4 col-xs-4">
                <a href="<?php echo get_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
                </a>
            </div>

            <!-- タイトルの表示 -->
            <div class="col-sm-8 col-xs-8">
                <p>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </p>
            </div>

            <?php endwhile; ?>
            <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>