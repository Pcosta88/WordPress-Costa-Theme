<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Costa
 */

?>

<?php wp_footer(); ?>


<!--creates div area for footer widger -->
<div id="footer-widget" class="secondary">

<?php
/* creates widget for footer space */ 
if(is_active_sidebar('footer-widget')){
dynamic_sidebar('footer-widget');
}
?>
</div>

  
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Costa' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Costa' ), 'PatPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Costa' ), 'Costa', '<a href="http://underscores.me/" rel="designer">PatPress</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


</body>
</html>
