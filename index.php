<?php
include('./iugale-admin/connect.php');
$comp=mysqli_query($conn,"Select Distinct company_name from projects");
$original=mysqli_query($conn,"Select * from projects");
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Iugale Tech</title>


		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r77/three.min.js'></script>
			<script  src="js/index.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/nucleo-icons.css">
			<script>
            function validate() {
  var x = document.forms["news"]["email"].value;
  if (x == "") {
		alert("Values cannot be empty");
		window.location.href='index.php';
  }
  
}
function validatequote() {
  var a = document.forms["quote"]["type"].value;
	var b = document.forms["quote"]["name"].value;
	var c = document.forms["quote"]["phone"].value;
	var d = document.forms["quote"]["message"].value;
	var e = document.forms["quote"]["email"].value;
  if (a == "" || b == "" || c == "" || d == "" || e == "" ) {
		alert("Values cannot be empty");
		window.location.href='index.php';
  }
 
}
</script>
		
				
			
		</head>
		<body>	
				
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/iugale.png" alt="" title="" height="75" width="75"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
								<li class="menu-active"><a href="index.php">Home</a></li>
								<li><a href="about.html">About</a></li>		
					  <li> <a href="services.html">Services</a></li>
					  <li><a href="projects.php">Projects</a></li>	
					  <li><a href="contact.html">Contact</a></li>
					  <li> <a href="./careers/">Careers</a></li>
			              
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			
			
			<section class="relative" id="home">					
					<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center" id="banners">
						<div class="banner-content col-lg-12 col-md-12">
							<h6 class="text-uppercase">Don’t look further, here is the key</h6>
							<h1>
								IUGALE Services Pvt Ltd		
							</h1>
							
							<a href="contact.html" id="started" class="primary-btn">Get Started</a>
							
						</div>												
					</div>
				</div>
				
			</section>
			
		
			<!-- End banner Area -->

			<!-- Start cat Area -->
			<section class="cat-area section-gap" id="feature">
				<div class="container">							
					<div class="row">
						<div class="col-lg-4">	
							<div class="single-cat d-flex flex-column">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
								<h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>															
						</div>
						<div class="col-lg-4">	
							<div class="single-cat">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
								<h4 class="mt-40 mb-20">Residental Service</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>															
						</div>
						<div class="col-lg-4">
							<div class="single-cat">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
								<h4 class="mt-40 mb-20">Commercial Service</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End cat Area -->		
			

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8 col-md-12 home-about-left">
							<h6>Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you
							</h1>
							<p class="sub">We are here to listen from you deliver exellence</p>
							<p class="pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn" href="contact.html">Get Started Now</a>
						</div>
						<div class="col-lg-4 col-md-12 home-about-right relative">
						<form class="form-wrap" name='quote' id='quote' method='post'action="quote.php">
								<h4 class="text-white pb-20">Request a Quote</h4>
								<div class="form-select" id="service-select">
									<select name='type' id='type'>
										<option value="" disabled selected>Select Type of Service</option>
										<option value="Software Development">Software Development</option>
										<option value="Sales">Sales</option>
										<option value="Marketing">Marketing</option>
										<option value="Advertising">Advertising</option>
										<option value="Market Research">Market Research</option>
										<option value="Other">Other</option>
									</select>
								</div>								
								<input type="text" name='name' id='name' class="form-control" placeholder="Name">
								<input type="phone" name='phone' id='phone' class="form-control" placeholder="Phone Number">
								<input type="email" name='email' id='email' class="form-control" placeholder="Email Address">
								<textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
								<button class="primary-btn" onclick="validatequote();">Request Free Quote</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			

			<!-- Start faq Area -->
			<section class="faq-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 col-md-6">
							<div class="single-faq">
								<div class="circle">
								  <div class="inner"></div>
								</div>
								<h5><span class="counter">2</span>K+</h5>
								<p>
									Projects Completed
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-faq">
								<div class="circle">
								  <div class="inner"></div>
								</div>
								<h5><span class="counter">5.5</span>K</h5>
								<p>
									Total Employees
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-faq">
								<div class="circle">
								  <div class="inner"></div>
								</div>
								<h5 class="counter">959</h5>
								<p>
									Happy Clients
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-faq">
								<div class="circle">
								  <div class="inner"></div>
								</div>
								<h5 class="counter">367</h5>
								<p>
									Tickets Submited
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End faq Area -->


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
						
			<!-- Start feedback Area -->
			<section class="feedback-area aboutus-feedback section-gap" id="feedback">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-12 pb-60 header-text text-center">
								<h1 class="mb-10">Enjoy our Client’s Feedback</h1>
								<p>
									Who are in extremely love with eco friendly system..
								</p>
							</div>
						</div>			
						<div class="row feedback-contents justify-content-center align-items-center">
							<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
								<div class="overlay overlay-bg"></div>
								<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
							</div>
							<div class="col-lg-6 feedback-right">
								<div class="active-review-carusel">
									<div class="single-feedback-carusel">
										<div class="title d-flex flex-row">
											<h4 class="pb-10">Fannie Rowe</h4>
											<div class="star">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>								
											</div>										
										</div>
										<p>
											Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
										</p>
									</div>
									<div class="single-feedback-carusel">
										<div class="title d-flex flex-row">
											<h4 class="pb-10">Fannie Rowe</h4>
											<div class="star">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>								
											</div>										
										</div>
										<p>
											Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
										</p>
									</div>
									<div class="single-feedback-carusel">
										<div class="title d-flex flex-row">
											<h4 class="pb-10">Fannie Rowe</h4>
											<div class="star">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked	"></span>								
											</div>										
										</div>
										<p>
											Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
										</p>
									</div>																
								</div>
							</div>
						</div>
					</div>	
				</section>
			<!-- End feedback Area -->
				
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div>
									<form  method="post" id='news' name="news" class="form-inline" action="news.php">
										<input class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" type="text" >
			                      <button class="click-btn btn btn-default" onclick="validate();"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/Iugale-Services-Private-Limited-2332419313655996/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/IugaleL"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/company/18969679/"><i class="fa fa-star"></i></a>
									
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



