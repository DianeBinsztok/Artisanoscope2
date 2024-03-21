<?php
/*
 * Template Name: Artisanoscope
 */
if (is_front_page()) {
    // This is the blog posts index
    get_header("home");
    the_content();
    get_footer();
} else {
    // This is not the blog posts index
    get_header();
    the_content();
    get_footer();
}
