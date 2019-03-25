<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<title> Post Jobs </title>
         <script>
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" width="80" height="75"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          
         
        </ul>
      </div>
    </div>
  </nav>

  

 
    <section id="postjobs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Job Details:</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
    
        <div class="page-header" />
        <form id="job_post" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="process_postjob.php">
           <table class="table table-responsive table-striped">
           
            <tr><td><div class="form-group">
                <label for="desig" class="control-label col-sm-10">Job Title/ Designation:</label></td>
                 <td><div class="col-sm-10"> 
                      <input type="text" class="form-control" name="desig" id="desig" required >
                 </div>
                 <label id="deser" class="error"></label>
            </div></td></tr>
            
            <tr><td><div class="form-group">
                  <label for="vac_no" class="control-label col-sm-10">Number of vacancies:</label></td>

                  <td><div class="col-sm-10">  <input type="text" name="vacno" class="form-control" id="vac_no"  required > </div>
                  <label id="vacer" class="error"></label>
            </div></td></tr>
            
             <tr><td><div class="form-group">
                <label for="job_desc" class="control-label col-sm-10">Job Description:</label></td>
                  <td><div class="col-sm-15">  <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" required ></textarea> </div>
                <label class="error" id="jober"></label>
            </div></td></tr>
            
              <tr><td><div class="form-inline form-group">
                <label for="exp" class="control-label col-sm-10">Work Experiecne:</label></td>
                 <td> <div class="col-sm-10">
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
                <label for="pay-div" class="control-label col-sm-10">Basic Pay:</label></td>
                  <td><div class="col-sm-10" id="pay-div">
                         <select class="form-control" id="money" name="money"> 
                           <option value="Rs"> Rs </option>
                           <option value="USD"> USD </option>
                           </select>
                        <input type="text" class="form-control" id="pay" name="pay" required >
                   </div>
                   <label class="error" id="payer"></label>
            </div></td></tr>
            
             <tr><td><div class="form-group">
                <label for="fnarea" class="control-label col-sm-10">Functional Area:</label></td>
                 <td><div class="col-sm-10">  <input type="text" class="form-control" id="fnarea" required name="fnarea"> </div>
                 <label class="error" id="fner"></label>
               
            </div></td></tr>
             <tr><td><h3> Desired Candidate Profile:</h3></td></tr>
            <tr><td><div class="page-header" />
                <div class="form-group">
                    <label for="ugcourse" class="control-label col-sm-10">Specify UG Qualification:</label></td>
                    <td><div class="col-sm-10 "><select name="ugcourse" id="ugcourse"  name="ugcourse" class=" form-control" required>
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
                    <label for="pgcourse" class="control-label col-sm-10">Specify PG Qualification:</label></td>
                    <td><div class="col-sm-10">
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
                    <label for="profile" class="control-label col-sm-10">Desired Candidate Profile</label></td>
                    <td><div class="col-sm-15"><textarea id="profile" rows="5" name="profile" class="form-control" required ></textarea></div>
                    <label class="error" id="proer"></label>
                </div></td> </tr>
              </div>
            </table>
                <div class="page-header" />
                <p> Are you sure to submit the job! Check for errors before submitting the job</p>
                <div class="form-group col-sm-10">
                     <button class="btn btn-lg btn-primary btn-block" type="submit" id="postbtn">Post Job</button>
                </div>

        </form>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; IUGALE 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/iugalel?lang=en">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/IUGALEservices/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://in.linkedin.com/company/iugale-services-private-limited">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </footer>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>










