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
        <form action="https://docs.google.com/forms/d/e/1FAIpQLScESylDuJPQCz5-mq0dnVB7Qzkl9ttU9z7yRtRNijBCgcXSYg/formResponse">
    <label for="name">Name</label>
    <input id="name" type="text" name="entry.2005620554">
    <label for="email">Mail</label>
    <input id="email" type="text" name="entry.1045781291" placeholder="example@mail.co.jp">
    <label for="title">Title</label>
    <input id="title" type="text" name="entry.1065046570">
    <label for="msg">Message</label>
    <textarea id="msg" name="entry.839337160"></textarea>
    <button type="submit" name="button" value="Submit"></button>
    </form>
        <div class="newentry">CONTACT</div>
        <div class="cards">
            <?php echo do_shortcode('[contact-form-7 id="257" title="contact"]'); ?>
        </div>
        <div class="newentry"></div>
    </div>
</div><!-- /#main -->
<?php get_footer(); ?>