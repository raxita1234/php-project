<?php
session_start();
if(isset($_SESSION['uname'])){
   include_once('includes/config.php');
   $id=$_REQUEST["id"];
   $qry="delete from plantinformation where id=$id";
   mysqli_query($conn,$qry) or exit("delete fail".mysqli_error($conn));
   $_SESSION['error'] = "plantinfo deleted successfully";
   header("location:plantinfo.php");
   
}else{
  $_SESSION['error'] = "you are not authorize to access this page without login";

  header("location:index.php");
}
?>