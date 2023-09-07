<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <!-- Enter Username : <br><br>
        Enter Password : <input type="password" name="pass"><br><br>
        Enter Phone no : <input type="text" name="pno"><br><br>
        Enter Email id : <input type="email" name="mail"><br><br> 

        <input type="submit" name="submit" value="Register">-->
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
    <h2 id="head"> Registration Form </h2><br>
    <hr>
     <label for="username"><b>Username</b></label><br>
     <input type="text" name="username" placeholder="Enter name" required>
    <br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" id="psw" required>
    <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="mail" id="email" required>
    <br>
    <label for="psw-repeat"><b>Phone Number</b></label><br>
    <input type="text" placeholder="number" name="pno" id="psw-repeat" required>
    <hr>
    <input type="submit" name="submit" class="registerbtn"></button>
  </div>
</form>
</body>
</html>
<?php
include('dbcon.php');
$con=mysqli_connect("localhost","root","","ems");

if(isset($_POST['submit']))
{
$name=$_POST['username'];
$password=$_POST['pass'];
$pno=$_POST['pno'];
$email=$_POST['mail'];
$qry="INSERT INTO registration values('','$name','$password','$pno','$email')";
$run=mysqli_query($con,$qry);
if($run)
{
    echo "Registration Successful";
}
else{
    echo "failed";
}
}

?>