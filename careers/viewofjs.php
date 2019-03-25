<?php

include_once('config.php');
session_start();
$jobid=$_GET['jid'];
$query=mysqli_query($db1,"select * from jobs where jobid = $jobid");
$result=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script type="text/javascript">
    function apply(jobid) {
    // alert(keyword);
    var xmlhttp;
    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
    document.getElementById("applydiv").innerHTML = "Processing..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById("applydiv").innerHTML = xmlhttp.responseText;
    } else {
    document.getElementById("applydiv").innerHTML = "Error Occurred. <a href='profile.php'>Reload Or Try Again</a> the page.";
    }
    }
    xmlhttp.open("GET", "apply_job.php?jid=" + jobid , true);
    xmlhttp.send();
    }
    </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>IUGALE Carrers</title>

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
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#jobs">View All Jobs</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>





<div id="tablecontent" style="padding-top: 120px; padding-left:50px; ">
    <h3> Job Details: </h3>
    <table class="table table-responsive" style="padding-left: 10px">
        <tr>
            <td class="tbold">Designation:</td>
            <td><?php echo $result['title']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Date of Posting:</td>
            <td><?php echo $result['postdate']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Number of Vacancies: </td>
            <td><?php echo $result['vacno']; ?> </td>
        </tr>
        <tr>
            <td class="tbold">Job Description:</td>
            <td><?php echo $result['jobdesc']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required Experience:</td>
            <td><?php echo $result['experience']." "; ?>Years</td>
        </tr>
        <tr>
            <td class="tbold">Basic Pay:</td>
            <td><?php echo $result['basicpay']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Functional Area:</td>
            <td><?php echo $result['fnarea']; ?></td>
        </tr>
        
        
        <tr>
            <td class="tbold">Required UG Qualification:</td>
            <td><?php echo $result['ugqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Required PG Qualification:</td>
            <td><?php echo $result['pgqual']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Desired Candidate Profile:</td>
            <td><?php echo $result['profile']; ?></td>
        </tr>

    </table>
</div>
  
  
  
  
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Enter Details to Apply for the job</h2>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <form action="apply_job.php"  method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                
                  <input class="form-control" name="jid" value= <?php echo $jobid ?>  type="hidden"  required="required" >
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">

                
                  <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="mobno" name="mobno" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                
              </div>
              
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input type="submit" class="btn btn-success btn-lg" value="Apply For This Job">
                        <span class='glyphicon glyphicon-ok'></span>
                </button>
                </div>
              
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
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
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
