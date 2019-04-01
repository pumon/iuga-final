<?php
$jobid= $_GET['jid'];
include_once('config.php');

$sql = "DELETE FROM jobs WHERE '$jobid'=jobid";

if ($sql) {
    
	header('Location:manage_jobs.php?$st=1');
} 



?>