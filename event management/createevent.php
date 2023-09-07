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
<body style="margin-top:60px;">
    <form method="POST" action="createevent.php">
    <div class="container">
    <h2 id="head"> Create Event </h2><br>
    <hr>

     <label for="eventname"><b>Enter Event Name:</b></label><br>
     <input type="text" name="ename" placeholder="Enter event name" required>
    <br>
    <label for="eventvenue"><b>Enter Venue:</b></label><br>
    <input type="text" placeholder="Enter Venue" name="venue" required>
    <br>
    <label for="cost"><b>Enter Cost:</b></label><br>
    <input type="text" placeholder="Enter Cost" name="cost" required>
    <br>
    <hr>


    <input type="submit" name="submit" value="Create Event"></button>
  </div>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$ename=$_POST['ename'];
$venue=$_POST['venue'];
$cost=$_POST['cost'];
$qry="INSERT INTO `event` VALUES ('','$ename','$venue','$cost')";
$run=mysqli_query($con,$qry);
echo '<script> window.alert("Event Added Successfully")</script>';
if(!$run)
{
    echo "failed";
}
}

?>