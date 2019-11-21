<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

		</div><!-- #content -->

			<footer class="site-footer" role="contentinfo">
			
				<div class="nav-container">
					
						<div id="site-navigation" class="main-navigation" >
							<nav class="links">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav>
						</div>
						<div class="brought-to">
							<a  href="<?php echo esc_url( '');?>"><?php printf( esc_html( 'Brought to you by ' ),  );?> </a>
							<a id= "red-link" href='https://redacademy.com'>RED Academy</a>
						</div>
				
				</div>
				<!-- </div>.site-info -->
			</footer>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
