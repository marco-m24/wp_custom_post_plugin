<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1>Da plugin</h1>

		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'storefront_single_post_before' );


			echo '<p class="mrcclass">utilizzo foglio di stile</p>';

			get_template_part( 'content', 'single' );


			the_terms( $post->ID, 'genere', 'Genere: ', ', ', ' ' );

			echo "<p><b>Editore:</b> ";
			$key_1_value = get_post_meta( get_the_ID(), 'meta-box-text', true );
			// Check if the custom field has a value.
			if ( ! empty( $key_1_value ) ) {
			    echo $key_1_value;
			}
			echo "</p>";


			echo do_shortcode("[mrclimited]");

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
