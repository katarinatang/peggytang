<footer id="footer" class="footer" role="contentinfo">
    <div class="container row text-center">
      <?php 
        wp_nav_menu( array(
          'container'      => '',
          'menu_class'     => 'menu menu--transparent menu--footer col-9',
          'theme_location' => 'footer_menu',
          'link_before'    => '',
          'link_after'     => '',
        ) );
      ?>
      <ul class="social-menu social-menu--footer col-3">
        <li class="social-menu__item"><a class="fa fa-instagram" href=""></a></li>
        <li class="social-menu__item"><a class="fa fa-pinterest" href=""></a></li>
        <li class="social-menu__item"><a class="fa fa-facebook-square" href=""></a></li>
        
      </ul>
    </div>
  </footer>

	</div><!-- #app -->
  <?php wp_footer(); ?>

</body>
</html>