<?php

$st=$_GET['st'];
include('config.php');
$query=mysqli_query($db1,"select * from jobs");

?>

<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/iugale.png">
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
            <section class="relative" id="home"> 
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white"> Manage Jobs </h1>   
                             
                        </div>  
                    </div>
                </div>
            </section>



            <?php if(mysqli_num_rows($query)>0) {
            if($st==1){
              ?>
              <div style="padding-top: 50px;padding-left: 500px;">
                <h3 style="background-color: #A9ECAA; position: absolute;left: 200px;width: 800px; padding-left: 250px;padding-top: 10px;padding-bottom: 10px;align-self: center;border-radius: 15px; color: black;">Job Deleted <span style="left: 180px" onclick="this.parentElement.style.display='none'"
                class="primary-btn">&times;</span> </h3>
                
              </div>
              <?php
            }
             ?>
                <section class=" section-gap" id="jobs" >
                <div class="container" id="viewmain">
			    <div class="table-responsive">
    <table style="padding-top: 25px;" class="table table-responsive table-striped">
			        <th class="bl"style="width: 620px;">Job Title</th>
			        <th class="bl"style="width: 620px;">Job Description</th>
			        <th class="bl">Date of Posting</th>
			        <th class="bl" colspan="3"> Actions  </th>
                <?php
                while($result=mysqli_fetch_array($query)){
               // $query2=mysqli_query($db1,"select * from employer where eid = '$result[eid]'");
               // $r2=mysqli_fetch_array($query2);

                echo" <tr> ";
                    /*for ($i=0; $i <3 ; $i++) {*/
                    echo "<td >".$result['title']."</td>";
                    echo "<td >".substr($result['jobdesc'],0,100)." ...</td>";
                    echo "<td >".$result['postdate']."</td>";
                    echo "<td >  <a class='primary-btn' href='viewofjs.php?jid=".$result['jobid']."&st=0'>View Job</a> </td>";
                    echo "<td >  <a class='primary-btn' href='view_applicants.php?jid=".$result['jobid']."&st=0'>View Applicant</a> </td>";
                    //<a class="primary-btn" href="contact.html">Get Started Now</a>
                    //<td><button type="button" class="btn btn-success btn-lg" onclick="apply(<?php echo $result['jobid']; )">
                    //<span class='glyphicon glyphicon-ok'></span> Apply for this Job
                     //</button></td>
                    
                    echo "</tr>";
                }
            ?>
    </table>
    </div>
</div>  
                        
            </section>
<?php } else  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt posted any jobs yet!</p>
        </div> </div>";
?>
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

