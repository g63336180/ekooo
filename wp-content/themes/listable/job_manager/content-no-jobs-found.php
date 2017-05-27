<?php
/**
 * The template for displaying the WP Job Manager no found message
 *
 * @package Listable
 */


$submit_listing_page_id = get_option( 'job_manager_submit_job_form_page_id', false ); ?>

<div class="no-results">
    <h2><?php esc_html_e( 'No Results', 'listable' ); ?></h2>
    <p class="no-margins"><?php esc_html_e( 'There are no listings matching your search.', 'listable' ); ?></p>

    <?php if ( ! empty( $submit_listing_page_id ) ) { ?>
        <p class="no-margins">
            <?php esc_html_e( 'Try changing your filters or ', 'listable' ); ?>
            <a href="<?php echo get_permalink($submit_listing_page_id); ?>" class="underlined-link">
            <?php esc_html_e( 'create a listing', 'listable' ); ?></a>
            .
        </p>
    <?php } ?>

    <a class="btn clear-results-btn reset" href="<?php echo listable_get_listings_page_url(); ?>"><?php esc_html_e( 'Clear Filters ', 'listable' ); ?></a>

</div>
