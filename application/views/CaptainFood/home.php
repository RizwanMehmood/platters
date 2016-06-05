<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Captain Food | HomeMade Food Delivery Service</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="A HomeMade Food Delivery Service">
		<meta name="keywords" content="HomeMade Food,Lunch,Order Online,Chefs,Pakistani Food">
		<meta name="author" content="Captain Food Pvt Ltd">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php $this->load->view('CaptainFood/includes/header')?>
		
	</head>
	
	<body>

	<!-- Page Wrapper -->
	<div class="wrapper">
				<!-- Header Start -->
				<div class="header navbar-fixed-top" style="background-color:#000;">
					<div class="container" style="width:100%;">
						<div class="row" style="width:100%">
							<div class="col-md-3 col-sm-3" style="margin-left:3%">
							<a href="home.php">
								<img class="img-responsive" src="<?php echo base_url()?>assets/img/logo final 01.png" width="150px" height="50px" style="margin-top:5%;margin-bottom:5%" alt=""/>
							</a>
							</div>
							<?php $this->load->view('CaptainFood/includes/navbar')?>
						<div class="col-md-3 col-sm-3" style="margin-top:2%;">
							<div class="header-contact nav">
								<span style="float:right;">
								<i class="fa fa-phone red"></i> 0343-4343969
								</span>
								</div>
							
						 </div>
						</div>
					</div><!-- / .container -->
				</div>
				
				<!-- Header End -->
				
				<!-- Banner Start -->
				
				<!-- Slider Start 
				#################################
					- THEMEPUNCH BANNER -
				#################################	-->
				
				<div class="tp-banner-container">
				<section id="home" style="background-color:#000;">
					<div class="tp-banner" >
						<ul>	<!-- SLIDE  -->
							<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>assets/img/slider/slide2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							</li>
							<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1500" >
								<img src="<?php echo base_url()?>assets/img/slider/cover01.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt=""/>
							</li>
							<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="600" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>assets/img/slider/transparent.png" style="background-color:#fea501" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
								<!-- LAYERS NR. 1 -->
								<div class="tp-caption lfl"
									data-x="left"
									data-y="100"
									data-speed="800"
									data-start="1200"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Linear.easeNone"
									data-captionhidden="off"><img class="img-responsive" src="<?php echo base_url()?>assets/img/slider/s35.png" alt="" />
								</div>
								<!-- LAYERS NR. 2 -->
								<div class="tp-caption lfr large_bold_grey heading white"
									data-x="right" data-hoffset="-10"
									data-y="120"
									data-speed="800"
									data-start="2000"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Linear.easeNone"
									data-captionhidden="off">Tasty Yammi
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption whitedivider3px customin customout tp-resizeme"
									data-x="right" data-hoffset="-20"
									data-y="210" data-voffset="0"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="2300"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="500"
									style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
									data-x="right" data-hoffset="-10"
									data-y="245" data-voffset="0"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="1000"
									data-start="2700"
									data-easing="Power3.easeInOut"
									data-splitin="chars"
									data-splitout="chars"
									data-elementdelay="0.08"
									data-endelementdelay="0.08"
									data-endspeed="500"
									style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Hamburger
								</div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption finewide_verysmall_white_mw white customin customout tp-resizeme text-right paragraph"
									data-x="right" data-hoffset="-10"
									data-y="300" 
									data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="1000"
									data-start="3500"
									data-easing="Power3.easeInOut"
									data-splitin="lines"
									data-splitout="lines"
									data-elementdelay="0.2"
									data-endelementdelay="0.08"
									data-endspeed="300"
									style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consetetur  sadipscing elitr,<br/> nonumy voluptu ansetetur  sadipscing elit. <br/> sed diam quisquam est nonumy voluptu vero eos et.
								</div>
							</li>
							<li data-transition="cube" data-slotamount="7" data-masterspeed="600" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>assets/img/slider/slide2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
								<!-- LAYERS NR. 1 -->
								<div class="tp-caption lfl"
									data-x="110"
									data-y="130"
									data-speed="800"
									data-start="1500"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Power4.easeIn"
									data-captionhidden="off"><img src="<?php echo base_url()?>assets/img/slider/s31.png" class="img-responsive" alt="" />
								</div>
								<!-- LAYERS NR. 2 -->
								<div class="tp-caption lfl"
									data-x="80"
									data-y="265"
									data-speed="800"
									data-start="2200"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Power4.easeIn"
									data-captionhidden="off"><img src="<?php echo base_url()?>assets/img/slider/s33.png" class="img-responsive" alt="" />
								</div>
								<!-- LAYERS NR. 3 -->
								<div class="tp-caption lfl"
									data-x="450"
									data-y="312"
									data-speed="800"
									data-start="2700"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Power4.easeIn"
									data-captionhidden="off"><img src="<?php echo base_url()?>assets/img/slider/s34.png" class="img-responsive" alt="" />
								</div>
								<!-- LAYERS NR. 4 -->
								<div class="tp-caption sfr  thinheadline_dark white"
									data-x="right" data-hoffset="-10" 
									data-y="90"
									data-speed="800"
									data-start="3200"
									data-easing="Power4.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									style="z-index: 3">Online
								</div>
								<!-- LAYERS NR. 4.1 -->
								<div class="tp-caption lfr largepinkbg br-green"
									data-x="right" data-hoffset="-10"
									data-y="135"
									data-speed="800"
									data-start="3500"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Linear.easeNone"
									data-captionhidden="off">Seats Reserve
								</div>
								<!-- LAYERS NR. 5 -->
								<div class="tp-caption skewfromright medium_text text-right paragraph"
									data-x="right" data-hoffset="-10"
									data-y="225"
									data-speed="800"
									data-start="3800"
									data-easing="Power4.easeOut"
									data-endspeed="400"
									data-endeasing="Power4.easeOut"
									data-captionhidden="off">At vero eos etntium accu amet, adipisicing samus iusto<br />praese  delen itieos etconsectetur atque corrupti<br />praese etntiumder delen itierrupti.
								</div>
								<!-- LAYERS NR. 6 // -->
								<div class="tp-caption lfr modern_big_redbg br-red"
									data-x="right"
									data-hoffset="-10"
									data-y="315"
									data-speed="1500"
									data-start="4100"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Linear.easeNone"
									data-captionhidden="off">Desktop or Laptop
								</div>	
								<!-- LAYERS NR. 6.1 // -->
								<div class="tp-caption lfr modern_big_redbg br-yellow"
									data-x="right"
									data-hoffset="-10"
									data-y="375"
									data-speed="1500"
									data-start="4400"
									data-easing="Power4.easeOut"
									data-endspeed="300"
									data-endeasing="Linear.easeNone"
									data-captionhidden="off">Tablet or Phone
								</div>
							</li>
						</ul>
						<!-- Banner Timer -->
						<div class="tp-bannertimer"></div>
					</div>
				</section>
				</div>
				
				<!-- Slider End -->
				
				<!-- Banner End -->
				
				<!-- Inner Content -->
		<div class="inner-page padd">
		
				<section id="HWW" style="padding:2%;">
				  <div class="inner-menu" style="margin-top:0%;">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h1 class="section-heading">How It Works</h1>
								<hr class="primary">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/searchChef.png" alt=""/>  
								   </div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
								<img src="<?php echo base_url()?>assets/img/select menu.png" alt=""/>
							</div> 
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/order.png" alt=""/>
									  
								   </div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/deliver.png" alt=""/>
								</div>
							</div>
						</div>
					</div>
				   </div>
				</section>

				<section id="chefs" style="padding:0px;">
					<div class="inner-menu" style="margin-top:0%;">
						<div class="container">
							<div class="row">
							 <div class="col-lg-12 text-center">
								<h1 class="section-heading">Our Chefs</h1>
								<hr class="primary">
							</div>	
							<?php 
								foreach ($results as $row)
								{
							?>
								<div class="col-md-4 col-sm-6">
									<!-- Inner page menu list -->
									<div class="menu-list">
										<!-- Menu item heading -->
										<h3><?php echo $row["Name"]?></h3>
										<!-- Image for menu list -->
										<img class="img-responsive" src="<?php echo base_url()?>assets/img/biryani.jpg" alt="" />
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Minimum Person Limit</h4>
											<!-- Dish price -->
											<span class="price pull-right">3 persons</span>
											<div class="clearfix"></div>
										</div>
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Currently Serving</h4>
											<!-- Dish price -->
											<span class="price pull-right">49 persons</span>
											<div class="clearfix"></div>
										</div>
																			<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Cuisines</h4>
											<!-- Dish price -->
											<span class="price pull-right">Pakistani/Fast Food/Chineese</span>
											<div class="clearfix"></div>
										</div>
										
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<a href="<?php echo base_url().'Welcome/menu/'.$row["ChefID"]?>" class="btn btn-primary">View Menus</a>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</section>	
					<!-- Inner page menu end -->
				
					<!-- Showcase Start -->
				<section id="about" style="padding:0px;">
				  <div class="content" style="margin-top:5%;">
					<div class="container clearfix">
					  <div class="row">
					  <div class="col-lg-12 text-center">
							<h1 class="section-heading">About Us</h1>
							<hr class="primary">
						</div>
						<br/>
						<div class="col-md-6"> 
						  <p class="lead">This can be an about section or anything else ;)</p>
						  <p>Impossible considered invitation him men instrument saw celebrated unpleasant. Put rest and must set kind next many near nay. He exquisite continued explained middleton am. Voice hours young woody has she think equal. Estate moment he at on wonder at season little. Six garden result summer set family esteem nay estate. End admiration mrs unreserved discovered comparison especially invitation. </p>
						  <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
						</div>
						<div class="col-md-5 col-md-offset-1">
						  <p><img src="<?php echo base_url()?>assets/img/CF.png" alt="" class="img-responsive"></p>
						</div>
					  </div>
					</div>
				  </div>
				</section>		
			
			<!-- Contact Section -->
			<section id="contact" style="padding:0px;">
				<div class="inner-menu" style="margin-top:5%;">
					<div class="container">
						<div class="row">
						  <div class="col-lg-12 text-center" style="margin-bottom:3%;">
								<h1 class="section-heading" style="color:#BE2832;">Contact Us</h1>
								<hr class="primary">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<form name="sentMessage" id="contactForm" novalidate>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
												<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
												<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
												<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-lg-12 text-center">
											<div id="success"></div>
											<button type="submit" class="btn btn-xl" style="background-color:#F16521;">Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>	
					<!-- Showcase End -->
					
		</div><!-- / Inner Page Content End -->	
				
				<!-- Footer Start -->
				
		<div class="footer padd" style="background-color:#000;">
			<div class="container">
				<div class="footer-copyright">
					<p style="float:left;font-family: 'Droid Serif', serif;">&copy; Copyright 2016 CAPTAIN food&nbsp;&nbsp;
					<a href="#">Facebook</a>&nbsp;&nbsp;<a href="#">Linkedin</a>&nbsp;&nbsp;<a href="#">Support</a>&nbsp;&nbsp;
					</p>
				</div>
			</div>
		</div>
				<!-- Footer End -->
				
	</div><!-- / Wrapper End -->
			
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#" title="Back to Top"><i class="fa fa-angle-up"></i></a></span> 
			
			<!-- Javascript files -->
			<!-- jQuery -->
			<?php $this->load->view('CaptainFood/includes/footer_js')?>
		
	
</body>	

<!-- Mirrored from ashobiz.asia/cakefactory14/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2016 20:26:52 GMT -->
</html>