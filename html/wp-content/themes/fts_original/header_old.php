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
  <script src="https://cdn.tailwindcss.com"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="flex flex-col">

    <!-- PC用メニュー -->
    <?php if (!wp_is_mobile()) : ?>
      <header class="bg-gray-100">
        <div class="__fade-in-header container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <?php
          $args = array(
            'menu'  => 'header_menu', //functionsで登録した名前
            'container' => 'nav',
            'container_id' => '',
            'container_class' => 'md:mr-auto flex items-center justify-center',
            'menu_id' => '',
            'menu_class' => 'w-full flex flex-wrap items-center text-base text-sm justify-center gap-8',
          );
          wp_nav_menu($args);
          ?>
        </div>
      </header>
    <?php endif; ?>

    <!-- スマホ用メニュー -->
    <header class="bg-gray-100">
      <div class="__fade-in-header __header-items-parent md:hidden fixed z-50 w-full flex justify-between p-5">
        <span class="__header-logo text-xl font-bold flex items-center"><a href="/">Eftos</a></span>
        <div class="__nav-menu-icon text-xl" onclick="toggleMenu()">
          <span></span> <span></span> <span></span>
        </div>
      </div>
      <nav class="__nav-menu hidden w-full h-svh bg-white fixed top-0 left-0 z-10">
        <div class="h-full flex flex-col justify-center">
          <span class="text-3xl font-bold px-5 pb-20">Eftos</span>
          <ul class="grid grid-cols-2 text-sm gap-y-4 px-5">
            <?php
            $menu_items = wp_get_nav_menu_items('main-menu', array());
            foreach ($menu_items as $menu_item) {
              echo '<li><a href="' . esc_url($menu_item->url) . '">';
              echo '<div class="flex flex-col gap-y-1">';
              echo '<span class="text-base">' . $menu_item->title . '</span>';
              echo '<span class="text-xs text-gray-400">' . $menu_item->menu_description . '</span>';
              echo '</div>';
              echo '</a></li>';
            }
            ?>
          </ul>
        </div>
      </nav>
    </header>

    <main class="bg-gray-100">