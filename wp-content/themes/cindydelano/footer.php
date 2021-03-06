<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'simone_credits' ); ?>
			<?php
			printf(
				/* translators: %s = text link: WordPress, URL: http://wordpress.org/ */
				__( 'Proudly powered by %s', 'simone' ),
				'<a href="http://wordpress.org/" rel="generator">' . esc_attr__( 'WordPress', 'simone' ) . '</a>'
				); ?>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>