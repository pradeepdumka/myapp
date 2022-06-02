 

<?php
/**
 * Template Name: Spa Home Page 
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
 
 
get_header(); ?>
<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="about-top-agileits-w3layouts">
			<div class="col-md-4 about-left-w3-agileits">
				<div class="title-main-w3ls">
					<h3 class="title-w3-agile"><span>A</span>bout <span>U</span>s</h3>
				</div>
			</div>
			<div class="col-md-8 about-right-w3-agileits">
				<h3>We offer a wide selection of spa services</h3>
				<p class="w3_agileits_para">Suspendisse ornare sed purus a imperdiet. Integer viverra nisi orci, in volutpat leo ornare vitae. Nulla faucibus, arcu at consequat vulputate, turpis metus blandit urna.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<div class="col-md-4 about-bottoml-agileits">
		</div>
		<div class="col-md-8 about-bottomr-agileits">
			<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><span>M</span>ake <span>A</span>n <span>A</span>ppointment <span>N</span>ow</h3>
			</div>
				<div class="form-agileits">
				<form action="#" method="post">
					<h6>Service and date</h6>
						<select class="form-control name">
							<option>Please Select Your Service</option>
							<option>Oil Massage ($59.00)</option>
							<option>Relax Day ($199.00)</option>
							<option>Spa & Beauty ($299.00)</option>
							<option>Relax Day (for two $399.00)</option>
						</select>
						<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" placeholder="mm/dd/yyyy" required="">
					<div class="clearfix"> </div>
					<h6>Personal information</h6>
						<input class="name" type="text" name="First Name" placeholder="First Name" required="">
						<input type="text" name="Last Name" placeholder="Last Name" required="">
						<input class="name" type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone" placeholder="Phone" required="">
						<div class="clearfix"> </div>
						<div class="wthree-text"> 
							<ul> 
								<li>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span> Please send me latest news & updates</span> 
									</label> 
								</li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" value="Submit">
				</form>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/about.png" alt=" " class="img-responsive" />
		</div>
		<div class="clearfix"> </div>
	
</div>
<!-- //about -->
<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<div class="title-main-w3ls">
			<h3 class="title-w3-agile"><span>I</span>ncredible <span>S</span>ervices</h3>
		</div>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>01</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>1.Supreme Teamwork</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>02</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>2.Massage Rituals</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>03</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>3.Body Treatments</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>04</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>4.Oil Massage</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>05</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>5.Aroma Therapy</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="col-md-3 agile_offer_grid">
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>06</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4>6.Other services</h4>
						<p class="w3_agileits_service_para">Praesent nec blandit lorem.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><span>M</span>eet <span>O</span>ur <span>T</span>eam</h3>
			</div>
			<div class="w3_testimonials_grids">
				<div class="col-md-3 w3layouts_team_grid">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/team1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social">
									<li><a href="#" class="facebook">
										  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="twitter"> 
										  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="instagram">
										  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								</ul>
							</figcaption>			
						</figure>
					</div>
					<h4>Stella Stratton</h4>
					<p>Physiotherapist</p>
				</div>
				<div class="col-md-3 w3layouts_team_grid">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/team2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social">
									<li><a href="#" class="facebook">
										  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="twitter"> 
										  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="instagram">
										  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								</ul>
							</figcaption>			
						</figure>
					</div>
					<h4>Lisa Mario</h4>
					<p>Beautician</p>
				</div>
				<div class="col-md-3 w3layouts_team_grid">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/team3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social">
									<li><a href="#" class="facebook">
										  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="twitter"> 
										  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="instagram">
										  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								</ul>
							</figcaption>			
						</figure>
					</div>
					<h4>Theresa Bell </h4>
					<p>Makeup artist</p>
				</div>
				<div class="col-md-3 w3layouts_team_grid">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/team4.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social">
									<li><a href="#" class="facebook">
										  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="twitter"> 
										  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="instagram">
										  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								</ul>
							</figcaption>			
						</figure>
					</div>
					<h4>Ema Wayans</h4>
					<p>Physiotherapist</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
 
<!-- Modal1 -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Spa Sublime</h4>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/modal1.jpg" alt=" " class="img-responsive">
										<h5>Quis nostrum exercitationem</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<!-- Modal4 -->
						<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Spa Sublime</h4>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/modal2.jpg" alt=" " class="img-responsive">
										<h5>Quis nostrum exercitationem</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal4 -->
<!-- Modal5 -->
						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Spa Sublime</h4>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/modal3.jpg" alt=" " class="img-responsive">
										<h5>Quis nostrum exercitationem</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal5 -->
<!-- Modal6 -->
						<div class="modal fade" id="myModal6" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Spa Sublime</h4>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/modal4.jpg" alt=" " class="img-responsive">
										<h5>Quis nostrum exercitationem</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal6 -->
<!-- Modal7 -->
						<div class="modal fade" id="myModal7" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Spa Sublime</h4>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/bann.jpg" alt=" " class="img-responsive">
										<h5>Dedicated to inspiring Life in Balance.</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal7 -->
<!-- Gallery -->
<div id="gallery" class="gallery">  
		<div class="container">
			<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><span>T</span>reatments & <span>S</span>ervices</h3>
			</div>
		</div>
		<div class="agileinfo-gallery-row">
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g1.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g1.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					    <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div> 
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g2.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g2.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					   <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g3.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g3.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					   <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g4.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g4.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					   <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g5.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g5.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					   <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div> 
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g6.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g6.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					  <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g7.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g7.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					    <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="<?php echo get_template_directory_uri() ?>/assets/images/images/g8.jpg" class="imghvr-hinge-right figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/g8.jpg" alt="" title="Spa Sublime Image"/> 
					<div class="agile-figcaption">
					<h4>Spa Sublime</h4>
					   <p>Wide variety of wellness treatments</p>
					</div>
				</a> 
			</div>
			<div class="clearfix"> </div>
			
		</div> 
	</div>
<!-- //Gallery -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
		<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><span>C</span>ustomers <span>S</span>ays</h3>
			</div>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Ema Wayans <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/t1.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mark Rosy <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/t2.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mario Andretti <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/images/t3.jpg" alt=" " class="img-responsive" />
									
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- contact -->
	<div id="contact" class="contact">
		<div class="container">
			<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><span>C</span>ontact <span>U</span>s</h3>
			</div>
			<div class="contact-info">
				<ul>
					<li><i class="fa fa-location-arrow" aria-hidden="true"></i><h5>Address<span>Aegertweg 4, 8305, Switzerland</span></h5></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><h5>Call Us<span>+1 (100)222-0-33</span></h5></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><h5>Mail Us<span><a href="mailto:info@example.com">info@example.com</a></span></h5></li>
				</ul>
			</div>
		  
		</div>
	</div>
	<!-- //contact -->
<!-- Map -->
<div class="map-w3-agile">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.008530322881!2d8.621557715686505!3d47.41177477917224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479075250b1e228f%3A0xa9f347199c63a87!2sSpandex+AG!5e0!3m2!1sen!2sin!4v1495014952061"></iframe>
</div>
<!-- //Map -->
<?php get_footer(); ?>