<?php
include_once('config.php');
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
             
              function checkForm() {
                // Fetching values from all input fields and storing them in variables.
                var desig = document.getElementById("deser").innerHTML;
                var vacancy = document.getElementById("vacer").innerHTML;
                var desc = document.getElementById("jober").innerHTML;
                var fnarea = document.getElementById("fner").innerHTML;
                var profile = document.getElementById("proer").innerHTML;
                var pay = document.getElementById("payer").innerHTML;
                //Check input Fields Should not be blanks.

                if(desig == '' && vacancy == '' && desc == '' &&  fnarea =='' && profile=='' && pay=='') {
                   return true;

                }
                else {
                alert("Fill in with correct information");
                    return false;

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
            <section class="relative"  style="color: #FEB801; width: 100%; height: 500px;"> 
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white"> Post Jobs </h1>   
                             
                        </div>  
                    </div>
                </div>
            </section>



        <section id="postjobs" style="width: 100%; ">
            <div class="container">
              <div class="row" >
                <div class="col-lg-12 text-center">
                  <h2 style="padding-top: 50px;" class="section-heading text-uppercase">Job Details</h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-30">
            
                <div class="page-header" />
                <form id="job_post" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="process_postjob.php">
                   <div style="padding: 50px;color: black;font-size: 20px; padding-left: 200px;">
                   <table style="padding-left: 100px;" class="table table-responsive table-striped">
                   
                    <tr><td style="width: 300px;"><div class="form-group">
                        <label for="desig" class="control-label col-md-20">Job Title/ Designation:</label></td>
                         <td><div class="col-md-20"> 
                              <input type="text" class="form-control" name="desig" id="desig" required >
                         </div>
                         <label id="deser" class="error"></label>
                    </div></td></tr>
                    
                    <tr><td><div style="" class="form-group">
                          <label for="vac_no" class="control-label col-md-20">Number of vacancies:</label></td>

                          <td><div class="col-md-20">  <input type="text" name="vacno" class="form-control" id="vac_no"  required > </div>
                          <label id="vacer" class="error"></label>
                    </div></td></tr>
                    
                     <tr><td><div class="form-group">
                        <label for="job_desc" class="control-label col-md-20">Job Description:</label></td>
                          <td><div class="col-md-20">  <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" required ></textarea> </div>
                        <label class="error" id="jober"></label>
                    </div></td></tr>
                    
                      <tr><td><div class="form-inline form-group">
                        <label for="exp" class="control-label col-md-20">Work Experiecne:</label></td>
                         <td> <div class="col-md-20">
                               <select class="form-control" name="exp" required name="exp" id="exp">
                                   <option value=""> -Select- </option>
                                    <option value="1">1 </option>
                                     <option value="2">2 </option>
                                      <option value="3">3 </option>
                                       <option value="4">4 </option>
                                        <option value="5"> 5</option>
                                         <option value="6">6 </option>
                                          <option value="7">7 </option>
                                           <option value="7 above"> above 7</option>
                               </select> <span> Minimum Years </span>
                           </div>
                     </div></td></tr>
                     
                     <tr><td><div class="form-inline form-group">
                        <label for="pay-div" class="control-label col-md-20">Basic Pay:</label></td>
                          <td><div class="col-md-20" id="pay-div">
                                 <select class="form-control" id="money" name="money"> 
                                   <option value="Rs"> Rs </option>
                                   <option value="USD"> USD </option>
                                   </select>
                                <input type="text" class="form-control" id="pay" name="pay" required >
                           </div>
                           <label class="error" id="payer"></label>
                    </div></td></tr>
                    
                     <tr><td><div class="form-group">
                        <label for="fnarea" class="control-label col-md-20">Functional Area:</label></td>
                         <td><div class="col-md-20">  <input type="text" class="form-control" id="fnarea" required name="fnarea"> </div>
                         <label class="error" id="fner"></label>
                       
                    </div></td></tr>
                     <tr><td><h3> Desired Candidate Profile:</h3></td></tr>
                    <tr><td><div class="page-header" />
                        <div class="form-group">
                            <label for="ugcourse" class="control-label col-md-20">Specify UG Qualification:</label></td>
                            <td><div class="col-md-20 "><select name="ugcourse" id="ugcourse"  name="ugcourse" class=" form-control" required>
                       <option value="" label="Select">Select</option>
                       <option value="B.A">B.A</option>
                       <option value="B.Arch">B.Arch</option>
                       <option value="BCA">BCA</option>
                       <option value="B.B.A">B.B.A</option>
                       <option value="B.Com">B.Com</option>
                       <option value="B.Ed">B.Ed</option>
                       <option value="BDS">BDS</option>
                       <option value="BHM">BHM</option>
                       <option value="B.Pharma">B.Pharma</option>
                       <option value="B.Sc">B.Sc</option>
                       <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                       <option value="LLB">LLB</option>
                       <option value="MBBS">MBBS</option>
                       <option value="Diploma">Diploma</option>
                       <option value="BVSC">BVSC</option>
                       <option value="Other">Other</option>
                       </select>
                            </div>
                        </div></td></tr>
                       <tr><td> <div class="form-group">
                            <label for="pgcourse" class="control-label col-md-20">Specify PG Qualification:</label></td>
                            <td><div class="col-md-20">
                                <select name="pgcourse" id="pgcourse" name="pgcourse"  class="form-control" required>
                                    <option value="">Select</option>
                                      <option value="Not Pursuing Post Graduation"> Not Required</option>
                                      <option value="CA">CA</option>
                                      <option value="CS">CS</option>
                                      <option value="ICWA (CMA)">ICWA (CMA)</option>
                                      <option value="Integrated PG">Integrated PG</option>
                                      <option value="LLM">LLM</option>
                                      <option value="M.A">M.A</option>
                                      <option value="M.Arch">M.Arch</option>
                                      <option value="M.Com">M.Com</option>
                                      <option value="M.Ed">M.Ed</option>
                                      <option value="M.Pharma">M.Pharma</option>
                                      <option value="M.Sc">M.Sc</option>
                                      <option value="M.Tech">M.Tech</option>
                                      <option value="MBA/PGDM">MBA/PGDM</option>
                                      <option value="MCA">MCA</option>
                                      <option value="MS">MS</option>
                                      <option value="PG Diploma">PG Diploma</option>
                                      <option value="MVSC">MVSC</option>
                                     <option value="MCM">MCM</option>
                                     <option value="Other">Other</option>
                                 </select> 
                            </div>
                        </div></td></tr>
                        <tr><td> <div class="form-group">
                            <label for="profile" class="control-label col-md-20">Desired Candidate Profile</label></td>
                            <td><div class="col-md-20"><textarea id="profile" rows="5" name="profile" class="form-control" required ></textarea></div>
                            <label class="error" id="proer"></label>
                        </div></td> </tr>
                      </div>
                    </table>
                  </div>
                        
                        <h3 style="padding-left: 200px;" > Are you sure to submit the job! Check for errors before submitting the job</h3>
                        <div style="padding-left: 500px; padding-bottom: 200px;padding-top: 50px;" class="form-group col-md-20">
                             <button  style="padding-left: 100px;padding-right: 100px;"class="primary-btn" type="submit" id="postbtn">Post Job</button>
                        </div>

                </form>
                </div>
              </div>
            </div>
          </section>

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





