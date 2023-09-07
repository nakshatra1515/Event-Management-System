<?php
session_start();
if(isset($_SESSION['admin_id'])){
    echo "<script>window.location.href='admindash.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <body style="background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <header style="background-color: #778899 ; padding: 20px; text-align: center;">
      <h1 style="font-size: 24px;"><font color="black">Event Management System</h1>
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
      align:center;
    }
</style>
    </header>
</head>
<body>
    <h1 align="center"> Admin Login</h1>
    <form action="adminlogin.php" method="POST">
        <table align="center">
            <tr>
                <td>Username:</td><td><input type="text" name="uname" required></td>
</tr>
<tr>
    <td>Password:</td><td><input type="password" name="pass" required></td>
</tr>
<tr>
    <td>
<input type="submit" value="Submit" name="Submit" class="button">
</td>
</tr>

</table>
<br><footer style="background-color: #778899 ; padding: 10px; text-align: center; margin-top:300px;">
<p style="font-size: 14px;">&copy; 2023 Event Management System. All rights reserved.</p>
</footer>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","ems");

include('dbcon.php');
if(isset($_POST['Submit']))
{
    
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `admin` WHERE `username`='$username' AND`password`='$password'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        while($row = mysqli_fetch_assoc($run)){
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['name'] = $row['username'];
            echo "<script>window.location.href='admindash.php'</script>";
        }
       
    }
    else{
        echo '<script> window.alert("User Not Found!!!")
        </script>';
    }
    
  
}

?>
    

