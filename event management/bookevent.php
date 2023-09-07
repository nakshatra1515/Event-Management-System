<?php
session_start();
include('dbcon.php');
$id= $_GET['id'];
$user_id = $_SESSION['id'];
$sql = "INSERT INTO `booking` (`u_id`,`e_id`,`status`) VALUES ('$user_id','$id',0)";
$fire = mysqli_query($con,$sql);
if($fire){
    echo '<script> window.alert("Event Book Successfully");window.location.href="showevent.php";</script>';
}

?>