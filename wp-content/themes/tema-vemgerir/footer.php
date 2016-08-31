<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema-vemgerir
 */

?>

	</div><!-- #content -->

	<div id="colophon" class="site-footer">
		<div class="site-info container">
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo-footer-image" src="<?php echo get_template_directory_uri() . '/img/LogoFooter.svg'; ?>" alt="VemGerir-footer-header">				
			</a>

			<div class="info-vemrir-footer">
				<p>Rua 24 de maio, 797 - Rio de Janeiro</p>
				<p> | </p>
				<p>contato@vemgerir.com.br</p>
				<p> | </p>
				<p> (21) 99614-0632</p>
			</div>

		
			<?php
			// [RODRIGO] Carrega textos footer
			?>
			<!-- <a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'tema-vemgerir' ) ); ?>"> -->
			<!-- <?php //printf( esc_html__( 'Proudly powered by %s', 'tema-vemgerir' ), 'WordPress' ); ?> --><!-- </a> -->

		</div><!-- .site-info -->
	</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
