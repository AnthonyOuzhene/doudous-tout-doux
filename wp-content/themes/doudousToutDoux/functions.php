<?php

/**
 * Undocumented function
 *
 * @return void
 */
function theme_support() {
    // Ajout du support pour les images mises en avant
    add_theme_support('post-thumbnails');
    // Ajout du support pour les titres SEO
    add_theme_support('title-tag');
    // Ajout du support pour les menus
    add_theme_support('menus');
    // Ajout du support pour les logos
    add_theme_support('custom-logo');
}