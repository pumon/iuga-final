<?php
include('connect.php');
    $comp=mysqli_query($conn,"Select Distinct company_name from projects");
    $pro=mysqli_query($conn,"Select Distinct project_name from projects");

?>
<?php  
if(isset($_POST['company_name'])){

    $com_name=$_POST['company_name'];
    $pro_name=$_POST['project_name'];
    $sql = "Delete from projects where company_name='".$com_name."' and project_name='".$pro_name."'";
    $res=mysqli_query($conn, $sql);
    if(isset($res)){
        echo "<script>alert('successfull');</script>";
        header("Refresh:0");
    } else{
        echo "<script>alert('unsuccessfull.');</script>;";
    }

}
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
				          <li class="menu-active"><a href="index.php">Home</a></li>
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
								Remove Projects				
                            </h1>	
                        
                        </div>	
					</div>
				</div>
			</section>
            <!-- End banner Area -->	
            <section class="project-area section-gap" id="project">
						
						<div class="carousel  row justify-content-center align-items-center">
                        <div class="container " style="margin-top:20px;max-width:700px">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="background-color:#a300fc;"></div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" id="form"action="removeProjects.php">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Company Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                
                                                <select class="form-control" name="company_name" id="company_name" placeholder="">
                                                    <?php
                                                    while ($select_query_array=   mysqli_fetch_array($comp) )
                                                    {
                                                       echo "<option value='".$select_query_array['company_name']."' >".$select_query_array['company_name']."</option>";
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Project Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <select class="form-control" name="project_name" id="project_name" placeholder="">
                                                    <?php
                                                    while ($select_query_array=   mysqli_fetch_array($pro) )
                                                    {
                                                       echo "<option value='".$select_query_array['project_name']."' >".$select_query_array['project_name']."</option>";
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <button type="button" class="btn btn-primary btn-lg btn-block login-button" style="background-color:#a300fc;" onclick="document.getElementById('form').submit();">Submit</button>
                                    </div>
                                   
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>

</section>

		
				
			
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



