<?php
include('config.php');
//include_once('notify.php');

$q3=mysqli_query($db1,"select id, name, mobile, email, date, title from jsee, jobs where jid=jobid");
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
                                <li><a href="managejobs.php">Manage Jobs</a></li>     
                      <li> <a href="manage_applicants.php">See Applicants</a></li>
                      <li><a href="post_jobs.php">Post Jobs</a></li>  
                      
                      <li> <a href="index.php">Careers</a></li>
                         
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
                            <h1 class="text-white"> Carrers </h1>   
                            <a class="primary-btn" href="index1.php?#jobs">View Job Openings</a> 
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
        <div class="container-fluid">
    <h3 class="text-center" style="margin-top: 50px;">Applicants list :</h3>
    <div class="container" id="viewmain">
    <div class="table-responsive">
    <table class="table table-responsive table-striped">
        <th>Name of the Applicant</th>
        <th>Applied for:</th>
        <th>Phone </th>
        <th>Email </th>
        <th>Date of Appliation</th>
        
        <th></th>
        
        
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
        echo "<td><a href=./uploads/ $name >Click</a></td>";
      
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
<!-- --------------------------------------------------------- contents end --------------------------------------------------------------------- -->
</body>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet">
<link href="css/employer.css" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

