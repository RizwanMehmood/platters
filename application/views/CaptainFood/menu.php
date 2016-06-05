<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Captain Food</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
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
		</div>	

	<div class="tp-banner-container">
		<img class="img-responsive" src="<?php echo base_url()?>assets/img/banner.jpg"/>
	</div>		
		
			<!-- Inner Content -->
	<div class="inner-page padd">	
		<section id="HWW" style="padding:2%;">
		  <div class="inner-menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="section-heading">Menus</h1>
						<hr class="primary">
					</div>
				</div>
				<div class="row">
					<ul class="nav nav-pills nav-stacked col-md-3 col-sm-3" style="margin-top:4%;">
					<?php foreach($results as $row){ ?>
						<li><a href="javascript:HideMe(<?php echo $row["menu_id"];?>)">Menu <?php echo $row["menu_id"];?></a></li>
					<?php } ?>	
					</ul>
					<?php $i=0;
					foreach($results as $row){?>
					<div class="col-md-9 HideMenu" <?php if($i>0) { ?> style="display:none;"<?php } ?> id="<?php echo $row["menu_id"];?>">
						<table class="table table-hover">
							<thead style="background-color:#f9f9f9;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif;">
								<tr>
									<th>Day</th>
									<th>Dish Name</th>
								</tr>
							</thead>
							<tr><td>Monday</td><td><?php echo $row["mon_dishes"];?></td></tr>
							<tr><td>Tuesday</td><td><?php echo $row["tue_dishes"];?></td></tr>
							<tr><td>Wednesday</td><td><?php echo $row["wed_dishes"];?></td></tr>
							<tr><td>Thursday</td><td><?php echo $row["thu_dishes"];?></td></tr>
							<tr><td>Friday</td><td><?php echo $row["fri_dishes"];?></td></tr>
						</table>
					</div>
					<?php $i++;
					} ?>	
				</div>	
			</div>
		   </div>
		</section>
	</div>	
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
			
		<!-- Scroll to top -->
		<span class="totop"><a href="#" title="Back to Top"><i class="fa fa-angle-up"></i></a></span> 		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<?php $this->load->view('CaptainFood/includes/footer_js')?>
		<script>
		
		function HideMe(MenuID)
		{
			$(".HideMenu").hide();
			$("#"+MenuID).show();
		}
		</script>
	
	</body>	
</html>