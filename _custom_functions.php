<?php



function sevencirlces_custom_scripts()
{

    wp_enqueue_style('sevencircles-custom-style', get_theme_file_uri('sass/style.css'));

    wp_enqueue_script('sevencircles-slider', get_template_directory_uri() . '/js/hero-slider.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'sevencirlces_custom_scripts');
