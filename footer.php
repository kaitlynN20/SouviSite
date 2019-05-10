<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Souv
 */

?>

</div><!-- #content -->
<div class="footer-banner">
    <div>
        <img src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/banner-arrow.png">
    </div>
    <p>Subscribe to our newsletter</p>
</div>

	<footer id="site-footer">
      <?php  wp_nav_menu( array( 'footer Menu' => 'footer', 'container_class' => 'footer-container' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
