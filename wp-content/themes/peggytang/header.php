<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" class="header">
		<div class="container">
<!-- 			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"></a>
 -->			
			<?php 
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'header__menu menu',
				'theme_location' => 'main_menu',
				'link_before'    => '',
				'link_after'     => '',
			) ); ?>

<!-- 			<button type="button" role="button" aria-label="Toggle Navigation" id="header__toggle" class="header__toggle">
 -->	      <span class="lines"></span>
	    </button>
		</div>

	</header>


	<div id="app"> 
