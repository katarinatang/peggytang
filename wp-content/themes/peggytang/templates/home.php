<?php
/**
 * Template Name: Home
 */
get_header(); ?>



<?php
  /*
   * Hero
   */
  $hero_title_alt = get_post_meta( $post->ID, '_interntest_hero_title_alt', true );
  $hero_subtitle  = get_post_meta( $post->ID, '_interntest_hero_subtitle', true );

  // Fallbacks
  $hero_title     = !empty( $hero_title_alt ) ? $hero_title_alt : get_the_title();
  $hero_subtitle  = !empty( $hero_subtitle ) ? '<h2 class="h3 alt">' . $hero_subtitle . '</h2>' : null;

  // Hero class 
  if( has_post_thumbnail() ) {
    $hero_class   = 'hero--with-bg';
  }
  else {
    $hero_class   = 'hero--short';
  }
?>

<section class="hero <?php echo $hero_class; ?>">
  <?php
  // If has featured image
  if( has_post_thumbnail() ) :
    $images = array(
      'retina'    => wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-image-2x' ),
      'default'   => wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-image-1x' ),
    );
  ?>
    <img class="responsive-img hero__bg" style=""
      src="<?php echo $images['default'][0]; ?>" 
      srcset="<?php echo $images['default'][0]; ?> 1x,
              <?php echo $images['retina'][0]; ?> 2x">
  <?php endif; ?>

  <div class="hero__inner">
    <h1><?php echo $hero_title; ?></h1>
    <?php echo $hero_subtitle; ?>
  </div>
</section>




<?php 
/**
 * @todo Page Content
 * Default Loop
 * https://codex.wordpress.org/The_Loop
 */
?>
<section class="section section--large">
  <div class="container container--med text-center">
    <h3>Here is something interesting</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sapiente eum, corrupti at esse magnam soluta quo mollitia adipisci in perferendis. Culpa fuga adipisci quas quis voluptas quibusdam, ratione id.</p>
  </div>
</section>


<!-- Dogs -->

<section class="section">

<?php 
//set variable
  $args = array(
    'post_type'       => 'dogs',
    'posts_per_page'  => 4
  );
// The Query
  $dog_query = new WP_Query( $args );

  // The Loop
  if ( $dog_query->have_posts() ) :
    while ( $dog_query->have_posts() ) :
      $dog_query->the_post();
?>

  <div class="row">
    <div class="dog">
          <div class="dog__bg">
            <img class=""
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dogs/brutus@1x.jpg">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="">
              <div class="inner">
                <h4 class="dog__title"><?php the_title(); ?></h4>
                <span class="dog__sep"></span>
                <p class="dog__desc"><?php the_excerpt() ?></p>
              </div>
            </a>
          </div>
        </div>
<?php endwhile; endif; WP_reset_query(); ?>
      </div>

</section>





<section class="section--large">
  <div class="container text-center">
    <header class="section__header">
      <h3>More Cool Stuff Here</h3>
    </header>
    <div class="row">
      <div class="cta col-4">
        <h4>Adopt</h4>
        <p>Short description</p>
        <a href="<?php echo home_url('/blog'); ?>" class="btn btn--primary">Learn More</a>
      </div>
      <div class="cta col-4">
        <h4>Donate</h4>
        <p>Short description</p>
        <a href="<?php echo home_url('/blog'); ?>" class="btn btn--primary">Learn More</a>
      </div>
      <div class="cta col-4">
        <h4>Volunteer</h4>
        <p>Short description</p>
        <a href="<?php echo home_url('/blog'); ?>" class="btn btn--primary">Learn More</a>
      </div>
    </div>
  </div>
</section>


<!-- Staff : Tracy Approved Method -->
<section class="section">

<?php 
//set variable
  $args = array(
    'post_type'       => 'staff',
    'posts_per_page'  => 4
  );
// The Query
  $staff_query = new WP_Query( $args ); ?>

<?php if ( $staff_query->have_posts() ) : ?>

  <div class="row">

    <?php while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?>

      <div class="dog">
        <div class="dog__bg">
          <img class=""
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/adele.jpg">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="">
            <div class="inner">
              <h4 class="dog__title"><?php the_title(); ?></h4>
              <span class="dog__sep"></span>
              <p class="dog__desc"><?php the_excerpt() ?></p>
            </div>
          </a>
        </div>
      </div>

    <?php endwhile; ?>

    <?php else : ?>
      <p>No posts.</p>
    <?php endif; WP_reset_query(); ?>
  </div>

</section>



<?php get_footer(); ?>