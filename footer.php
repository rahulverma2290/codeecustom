<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="first-footer">
								<?php dynamic_sidebar('sidebar-2'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="second-footer">
								<?php dynamic_sidebar('sidebar-3'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="third-footer">
								<?php dynamic_sidebar('sidebar-4'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );

				/* if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				*/
				?>
			</div><!-- container -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
