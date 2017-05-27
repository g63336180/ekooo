<?php

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-mapbox-token="<?php echo listable_get_option('mapbox_token', ''); ?>" data-mapbox-style="<?php echo listable_get_option('mapbox_style', ''); ?>">
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content">
<?php esc_html_e( 'Skip to content', 'listable' ); ?>
</a>
<div id="content" class="site-content js-header-height-padding-top">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php while ( have_posts() ) : the_post();

			do_action( 'listable_before_page_content' );

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. ?>
    </main>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
