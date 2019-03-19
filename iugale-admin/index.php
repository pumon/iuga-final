<?php
include('./connect.php');
$comp=mysqli_query($conn,"Select Distinct company_name from projects");
$original=mysqli_query($conn,"Select * from projects");
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Iugale Services Pvt Ltd</title>
		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/nice-select.css">	
			<link rel="stylesheet" href="../css/hexagons.min.css">							
			<link rel="stylesheet" href="../css/animate.min.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/style.css">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="../img/iugale.png" alt="" title="" height="75" width="75"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
						  <li><a href="addProjects.php">Add Projects</a></li>
						  <li><a href="updateProjects.php">Update Projects</a></li>
				          <li><a href="removeProjects.php">Remove Projects</a></li>    
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Welcome Admin				
                            </h1>	
                        
                        </div>	
					</div>
				</div>
			</section>
            <!-- End banner Area -->	
            <!-- Start project Area -->
            <section class=" section-gap" id="project" >
					<h1 class="text-white row justify-content-center align-items-center">
							Our Projects				
						</h1>	
						<div class="carousel  row justify-content-center align-items-center">
                            <?php  while ($select_query_array=   mysqli_fetch_array($comp) ){?>
							<figure class="product-card carousel-cell">
								<div class="fig-body">
									<div class="fig-head">
										<h2><?php echo $select_query_array['company_name']; ?></h2>
									</div>
									<ul class="product-checklist ">
                                        <?php  while ($select_query_array1=   mysqli_fetch_array($original) ){
                                             if($select_query_array['company_name']==$select_query_array1['company_name']) { ?>

                                                <li class="check"><a href="<?php echo $select_query_array1['project_url'];?>"><?php echo $select_query_array1['project_name'];?></a></li>

                                        
                                        <?php } } $original=mysqli_query($conn,"Select * from projects"); ?>

									</ul>
									
								</div>
							</figure>
                            <?php } ?>
                            </div>
						
			</section>
        <!-- End project Area -->
				

		
				
			
			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../js/easing.min.js"></script>			
			<script src="../js/hoverIntent.js"></script>
			<script src="../js/superfish.min.js"></script>	
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>	
			<script src="../js/owl.carousel.min.js"></script>	
			<script src="../js/hexagons.min.js"></script>							
			<script src="../js/jquery.nice-select.min.js"></script>	
			<script src="../js/jquery.counterup.min.js"></script>
			<script src="../js/waypoints.min.js"></script>							
			<script src="../js/mail-script.js"></script>	
			<script src="../js/main.js"></script>	
			<script src="../js/index.js"></script>
			

		</body>
	</html>



