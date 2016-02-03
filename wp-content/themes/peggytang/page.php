<?php
/**
 * Default Page Template
 *
 *  Template Name: Page
 */
get_header(); ?>


<?php 
/*
 * Hero
 */
?>
<section class="hero hero--short">
  <div class="hero__inner">
    <h1><?php the_title(); ?></h1>
  </div>
</section>


<?php 
/**
 * @todo Page Content
 * Default Loop
 * https://codex.wordpress.org/The_Loop
 */
?>

<section class="section section--large section--vh">
  <div class="container">
    
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <h4><?php the_content(); ?></h4>
    
    <?php endwhile; ?>
    <?php endif; ?>

  </div>

</section>




<?php get_footer(); ?>