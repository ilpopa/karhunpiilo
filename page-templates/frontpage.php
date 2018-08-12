<?php
/**
 * Template Name: Front page Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="fp-header">
<?php get_template_part( 'global-templates/hero' ); ?>
</div>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

    </div><!-- Container end -->
    <!-- Divide -->
    <div class="container">
		<div class="row">
			<div class="col-md-12" style="visibility: visible; animation-name: fadeIn;">
				<hr class="my-5">
			</div>
		</div>
    </div>
    <!-- Divide -->
    <div class="container">
		<section>
			<h2 class="section-heading text-center">Arvosteluja</h2>
			<p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
            
            <?php echo do_shortcode( '[site_reviews count="2" pagination="ajax" class="arvio" id="jko5pkn1"]' ); ?>
            
            <div class="col-md-6 offset-md-3">
                <h2 class="section-heading text-center">Arvostele Karhunpiilo</h2>
                <?php echo do_shortcode( '[site_reviews_form]' ); ?>   
            </div>         
		</section>	
    </div>
    <?php /*
    $reviews = glsr_get_reviews([
	"count"  => -1,
	"rating" => 1,
]);

foreach( $reviews as $review ) {
    echo $review->rating; 
    echo $review->content;
    echo $review->author;
} */?>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
