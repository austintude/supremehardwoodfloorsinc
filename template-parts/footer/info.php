<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>


<div class="site-info">
	<div id="supremeSocial">
		<div id="socialIcon1">
		<a href="https://www.facebook.com/supremehardwoodfloorsinc/" target="_blank" rel="noopener noreferrer">
		<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/facebook-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="facebook icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon2">
		<a href="#" target="_blank" rel="noopener noreferrer">
		<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="instagram icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon3">
		<a href="https://twitter.com/SupremeHardwood" target="_blank" rel="noopener noreferrer">
			<amp-img 
				src="<?php echo get_template_directory_uri() ?>/assets/images/twitter-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="twitter icon">
			</amp-img>
</a>
		</div>
</div>
<div id="supremeLogo">
<?php the_custom_logo(); ?>
</div>
	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div><!-- .site-info -->
