<?php
/*
* This file contains the function definitions for the Child Theme.
* This file is loaded BEFORE the equivalent version in the Parent Theme.
*/

function mhm_twentyseventeen_enqueue_styles()
{
    // Stop the custom webfont files from being loaded
    wp_dequeue_style('twentyseventeen-fonts');
    wp_deregister_style('twentyseventeen-fonts');

    wp_dequeue_style('twentyseventeen-style');
    wp_deregister_style('twentyseventeen-style');
    wp_enqueue_style('twentyseventeen-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('twentyseventeen-child-style', get_stylesheet_directory_uri().'/style.css', array('twentyseventeen-style'));
}

/*
 * The priority must be more than 10. The parent styles are loaded
 * with priority 10, so any code to deregister them has to be run later than that.
 */
add_action('wp_enqueue_scripts', 'mhm_twentyseventeen_enqueue_styles', 20);
