<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Spa Sublime a Beauty and spa </title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Spa ,Goa Spa, spa in goa" />
	<link href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/jquery-ui.css" /><!-- calender css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/style11.css" /><!-- menu css -->
	<link href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/style.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
	<link href='<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/simplelightbox.min.css' rel='stylesheet' type='text/css'><!-- Light-box css -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
	<!-- //font-awesome icons -->

	<!-- web-fonts  
	<link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>
	<!-- banner -->
	<div class="container">
		<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top">
									<div class="agileits-banner-info">
										<h3><span>W</span>ellness <span>A</span>nd <span>S</span>pa</h3>
										<p>Dedicated to inspiring Life in Balance.</p>
									</div>	
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top1">
									<div class="agileits-banner-info">
										<h3><span>S</span>oft & <span>P</span>ure</h3>
										<p>Give yourself a moment of wellness</p>
									</div>	
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top2">
									<div class="agileits-banner-info">
										<h3><span>M</span>ade <span>F</span>or <span>y</span>ou</h3>
										<p>Famous Treatment For Clear Skin.</p>
									</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top3">
									<div class="agileits-banner-info">
										<h3><span>F</span>eel <span>F</span>antastic</h3>
										<p>Day Spa Treatments and Services</p>
									</div>
							</div>
						</li>
					</ul>
				</div>
				<a href="#" class="find-about" data-toggle="modal" data-target="#myModal7">Find out more</a>
				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner -->

 