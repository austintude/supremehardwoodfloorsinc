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
			<amp-img 
				src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/facebook-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="facebook icon">
			</amp-img>
		</div>
		<div id="socialIcon2">
			<amp-img 
				src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/instagram-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="instagram icon">
			</amp-img>
		</div>
		<div id="socialIcon3">
			<amp-img 
				src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/twitter-icon-blue.png"
				width="1"
				height="1"
				layout="responsive"
				alt="twitter icon">
			</amp-img>
		</div>
</div>
<div id="supremeLogo">
	<amp-img 
			src="../wp-content/themes/wprig-supremehardwoodfloorsinc/assets/images/logorgb-min.png"
			width="3"
			height="1"
			layout="responsive"
			alt="showroom icon">
		</amp-img>
</div>
	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div><!-- .site-info -->
