<?php
/*
Template Name: Contact
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
<div id="contents">
    <div class="post">
    </form>
        <div class="newentry">Contact</div>
        <div class="cards">
            <?php echo do_shortcode('[contact-form-7 id="7" title="contact"]'); ?>
        </div>
        <div class="newentry"></div>
    </div>
</div>
<?php get_footer(); ?>