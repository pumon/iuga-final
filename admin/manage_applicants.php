<?php
include('config.php');
//include_once('notify.php');

$q3=mysqli_query($db1,"select id, name, title, mobile, email, date from jsee, jobs where jobid=jid");
$q3row=mysqli_fetch_array($q3);


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

            <script>
            function validate() {
  var x = document.forms["news"]["email"].value;
  if (x == "") {
        alert("Values cannot be empty");
        window.location.href='index.php';
  }
  
}
</script>
    <style type="text/css">
   .bl {
      color: black;
      font-size: 20px;
      font-weight: bold;
   }
   .bl2{
      color: black;
      font-size: 15px;
   }
 </style>


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
                                    
                      <li> <a href="manage_applicants.php">See Applicants</a></li>
                      <li><a href="post_jobs.php">Post Jobs</a></li>  
                      
                     
                         
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->

            <!-- start banner Area -->
            <section class="relative"  style="width: 100%; height: 500px;"> 
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white"> Manage Applicants </h1><br/>   
                           
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
        <div class="container-fluid" id="#jobs">
    <h3 class="text-center" style="margin-top: 50px;">Applicants list :</h3>
    <div class="container" id="viewmain">
    <div class="table-responsive">
    <table style="padding-top: 50px;" class="table table-responsive table-striped">
        <th style="width: 280px;">Name of the Applicant</th>
        <th style="width: 200px;">Applied for:</th>
        <th style="width: 200px;">Phone </th>
        <th style="width: 300px;">Email </th>

        <th style="width: 200px;">Date of Appliation</th>
        
       
        
        
    <?php
    
    while($q3row=mysqli_fetch_array($q3)){
   // $query2=mysqli_query($db1,"select * from employer where eid = '$result[eid]'");
   // $r2=mysqli_fetch_array($query2);

    echo" <tr> ";
        /*for ($i=0; $i <3 ; $i++) {*/
        echo "<td>".$q3row['name']."</td>";
        echo "<td>".$q3row['title']."</td>";
        echo "<td>".$q3row['mobile']."</td>";
        echo "<td>".$q3row['email']."</td>";
        echo "<td>".$q3row['date']."</td>";
        
      
       // echo "<td>  <a style='color:#53066E;'  href='view.php?jid=".$q3row['id']."'><button type='button' class='btn btn-success'>View Job</button></a> </td>";
        //<td><button type="button" class="btn btn-success btn-lg" onclick="apply(<?php echo $result['jobid']; )">
        //<span class='glyphicon glyphicon-ok'></span> Apply for this Job
         //</button></td>
        
        echo "</tr>";
    }
?>
    </table>
    </div>
</div>  
   
</div>
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
      <script src="js/index.js"></script>
      

    </body>
  </html>

