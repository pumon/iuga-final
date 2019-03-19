<?php  
include('./iugale-admin/connect.php');
if(isset($_POST['email'])&& $_POST['email']!=null){

    $email=$_POST['email'];
    $type=$_POST['type'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $sql = "INSERT INTO quote VALUES ('$name','$phone','$email','$type','$message')";
    $res=mysqli_query($conn, $sql);
    if(isset($res)){
        echo "<script>alert('Records inserted successfully.');window.location.href='index.php';</script>";

    } else{
        echo "<script>alert('Records not successfully.');window.location.href='index.php';</script>;";

    }

}
else{
    echo "<script>window.location.href='index.php';</script>;";
}
?>