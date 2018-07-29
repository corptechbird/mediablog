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
<!-- Contents -->             
    <div id="contents">
        <div class="post">
            <div class="newentry">CONTACT</div>
                <div class="cards">
                    <?php echo do_shortcode('[contact-form-7 id="257" title="contact"]'); ?>
                </div>
            </div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>