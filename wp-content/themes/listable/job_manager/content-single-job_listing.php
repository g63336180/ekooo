<?php
/**
 * The template for displaying the WP Job Manager listing details on single listing pages
 *
 * @package Listable
 */

global $post;

$taxonomies = array();
$data_output = '';
$terms = get_the_terms(get_the_ID(), 'job_listing_type');
$termString = '';
if ( ! is_wp_error( $terms ) && ( is_array( $terms ) || is_object( $terms ) ) ) {
	$firstTerm = $terms[0];
	if ( ! $firstTerm == NULL ) {
		$term_id = $firstTerm->term_id;

		$data_output .= 'data-icon="' . listable_get_term_icon_url($term_id) .'"';
		$count = 1;
		foreach ( $terms as $term ) {
			$termString .= $term->name;
			if ( $count != count($terms) ) {
				$termString .= ', ';
			}
			$count++;
		}
	}
}

$listing_is_claimed  = get_post_meta( $post->ID, '_claimed', true );?>

<div class="single_job_listing"
	data-latitude="<?php echo get_post_meta($post->ID, 'geolocation_lat', true); ?>"
	data-longitude="<?php echo get_post_meta($post->ID, 'geolocation_long', true); ?>"
	data-categories="<?php echo $termString; ?>"
	<?php echo $data_output; ?>>

	<?php if ( get_option( 'job_manager_hide_expired_content', 1 ) && 'expired' === $post->post_status ) : ?>
		<div class="job-manager-info"><?php esc_html_e( 'This listing has expired.', 'listable' ); ?></div>
	<?php else : ?>
		<div class="grid">
			<div class="grid__item  column-content  entry-content">
				<header class="entry-header">
					<nav class="single-categories-breadcrumb">
						<a href="<?php echo listable_get_listings_page_url(); ?>"><?php esc_html_e( 'Listings', 'listable' ); ?></a> >>
						<?php
						$term_list = wp_get_post_terms(
							$post->ID,
							'job_listing_category',
							array(
								"fields" => "all",
								'orderby' => 'parent',
							)
						);

						if ( ! empty( $term_list ) && ! is_wp_error( $term_list ) ) {
							// @TODO make them order by parents
							foreach ( $term_list as $key => $term ) {
								echo '<a href="' . esc_url( get_term_link( $term ) ) . '">' . $term->name . '</a>';
								if ( count( $term_list ) - 1 !== $key ) {
									echo ' >>';
								}
							}
						} ?>
					</nav>

					<h1 class="entry-title" itemprop="name"><?php
						echo get_the_title();
						if ( $listing_is_claimed === '1' && function_exists('wpjmcl_init')) {
							echo '<span class="listing-claimed-icon">';
							get_template_part('assets/svg/checked-icon');
							echo '<span>';
						}
					?></h1>
					<?php
					the_company_tagline( '<span class="entry-subtitle" itemprop="description">', '</span>' );

					/**
					 * single_job_listing_start hook
					 *
					 * @hooked job_listing_meta_display - 20
					 * @hooked job_listing_company_display - 30
					 */
					do_action( 'single_job_listing_start' ); ?>
				</header><!-- .entry-header -->
				<?php if ( is_active_sidebar( 'listing_content' ) ) : ?>
					<div class="listing-sidebar  listing-sidebar--main">
						<?php dynamic_sidebar('listing_content'); ?>
					</div>
				<?php endif; ?>
			</div> <!-- / .column-1 -->

			<div class="grid__item  column-sidebar">
				<?php if ( is_active_sidebar( 'listing__sticky_sidebar' ) ) : ?>
					<div class="listing-sidebar  listing-sidebar--top  listing-sidebar--secondary"><?php
						dynamic_sidebar('listing__sticky_sidebar');
					?></div>
				<?php endif;

				if ( is_active_sidebar( 'listing_sidebar' ) ) : ?>
					<div class="listing-sidebar  listing-sidebar--bottom  listing-sidebar--secondary"><?php
						dynamic_sidebar('listing_sidebar');
					?></div>
				<?php endif; ?>

			</div><!-- / .column-2 -->
		</div>
	<?php endif; ?>
</div>