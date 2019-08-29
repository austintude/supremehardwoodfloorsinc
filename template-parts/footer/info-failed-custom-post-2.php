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
	<?php $loop = new WP_Query( array( 'post_type' => 'social_links', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		<?php while( $loop->have_posts() ) : $loop->$the_post(); ?>
		<div id="<?php the_field('social_icon_location'); ?>">
			<a href="<?php echo $facebook_link; ?>" target="_blank">
				<amp-img 
					src="<?php the_field('social_icon') ['url']; ?>"
					width="1"
					height="1"
					layout="responsive"
					alt="<?php echo $facebook_icon['alt']; ?>">
				</amp-img>
			</a>
		</div>
		
		<?php endwhile ?>
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
