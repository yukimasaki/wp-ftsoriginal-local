<?php

/**
 * @index.php
 */
?>

<?php get_header(); ?>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <?php
    if (have_posts()) {
      while (have_posts()) : the_post();
    ?>
        <div class="flex flex-wrap w-full mb-20">
          <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"><?php the_title(); ?></h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
          </div>
          <p class="lg:w-1/2 w-full leading-relaxed text-gray-500"><?php the_content(); ?></p>
        </div>
    <?php
      endwhile;
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>