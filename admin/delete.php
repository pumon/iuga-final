<?php
$jobid= $_GET['jid'];
include_once('config.php');

$query=mysqli_query($db1,"DELETE FROM jsee WHERE '$jobid'=jid");
$query1=mysqli_query($db1,"DELETE FROM jobs WHERE '$jobid'=jobid");



 header('Location:index.php?st=1');

?>