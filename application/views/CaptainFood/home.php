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


							<a href="<?php echo base_url()?>">
								<img class="img-responsive" src="<?php echo base_url()?>assets/img/logo final 01.png" width="120px" height="50px" style="margin-top:5%;margin-bottom:5%" alt=""/>

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
				<section id="home" class="intro-section">
					<div class="tp-banner" >
						<ul>	<!-- SLIDE  -->
							<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>assets/img/banner-1.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							</li>
							<li data-transition="cube" data-slotamount="7" data-masterspeed="600" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>assets/img/banner1.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
							</li>	
							<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1500" >
								<img src="<?php echo base_url()?>assets/img/menu-parallax-bg.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt=""/>
							</li>
							<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1500" >
								<img src="<?php echo base_url()?>assets/img/404.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt=""/>
							</li>
							
						</ul>
						<!-- Banner Timer -->
						<!-- <div class="tp-bannertimer"></div> -->
					</div>
				</section>
				</div>
				
				<!-- Slider End -->
				
				<!-- Banner End -->
				
				<!-- Inner Content -->
		<div class="inner-page">
		
				<section id="HWW" >
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

				<section id="chefs" style="background-image: url(<?php echo base_url()?>assets/img/menu4.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed;">
					<div class="inner-menu" style="margin-top:0%;">
						<div class="container">
							<div class="row">
							 <div class="col-lg-12 text-center">
								<h1 class="section-heading" style="color:#fff;">Our Super Chefs</h1>
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
										<img src="<?php echo base_url()?>assets/img/chefIntial.png" alt="" style="border:none;"/>
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
											<a href="<?php echo base_url().'Home/menu/'.$row["ChefID"]?>" class="btn btn-sm" 
											style="color:#fff;background-color:#F16521;">View Menus</a>
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
				<section id="about" >
				  <div class="content">
					<div class="container clearfix">
					  <div class="row">
					  <div class="col-lg-12 text-center">
							<h1 class="section-heading">About Us</h1>
							<hr class="primary">
						</div>
						<br/>
						<div class="col-md-6"> 
						  <h2 class="lead"><b>Vision</b></h2>
						  <p>Captain Food is an online homemade food bazaar where you can cook, sell, buy or eat. Empowering citizens by providing them an opportunity to start their own cooking business right from home.</p>
						  <h2 class="lead"><b>Mission</b></h2>
						  <p>Captain Food’s mission is to serve freshly cooked homemade food right at your door step. With a number of Super Chefs of your city in our alliance, Captain Food gives you the power to choose, order and eat. Lunch time in offices or whatever the occasion is, order from anywhere because we serve everywhere.</p>
						  <h2 class="lead"><b>EAT</b></h2>
						  <p>If you are missing the taste of homemade food, if you want your food to be healthy and hygienic, if regularly eating out is affecting your health, then wait no more. Want your desired food for a day, week or a whole month? You just have to order once.</p>
						  <h2 class="lead"><b>COOK</b></h2>
						  <p>Cooking is your passion, make it your profession. Join hands with us and become a Super Chef. You simply cook and earn, while we do the rest.</p>
						</div>
						<div class="col-md-5 col-md-offset-1" style="margin-top:8%;">
						  <p><img src="<?php echo base_url()?>assets/img/CF.png" alt="" class="img-responsive"></p>
						</div>
					  </div>
					</div>
				  </div>
				</section>		
			
			<!-- Contact Section -->
			<section id="contact" style="background-image: url(<?php echo base_url()?>assets/img/contact1.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed;padding:2%;">
				<div class="inner-menu" style="margin-top:5%;">
					<div class="container">
						<div class="row">
						  <div class="col-lg-12 text-center" style="margin-bottom:3%;">
								<h1 class="section-heading" style="color:#fff; !Important">Contact Us</h1>
								<hr class="primary">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<form name="sentMessage" id="contactForm" novalidate action="<?php echo base_url()?>Home/SendEmail" method="Post" >
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
				
			<?php $this->load->view('CaptainFood/includes/footer')?>
			
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