<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Title" content="trenažieri, trenažieris, trenažieru veikals, fitnesa trenažieri, majas trenazieri, mājas trenažieri, sporta trenažieri, trenažieru veikali, fitnesa inventārs, skriešanas trenažieri, trenazieri, velotrenažieri, velotrenazieri, velo trenažieri, velo trenazieri,  skrejceļi, skrejceli, skrejceliņi, skrejcelini,  eliptiskie trenažieri, eliptiskie trenazieri, kardiotrenažieri, kardiotrenazieri, hanteles, svaru">
	<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php } ?>
	<title>
		<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				echo " - " . wp_title(''); }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title(''); echo ' - '; }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home()) {
				 echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged;
			}
		?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.png" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="hide"></div>
<div id="wrapper" class="clearfix container-fluid">

	<header class="clearfix row">

		<div class="col-12">

			<nav class="navbar navbar-light bg-light navbar-expand-lg navbar-fixed-top">
				<a class="navbar-brand" href="<?php bloginfo('siteurl');?>">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="trenazieri.lv - Profesionālie un mājas trenažieri, konsultācijas un serviss">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar">
				<?php wp_nav_menu( array('menu' => 'main-menu',
									'container' => '222',
									'container_class' => 'global-navigation-container',
									'menu_class' => 'navbar-nav'));?>
				</div>
			</nav>

		</div>

	</header>