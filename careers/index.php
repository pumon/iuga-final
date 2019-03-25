<?php

include_once('config.php');
session_start();
$query=mysqli_query($db1,"select * from jobs");
$result=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css"></style>
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
          
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Shape The Digital World</div>
        <div class="intro-heading text-uppercase">IUGALE</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#jobs">See Job Opening</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="jobs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Job Vacancies</h2>
          
        </div>
      </div>
      <div class="container" id="viewmain">
    <div class="table-responsive">
    <table class="table table-responsive table-striped">
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Date of Posting</th>
        <th colspan="3">Actions</th>
    <?php
    while($result=mysqli_fetch_array($query)){
   // $query2=mysqli_query($db1,"select * from employer where eid = '$result[eid]'");
   // $r2=mysqli_fetch_array($query2);

    echo" <tr> ";
        /*for ($i=0; $i <3 ; $i++) {*/
        echo "<td>".$result['title']."</td>";
        echo "<td>".substr($result['jobdesc'],0,130)." ..........</td>";
        echo "<td>".$result['postdate']."</td>";
        echo "<td>  <a style='color:#53066E;'  href='viewofjs.php?jid=".$result['jobid']."'><button type='button' class='btn btn-success'>View Job</button></a> </td>";
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
  </section>

  <!-- Portfolio Grid -->
  
  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
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
