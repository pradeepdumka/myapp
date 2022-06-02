<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

 
<div  <?php echo esc_attr( $wrapper_classes ); ?>" id="home">
	<?php // get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php //get_template_part( 'template-parts/header/site-nav' ); ?>

	<div class="banner-w3layouts" id="home">
	   <div class="overlay overlay-simplegenie">
			<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
			<nav>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="#about" class="scroll">About</a></li>
					<li><a href="#services" class="scroll">Services</a></li>
					<li><a href="#team" class="scroll">Team</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#contact" class="scroll">Contact</a></li>
				</ul>
			</nav>
		</div>
		<section class="header-w3ls"> 
			<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+1 (100)222-0-33</li>	
				</ul>
				
		 
				</div>
			<h1><a href="index.html"><span class="logo-left-w3ls">S</span><span class="logo-right-w3l">pa<br>ublime</span></a></h1>
			<div class="clearfix"> </div>
		 
	    </section>
<!-- //menu -->
 
