<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

</head>


<body <?php body_class();?>>


<header class="main">
    <?php
				
			$args = array(
				'theme_location' => 'primary'
			);
				
			?>
	<?php wp_nav_menu(  $args ); ?>
</header>
