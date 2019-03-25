<?php

include_once('config.php');
session_start();
$query=mysqli_query($db1,"select * from jobs");
$result=mysqli_fetch_array($query);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>View Job </title>
</head>
<body>

<div id="nav">
    <nav class="navbar-fixed-top">
        <div class="collapse navbar-collapse" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                 <li><a href="view_applied.php">View Applied Jobs</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search" method="get" action="search.php">
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search Jobs">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<div class="container">
<?php
    $qc=mysqli_query($db1,"select * from employer where eid=$result[eid]");
    $res=mysqli_fetch_array($qc);
?>


<center><h3>Details of <?php echo $result['title']; ?> by <?php echo $res['ename']; ?> </h3></center>
<button class="btn btn-warning btn-lg" onclick="goBack()"><span class="glyphicon glyphicon-arrow-left"></span> Back </button>
         <button type="button"  onclick="apply(<?php echo $result['jobid']; ?>)"></button>
<div id="applydiv"></div>

<div class="page-header" />

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
        echo "<td>  <a style='color: whitesmoke;'  href='viewofjs.php?jid=".$result['jobid']."'><button type='button' class='btn btn-success'>View Job</button></a> </td>";
        //<td><button type="button" class="btn btn-success btn-lg" onclick="apply(<?php echo $result['jobid']; )">
        //<span class='glyphicon glyphicon-ok'></span> Apply for this Job
         //</button></td>
        
        echo "</tr>";
    }
?>
    </table>
    </div>
</div>
</body>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet">
<link href="css/jobseeker.css" rel="stylesheet">
<script type="text/javascript" src="../js/validate.js"></script>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="location/location.js"></script>
</html>
