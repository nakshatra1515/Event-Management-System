<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<script>window.location.href='home.php'</script>";
}
$user_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h2 align="center"> Event List </h2>
    <table align="center" border="1" class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Cost</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include('dbcon.php');
$con=mysqli_connect("localhost","root","","ems");
$qry="SELECT * FROM `booking` JOIN `event` JOIN `registration` WHERE booking.u_id=registration.user_id AND booking.e_id=event.event_id AND booking.u_id='$user_id'";
$run=mysqli_query($con,$qry);
$i=0;
while($res=mysqli_fetch_array($run))
{
    $i++;
    ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $res['ename']?></td>
                <td><?php echo $res['venue']?></td>
                <td><?php echo $res['cost']?></td>
                <td>
                    <?php
                       if($res['status']==1){
                        echo 'Approved';
                        }elseif($res['status']==2){
                            echo 'reject';
                        }else{
                            echo 'pending';
                        }
                    ?>
                </td>
            </tr>
            <?php
}
            ?>
        </tbody>
</tr>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>





