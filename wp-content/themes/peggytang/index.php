<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 */

get_header(); ?>

<section class="hero hero--short">
  <div class="hero__inner">
    <h1>Blog</h1>
  </div>
</section>

Testing


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="container row">
        <ul class="ul--posts">
          <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <li>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post">
                <h4 class="post__title"><?php the_title(); ?></h4>    
                <p class="post__excerpt">Post excerpt! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <small><?php the_date() ?> | <?php the_author() ?></small>
              </a>
            </li>
    
          <?php endwhile; endif; ?>

        </ul>
      </div>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>