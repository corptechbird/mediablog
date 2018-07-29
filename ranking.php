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
            <div class="newentry"></div>
            <div>
                <table style="border-collapse:collapse;width:100%;"><tr>
                <th style="padding:0px">Weekly Popular Ranking TOP 10</th>
                </tr><tr>
                <td style="padding:0px"><?php wpp_get_mostpopular('limit=10&range="weekly"&post_type="post"&thumbnail_width=30&thumbnail_height=30&stats_views=0'); ?></td>
                </tr></table>
            </div>
            <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>