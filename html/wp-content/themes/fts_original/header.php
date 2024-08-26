<?php

/**
 * @header.php
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="__containerAll">
    <?php
    // nav > ul > li が生成される
    $args = array(
      'menu'  => 'header_menu', //functionsで登録した名前
      'container' => 'nav',
      'container_id' => '',
      'container_class' => '__navigation',
      'menu_id' => '',
      'menu_class' => '',
    );
    wp_nav_menu($args);
    ?>
    <div class="__hamburgerIcon" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>