<?php

include_once('config.php');
$type=$_GET['type'];

if (isset($_POST['submit']))
{
   
    if($type=="file")
    {
        upload_resume();
    }
    
}


function upload_resume()
{

$filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.doc','.docx','.pdf');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
    {
        // Rename file
        $newfilename = . $file_ext;
        if (file_exists("uploads/resume/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/resume/".$newfilename);
        }

            move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/resume/" . $newfilename);
            mysqli_select_db($GLOBALS['db1'],"jobportal");
            $cmd=mysqli_query($GLOBALS['db1'],"update jsee set resume= '$newfilename'");
            if (!$cmd)
            {
                echo("Error description: " . mysqli_error($db1));
            }
            else{
               //echo "File uploaded succesfully ; <a href='jobseeker/profile.php'> Go back to profile </a>";
               header('location:jobseeker/profile.php?msg=suc-res');
            }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 500000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}
?>