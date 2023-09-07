<?php
include('dbcon.php');
$id= $_GET['id'];
$sql = "DELETE FROM `event` WHERE `event_id`='$id'";
$fire = mysqli_query($con,$sql);
if($fire){
    echo '<script> window.alert("Event Delete Successfully");window.location.href="eventlist.php";</script>';
}

?>