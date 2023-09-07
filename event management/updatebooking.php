<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    echo "<script>window.location.href='adminlogin.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Create Event</title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
form {
 margin: auto;
  background-color: white;
  width: 500px;
  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
}

input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body style="margin-top:60px;" align="center">
<form method="POST" action="./registration.php">
    <div class="container">
    <h2 id="head"> Create Event</h2>
    <hr><br>
    <label for="Status"><b>Status</b></label><br>
    <select name="status" id="">
        <option value="" disabled selected>select option</option>
        <option value="1">Approved</option>
        <option value="2">Reject</option>
    </select><br><br>
    <input type="submit" name="submit" value="Update"></button>
  </div>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$status=$_POST['status'];
$id = $_GET['id'];
$qry="UPDATE `booking` SET `status`='$status' WHERE `booking_id`='$id'";
$run=mysqli_query($con,$qry);
echo '<script> window.alert("Booking Update Successfully")</script>';
if(!$run)
{
    echo "failed";
}
}

?>