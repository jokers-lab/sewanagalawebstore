<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sewanagalawebstore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/main.css'; ?>">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header>
			<nav class="px-4 bg-white shadow-md justify-center gap-4 drop-shadow-md flex py-4">
				<div class="font-semibold text-sm capitalize">
					<a href="<?php echo site_url('/'); ?>" class="underline-none">Home</a>
				</div>
				<div class="font-semibold text-sm capitalize">
					<a href="<?php site_url('/about'); ?>" class="underline-none">About</a>
				</div>
				<div class="font-semibold text-sm capitalize">
					<a href="<?php site_url('/kameshwari'); ?>" class="underline-none">Kameshwari</a>
				</div>
				<div id="img-id">
					<img src="<?php echo get_template_directory_uri() . './images/logo.png' ?>" alt="base_logo">
				</div>
				<div class="font-semibold text-sm capitalize">
					<a href="<?php echo site_url('/shop') ?>" class="underline-none">Products</a>
				</div>
				<div class="font-semibold text-sm capitalize">
					<a href="" class="underline-none">Founder's Treatment</a>
				</div>
				<div class="font-semibold text-sm capitalize">
					<a href="" class="underline-none">Contact Us</a>
				</div>

				<section class="">
					<div><a href="">Cart</a></div>
				</section>
			</nav>
		</header>
		<div class="background-main">