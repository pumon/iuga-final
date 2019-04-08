<?php

include_once('config.php');
session_start();
$st=$_GET['st'];
$jobid=$_GET['jid'];
$query=mysqli_query($db1,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);
//if ($st==1) {
//  $message = "You Have Successfully Applied For The Job";
//  echo "<script type='text/javascript'>alert('$message');</script>";
//}
//else if ($st==2) {
//  $message = "You Have Already Applied For this Job, Try applying for another one..";
//  echo "<script type='text/javascript'>alert('$message');</script>";
//}
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

  .alert {
    text-align: center;
    width: 200%;
    position: relative; 
    left: 30px;
    padding: 20px;
    background-color: #C28ACD;
    color: black;
  }

  .alert1 {
    text-align: center;
    width: 200%;
    position: relative; 
    left: 30px;
    padding: 20px;
    background-color: #D50573;
    color: black;
  }
  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .closebtn:hover {
    color: black;
  }

   .bl {
      color: black;
      font-size: 20px;
      font-weight: bold;
   }
   .bl2{
      color: black;
      font-size: 20px;
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
                <li class="menu-active"><a href="../index.php">Home</a></li>
                <li><a href="../about.html">About</a></li>   
            <li> <a href="../services.html">Services</a></li>
            <li><a href="../projects.php">Projects</a></li>  
            <li><a href="../contact.html">Contact</a></li>
            <li> <a href="./careers/">Careers</a></li>
                   
                </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->

      <!-- start banner Area -->
      <section class="relative" id="top" style="width: 100%; height: 500px; background-image: 'img/bg.png'">  
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white"> <?php echo $result['title']; ?> </h1> 
               <?php echo"<a class='primary-btn' href='delete.php?jid=".$jobid."'>Delete Job</a>" ?>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->  
    
    
    
     <div id="tablecontent" style="padding-top: 20px; padding-left:50px; ">
    <h1 style="text-align:center;"> Job Details </h1>
    <table class="table table-responsive" style="padding-left: 10px">
        <tr>
            <td class="bl">Designation:</td>
            <td class="bl2"><?php echo $result['title']; ?></td>
        </tr>
        <tr>
            <td class="bl">Date of Posting:</td>
            <td class="bl2"><?php echo $result['postdate']; ?></td>
        </tr>
        <tr>
            <td class="bl">Number of Vacancies: </td>
            <td class="bl2"><?php echo $result['vacno']; ?> </td>
        </tr>
        <tr>
            <td class="bl">Job Description:</td>
            <td class="bl2"><?php echo $result['jobdesc']; ?></td>
        </tr>
        <tr>
            <td class="bl">Required Experience:</td>
            <td class="bl2"><?php echo $result['experience']." "; ?>Years</td>
        </tr>
        <tr>
            <td class="bl">Basic Pay:</td>
            <td class="bl2"><?php echo $result['basicpay']; ?></td>
        </tr>
        <tr>
            <td class="bl">Functional Area:</td>
            <td class="bl2"><?php echo $result['fnarea']; ?></td>
        </tr>
        
        
        <tr>
            <td class="bl">Required UG Qualification:</td>
            <td class="bl2"><?php echo $result['ugqual']; ?></td>
        </tr>
        <tr>
            <td class="bl">Required PG Qualification:</td>
            <td class="bl2"><?php echo $result['pgqual']; ?></td>
        </tr>
        <tr>
            <td class="bl">Desired Candidate Profile:</td>
            <td class="bl2"><?php echo $result['profile']; ?></td>
        </tr>

    </table>
</div>
    

    
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
                      <span class="fa fa-star checked "></span>               
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
      <script src="js/index.js"></script>
      

    </body>
  </html>



