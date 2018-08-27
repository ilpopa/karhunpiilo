<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'frontpagefull' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper fp-full-wrapper" id="wrapper-frontpagefull">
		
        <div class="<?php echo esc_attr( $container ); ?>" id="wrapper-frontpagefull-content" tabindex="-1">

            <div class="row">

                <?php dynamic_sidebar( 'frontpagefull' ); ?>

            </div>

        </div>
    
	</div><!-- #wrapper-frontpagefull -->

<?php endif; ?>
