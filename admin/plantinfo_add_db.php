<?php
session_start();
if(isset($_SESSION['uname'])){
   include_once('includes/config.php');
   extract($_POST);
    $filename=time()."_".$_FILES['image']['name'];
    $path="../images/plant/".$filename;
    $plantdescription = mysqli_real_escape_string($conn,$plantdescription);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
       $qry="insert into plantinformation (plantname,plantdescription,image) values('".$plantname."','".$plantdescription."','".$filename."')";
       mysqli_query($conn,$qry) or exit("Plantinfo insert fail".mysqli_error($conn));
        $_SESSION['error'] = "plantinfo Added successfully";
       header("location:plantinfo_add.php");
    }else{
        $_SESSION['error'] = "file upload fail";
        header("location:plantinfo_add.php");
    }
   
}else{
  $_SESSION['error'] = "you are not authorize to access this page without login";

  header("location:index.php");
}
?>
