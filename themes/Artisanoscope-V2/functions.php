<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

//Le logo
add_theme_support('custom-logo');


// Les feuilles de styles:
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/assets/css/header-style.css');
}