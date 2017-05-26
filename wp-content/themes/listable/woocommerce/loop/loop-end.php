<?php
/**
 * Product Loop End
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */ ?>
	</div><!-- .grid  .job_listings -->
	<?php 	the_posts_navigation(array(
		'prev_text'          => esc_html__( 'Older products', 'listable' ),
		'next_text'          => esc_html__( 'Newer products', 'listable' ),
		'screen_reader_text' => esc_html__( 'Products navigation', 'listable' ),
	) ); ?>
</div><!-- .postacards -->

