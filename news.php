<?php  
include('./iugale-admin/connect.php');
if(isset($_POST['email']) && $_POST['email']!=null){

    $news=$_POST['email'];
    $sql = "INSERT INTO newsletter VALUES ('$news')";
    $res=mysqli_query($conn, $sql);
    if(isset($res)){
        echo "<script>alert('Submitted.');window.location.href='index.php';</script>";

    } else{
        echo "<script>alert('Error in submitting');window.location.href='index.php';</script>;";

    }

}
else{
    echo "<script>window.location.href='index.php';</script>;";
}
?>