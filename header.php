<?php
/*
*	Saltbox header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-container">
	<div class="site-wrapper">

		<header class="site-header">
			<nav class="site-main-nav">
				
				<?php if(has_nav_menu('header-left')): ?>
					<div class="nav-header-left">
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'header-left',
								'menu_id'        => 'nav-header-left',
							)); 
						?>
					</div>
				<?php endif; ?>

				<img class="header-logo" src="saltbox-theatre-collective-logo.png" alt="Saltbox Theatre Collective">

				<?php if(has_nav_menu('header-right')): ?>
					<div class="nav-header-right">
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'header-right',
								'menu_id'        => 'nav-header-right',
							)); 
						?>
					</div>
				<?php endif; ?>

			</nav>
		</header>
		
		<div class="site-main-content">