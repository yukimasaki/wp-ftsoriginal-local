<?php

/**
 * @functions.php
 */

if (!defined('ABSPATH')) exit;

//テーマファイルの読み込み用
if (!function_exists('setup_original')) {
  function setup_original()
  {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery'));
    add_theme_support('automatic-feed-links');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('editor-style');
    add_theme_support('wp-block-style');
    add_theme_support('html5', array(
      'search-form', 'comment-form', 'comment-list'
    ));
    add_post_type_support('page', 'excerpt');
  }
}
add_action('after_setup_theme', 'setup_original');

//ヘッダータイトルの読みこみ用
function change_title_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'change_title_separator');

//テーマのスタイルシートの読み込み
if (!function_exists('setup_styles')) {
  function setup_styles()
  {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0');
    wp_enqueue_style('original-style', get_template_directory_uri() . '/css/original-style.css', array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'setup_styles');

//テーマのJavaScriptの読み込み
if (!function_exists('setup_scripts')) {
  function setup_scripts()
  {
    wp_enqueue_script('my-script', get_template_directory_uri() . '/scripts/main.js');
  }
}
add_action('wp_enqueue_scripts', 'setup_scripts');

//不必要なヘッダータグの取り外しとScriptのフッター移動
function move_theme_scripts()
{
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
}
add_action('wp_enqueue_scripts', 'move_theme_scripts');

// メニュー
register_nav_menus(
  array(
    'header_menu' => 'ヘッダーメニュー',
    'footer_menu' => 'フッターメニュー',
  )
);
