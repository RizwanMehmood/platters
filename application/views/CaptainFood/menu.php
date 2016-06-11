<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Captain Food</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="A HomeMade Food Delivery Service">
		<meta name="keywords" content="Menu,HomeMade Food Menu">
		<meta name="author" content="Captain Food">
		
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

			
		
			<!-- Inner Content -->
	<div class="inner-page padd" style="overflow:hidden;">
	
	<div style="background: url(<?php echo base_url()?>assets/img/menu-parallax-bg.jpg) no-repeat; background-size: auto 100%;">
		<div style="padding-left:25%; padding-right:25%; background-color:#e9e9e9 !important">
		<div class="row" >

					  <div class="col-lg-12 text-center">
							<h1 class="section-heading">Super Chef 01</h1>
							<hr class="primary">
						</div>
						<br/>
						<div class="col-md-6"  style="margin-top:5%;"> 
						  <p class="lead">This can be an about section or anything else ;)</p>
						  <p>Impossible considered invitation him men instrument saw celebrated unpleasant. Put rest and must set kind next many near nay. He exquisite continued explained middleton am. Voice hours young woody has she think equal. Estate moment he at on wonder at season little. Six garden result summer set family esteem nay estate. End admiration mrs unreserved discovered comparison especially invitation. </p>
						  <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
						</div>
						<div class="col-md-5 col-md-offset-1"  style="margin-top:2%;">
						  <p><img src="<?php echo base_url()?>assets/img/chef.png" alt="" class="img-responsive"></p>
						</div>
		  </div>
		</div>
	</div>
	
		<section id="menu" >
		  <div class="inner-menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="section-heading">Menus</h1>
						<hr class="primary">
					</div>
				</div>
				<div class="row" style="margin-top:4%;">
					<ul class="nav nav-pills nav-stacked col-md-3 col-sm-3"">
					<?php $count=0; foreach($results as $row){ ?>
						<li id="<?php echo $row["menuID"].'_active';?>" <?php if($count==0) { ?> class="active" <?php } ?> ><a href="javascript:HideMe(<?php echo $row["menuID"];?>)">Menu <?php echo $row["menuID"];?></a></li>
					<?php $count++;} ?>	
					</ul>
					<?php $i=0;
					foreach($results as $row){?>
					<div class="col-md-9 HideMenu" <?php if($i>0) { ?> style="display:none;"<?php } ?> id="<?php echo $row["menuID"];?>">
						<table class="table table-hover">
							<thead style="background-color:#f05f40;color:#ffffff;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif;">
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
						<div class="col-md-9 text-center">
							<h2>Only in Rs.<?php echo $row["meal_price"];?></h2>
						</div>
						<div class="col-md-12" style="margin-top:2%;">
						<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
							<ul class="fa-ul">
							 <li><i class="fa-li fa fa-square"></i>1 person Serving.</li>
							 <li><i class="fa-li fa fa-square"></i>Package includes Raita,Salad and 2 Roti.</li>
							 <li><i class="fa-li fa fa-square"></i>Additional Charges apply in case of Extra Roti as Rs.6 per Roti.</li>
							</ul>
						</div>
						
						<div class="col-lg-12 text-center" style="margin-top:2%;">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl" style="background-color:#F16521;">Leave a Message</button>
						</div>
						
					</div>
					
				<?php $i++;
					} ?>					
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<h2>Per Head Rs.140</h2>
					</div> -->
				</div>				
			</div>
		   </div>
		</section>
	</div>	
			<!-- Footer Start -->
			
			<?php $this->load->view('CaptainFood/includes/footer')?>
			
			<!-- Footer End -->
			
		<!-- Scroll to top -->
		<span class="totop"><a href="#" title="Back to Top"><i class="fa fa-angle-up"></i></a></span> 		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<?php $this->load->view('CaptainFood/includes/footer_js')?>
		<script>
		
		function HideMe(MenuID)
		{
			$('.HideMenu').fadeIn();
			$(".HideMenu").hide();
			$("#"+MenuID).show();
			var $id=MenuID+"_active";
			$("li").removeClass("active");
			$("#"+$id).addClass("active");
		}
		</script>
	
	</body>	
</html>