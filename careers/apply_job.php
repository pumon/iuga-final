<?php

include_once('config.php');

$jobid=$_POST['jid'];


$name=$_POST['name'];
$mobile=$_POST['mobno'];
$email=$_POST['email'];
$date=date("y-m-d");
//echo  $jobid;
$q1=mysqli_query($db1,"select * from jsee where '$mobile' = mobile AND '$email' = email ");
//$w=mysqli_result($q1);
$q=mysqli_fetch_array($q1);
//echo $q['name'];



 

if($q=mysqli_fetch_array($q1)){
    
        $st=2;
        header('Location:viewofjs.php?jid='.$jobid.'&st='.$st.'#apply');
        
}
else{
   
        
          $q2=mysqli_query($db1,"insert into jsee (name,mobile,jid,email,date) VALUES('$name','$mobile','$jobid','$email','$date')");
         /* $q3=mysqli_query($db1,"select id from jsee where '$mobile' = mobile");
          $q4=mysqli_fetch_array($q3);
          $fid=$q4['id'];
         $filename = $_FILES["file"]["name"];
         $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
         $file_ext = substr($filename, strripos($filename, '.')); // get file name
         $filesize = $_FILES["file"]["size"];
            $allowed_file_types = array('.doc','.docx','.pdf');

         if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
         {
            // Rename file
            $newfilename = $file_basename.$file_ext;
            if (file_exists("uploads/resume/" . $newfilename))
            {
                // file already exists error
                unlink("uploads/resume/".$newfilename);
            }

                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/resume/" . $newfilename);
                mysqli_select_db($GLOBALS['db1'],"jobportal");
                $cmd=mysqli_query($GLOBALS['db1'],"update jsee set resume= '$newfilename' WHERE '$fid' = id " );
        }*/
         
        
        if($q2){
            $st=1;
            header('Location:viewofjs.php?jid='.$jobid.'&st='.$st.'#apply');
         }
    }
?>
