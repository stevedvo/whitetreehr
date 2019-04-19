<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
		<?php wp_head(); ?>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
	</head>
	<body id="top" <?php body_class(); ?>>
		<div id="header" class="mm-fixed-top">
			<a href="#mm-menu"><img src="<?= get_template_directory_uri(); ?>/images/mobile-menu.png"></a>
		</div>
		<div class="mobile-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="logo">
<?php
							if (startpoint_get_option('startpoint_logo') != '')
							{
?>
								<a href="<?= esc_url( home_url('/') ); ?>"><img src="<?= startpoint_get_option('startpoint_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
<?php
							}
							else
							{
?>
								<div class="logo-header">
									<h1><a href="<?= esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
									<p><?php bloginfo('description'); ?></p>
								</div>
<?php
							}
?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="menu-wrapper single-page-nav clearfix">
			<div class="menu-wrapper-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<!-- logo -->
							<div class="logo">
<?php
								if (startpoint_get_option('startpoint_logo') != '')
								{
?>
									<a href="<?= esc_url( home_url('/') ); ?>"><img src="<?= startpoint_get_option('startpoint_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
<?php
								}
								else
								{
?>
									<div class="logo-header">
										<h1><a href="<?= esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
										<p><?php bloginfo('description'); ?></p>
									</div>
<?php
								}
?>
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<nav class="menu-sp">
<?php
								if (is_front_page())
								{
									startpoint_frontpage_nav();
								}
								else
								{
									startpoint_nav();
								}
?>
							</nav>

							<div style="display:none">
								<nav class="menu2" id="mm-menu">
<?php
									if (is_front_page())
									{
										startpoint_mobilefront_nav();
									}
									else
									{
										startpoint_mobile_nav();
									}
?>
								</nav>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- *** Header Ends *** -->
		<div class="menu-wrapper1 notvisible single-page-nav clearfix">
			<div class="menu-wrapper-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<!-- logo -->
							<div class="logo">
<?php
								if (startpoint_get_option('startpoint_logo') != '')
								{
?>
									<a href="<?= home_url(); ?>"><img src="<?= startpoint_get_option('startpoint_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
<?php
								}
								else
								{
?>
									<div class="logo-header">
										<h1><a href="<?= esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
										<p><?php bloginfo('description'); ?></p>
									</div>
<?php
								}
?>
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<nav class="menu-sp">
<?php
								if (is_front_page())
								{
									startpoint_frontpage_nav();
								}
								else
								{
									startpoint_nav();
								}
?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>