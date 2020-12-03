<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/components/slick-slider/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/components/slick-slider/slick-theme.css"/>
  </head>
<?php wp_head(); ?>
</head>
<?php
echo "<h2>Header!</h2>";
?>
<body <?php body_class(); ?>>
