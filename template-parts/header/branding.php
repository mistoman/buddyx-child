<?php
/**
 * Template part for displaying the header branding
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

?>

<div class="site-branding">
	<div class="site-logo-wrapper">
		<?php the_custom_logo(); ?>
	</div>
	<div class="site-branding-inner">
		<?php
		if ( is_front_page() && is_home() ) {

			apply_filters( 'ln_title', '' );

			?>
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php
		} else {
			?>
			<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
			<?php
			apply_filters( 'ln_title' , '' );
		}
		?>

	</div>
</div><!-- .site-branding -->
