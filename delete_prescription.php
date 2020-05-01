<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['pharmacist_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
$id=$_GET[prescription_id];
mysqli_query($conn,"delete from prescription where prescription_id='$id'");

//$rows=mysql_fetch_assoc($result);
header("location:prescription.php");
?>


