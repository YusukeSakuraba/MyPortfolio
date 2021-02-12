<?php
function my_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_setup');

// css
function add_stylesheet()
{
    // style.cssの読み込み
    wp_enqueue_style(
        'style',
        get_stylesheet_directory_uri().'/css/style.css',
        array()
    );
    // confirmページのみでCSS読み込み
    if (is_page('confirm')) {
        wp_enqueue_style(
            'confirm',
            get_stylesheet_directory_uri().'/css/form-confirm.css',
            array()
        );
    }
    // thanksページのみでCSS読み込み
    if (is_page('thanks')) {
        wp_enqueue_style(
            'thanks',
            get_stylesheet_directory_uri().'/css/form-thanks.css',
            array()
        );
    }
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// CDNから読み込み
function load_from_cdn()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
    // リセットcssの読み込み
    wp_enqueue_style(
        'reset',
        'https://unpkg.com/ress/dist/ress.min.css',
        array()
    );
    // font-awesomeの読み込み
    wp_enqueue_style(
        'font-awesome',
        'https://use.fontawesome.com/releases/v5.10.2/css/all.css'
    );
    // jqueryの読み込み
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.5.1.min.js',
        array(),
        '3.5.1'
    );
       // lightboxのjs読み込み
       wp_enqueue_script(
        'lightbox',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js',
        array(),
        '2.11.3'
    );
    // lightboxのcss読み込み
    wp_enqueue_style(
        'lightbox-css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css',
        array(),
        '2.11.3'
    );
}
add_action('init', 'load_from_cdn');

// jsファイル
function add_script()
{
 
    // autoKana.jsの読み込み
    wp_enqueue_script(
        'autokana',
        get_template_directory_uri().'/js/jquery.autoKana.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_script');

// wp-scss　ページをロードするたびにscssファイルをコンパイル
define('WP_SCSS_ALWAYS_RECOMPILE', true);
