<?php
session_start();
if(isset($_SESSION['id'])){
    echo "<script>window.location.href='welcome.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    
    <body style="background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <header style="background-color: #778899 ; padding: 20px; text-align: center;">
      <h1 style="font-size: 24px;"><font color="black">Event Management System</h1>
    </header>
    <style>
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      margin-right: 10px;
    }


</style>
</head>
<body>
    <h3 align="right" style="margin-right:20px;"><a href="./adminlogin.php">Admin Login</a></h3>
    <h1 align="center">Welcome to Event Management System </h1>
    <h2 align="center"> Log In</h2>
    <form align="center" method="POST" action="./home.php">
       <b> Username : <input type="text" name="username"><br><br>
        Password </b> : <input type="password" name="password"><br><br>
        <input type="submit" value="Login" name="Submit" class="button">
</form>
<h4 align="center">New User? <a href="registration.php"> Click here to Register </h4></a>
<br><footer style="background-color: #778899 ; padding: 10px; text-align: center; margin-top:100px;">
<p style="font-size: 14px;">&copy; 2023 Event Management System. All rights reserved.</p>
</footer>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","ems");

include('dbcon.php');
if(isset($_POST['Submit']))
{
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `registration` WHERE `username`='$username' AND`password`='$password'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        while($row = mysqli_fetch_assoc($run)){
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['name'] = $row['username'];
            echo "<script>window.location.href='welcome.php'</script>";
        }
       
    }
    else{
        echo '<script> window.alert("User Not Found!!!")
        </script>';
    }
    
  
}

?>
    
    