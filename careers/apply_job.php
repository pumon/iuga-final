<?php

include_once('config.php');

$jobid=$_POST['jid'];

echo $jobid;
$name=$_POST['name'];
$mobile=$_POST['mobno'];
$email=$_POST['email'];
$date=date("y-m-d");
//echo  $jobid;
$q1=mysqli_query($db1,"select * from jsee where mobile = $mobile AND email = $email ");
if(mysqli_num_rows($q1)){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have already applied for this job!</p>
        </div>";
}
else{
    /*$q3=mysqli_query($db1,"SELECT eid from jobs where jobid = '$jobid'");
    $q3result=mysqli_fetch_array($q3);
    $emp_id=$q3result['eid']; */
    //echo $emp_id;
    $q2=mysqli_query($db1,"insert into jsee (name,mobile,jid,email,date) VALUES('$name','$mobile','$jobid','$email','$date')");
   // echo mysqli_error($db1);
    if($q2){
        $st=1;
        header('location:viewofjs.php?jid='.$jobid.'&st='.$st);
        


    }
    else{
        echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Oops!:</strong>Sorry ! Failed to apply for this job!</p>
        </div>";
    }


}
?>