<?php
include('config.php');
//include_once('notify.php');

$q3=mysqli_query($db1,"select id, name, mobile, email, date, title from jsee, jobs where jid=jobid");
$q3row=mysqli_fetch_array($q3);


?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Jobs</title>
    <script type="text/javascript">
        function selectJs(user,job,emp) {
            var xmlhttp;
            if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = "Processing Request..";
                } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("message").innerHTML = "Error Occurred. <a href='manage_applicants.php'>Reload Or Try Again</a> the page.";
                }
            }
            xmlhttp.open("GET", "process_select.php?user=" + user +"&job="+job + "&emp="+emp, true);
            xmlhttp.send();
        }
        function rejectJs(user,job,emp) {
            var xmlhttp;
            if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = "Processing Request..";
                } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("message").innerHTML = "Error Occurred. <a href='manage_applicants.php'>Reload Or Try Again</a> the page.";
                }
            }
            xmlhttp.open("GET", "process_reject.php?user=" + user +"&job="+job + "&emp="+emp, true);
            xmlhttp.send();
        }
    </script>
</head>



<body>


<!-- ----------------------------------------- contents -------------------------------------------------------------------------- -->
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

