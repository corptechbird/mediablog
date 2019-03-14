<?php
/*
Template Name: Privacy
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
            <div class="newentry">Privacy Policy</div>
            <div class="page">
            <em><strong>About ad delivery</strong></em>

This site uses a third-party advertisement service "Google Adsense Google Adsense".

Advertisement distribution providers may use cookies to display advertisements that match the user's interests.

For details on setting disabling cookie and Google adsense, please see "Advertisement - Policies & Terms - Google".

A third party may provide content and publicity, gather information directly from visitors, set cookies on visitor's browser, and recognize it.

&nbsp;

<em><strong>About access analysis tool</strong></em>

On this site, we use "Google Analytics" access analysis tool by Google.

This Google Analytics uses cookies to collect traffic data.

This traffic data is collected anonymously, it does not identify individuals.

Since this function can refuse collecting by invalidating cookie, please confirm the setting of your browser.

&nbsp;

<em><strong>Disclaimer</strong></em>

Copyright rights, portrait rights, etc. of images posted on this site belong to each rights owner.

It is not the purpose of violating the right. If there is a problem in the content of the article and the publication image etc., please contact each right holder directly with mail. After confirmation, we will correspond.

When moved from this site to another site by link, banner, etc, we are not responsible for any information or services provided at the visited site.

Regarding the content and information on this site, we are trying to post as accurate information as possible, but there are also cases where erroneous information has entered or information is outdated.

Please note that we can not assume any responsibility for damages caused by contents posted on this site.
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="newentry"></div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>