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
		<div class="wrapper" style="heiht:100%">
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
			
			<!-- Inner Content -->
	<div class="inner-page" style="padding-top:20px; background-image: url(<?php echo base_url()?>assets/img/menu/menu7.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed; width:100%; ">
	<section style="padding-bottom:0px;">
	
		<div style="margin-top:3%" >
		<div class="container">
			<div class="row" style="background-color:#e9e9e9; background: rgba(233, 233, 233, 0.85); height:250px; !important">
						  <div class="col-lg-12 text-center" style="margin-top:1%">
								<h2 class="section-heading">Super Chef 01</h2>
								<hr class="primary">
								
							</div>
							
							<div class="col-md-3" style="text-align:center"> 
							  <img src="<?php echo base_url()?>assets/img/chefIntial.png" width="120"; height="120"; style="border-radius:50%;" />
							  
							</div>
							<div class="col-md-9" style="margin-top:2%">
							<h3 class="section-heading" style="color:#333">I am a very Good Chef. </h3>
							</div>
							
			  
			</div>
		</div>
		</div>
		
	
		  <div class="inner-menu">
			<div class="container" style="padding:10px; background-color:#e9e9e9; background: rgba(233, 233, 233, 0.85); !important">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="section-heading">Menus</h1>
						<hr class="primary">
					</div>
				</div>
				<?php if($results){?>
				<div class="row" style="margin:1%">
				
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
							 <li><i class="fa-li fa fa-square"></i>1 Person Serving.</li>
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
				<?php }  else {?>
						<div class="row" style="margin-top:4%; text-align:center">
						<h3>
					No Menu Available
					</h3>
						<ul class="nav nav-pills nav-stacked col-md-3 col-sm-3">	
					</ul>
					<div class="col-md-9" style="height:200px">
					
					</div>
						</div>
				<?php }?>
				<!-- <div class="row">
					<div class="col-md-12">
						<h2>Per Head Rs.140</h2>
					</div> -->
				</div>				
			</div>
			</section>
		   </div>
		
	</div>	
			<!-- Footer Start -->
			
			
			
			<!-- Footer End -->
			<?php $this->load->view('CaptainFood/includes/footer')?>
		<!-- Scroll to top -->
		<span class="totop"><a href="#" title="Back to Top"><i class="fa fa-angle-up"></i></a></span> 		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<?php $this->load->view('CaptainFood/includes/footer_js')?>
		<script src="<?php echo base_url()?>assets/js/star-rating.js" type="text/javascript"></script>	
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
	<script>$(document).on('ready', function(){
    $('#input-3').rating({displayOnly: true, step: 0.5});
});
</script>
	</body>	
</html>