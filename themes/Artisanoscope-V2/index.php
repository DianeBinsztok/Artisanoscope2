<?php
/*
 * Template Name: Artisanoscope
 */
if (is_front_page()) {
    // Header spécial pour la page d'accueil
    get_header("home");
    the_content();
    get_footer();
} else {
    // Header global
    get_header();
    the_content();
    get_footer();
}