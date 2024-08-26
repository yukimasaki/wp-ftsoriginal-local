<?php

/**
 * @page.php
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()) {
  while (have_posts()) : the_post();
?>
    <section class="__pageHero">
      <div><?php the_title(); ?></div>
    </section>
    <section class="__pageContent">
      <?php the_content(); ?>
    </section>
<?php
  endwhile;
}
?>

<?php get_footer(); ?>