<?php 
/*
 Template Name: bang
 */
global $wp_scripts;
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo the_title();?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
		<link media="all" type="text/css" rel="stylesheet" href="<?php print XH_SOCIAL_URL?>/assets/css/social.css">	
		<?php 
		if(isset($wp_scripts->registered['jquery-core'])&&isset($wp_scripts->registered['jquery-core']->src)){
		    ?>
		    <script src="<?php echo $wp_scripts->base_url.$wp_scripts->registered['jquery-core']->src; ?>"></script>
		    <?php 
		}else{
		    ?><script src="wp-content/uploads/ajax/jquery-3.2.1.min.js"></script><?php 
		}
		?>
		<style type="text/css">body{background:#f5f5f5;}</style>
	</head>
	<body>	
	 <?php
	    while ( have_posts() ) : 
	       the_post();
	       the_content();
		// End the loop.
		endwhile;
	 ?>
	  <div class="xh-user-register" style="margin-bottom:20px"></div>
	</body>
</html>