<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<script>window.location.href='home.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .headings{
            font-size:20px;
            background-color: wheat;
        }
        .welcome{
            font-size: 30px;
            background-color: lightblue;
            text-align: center;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="welcome">
        <hr>
        <h2> Welcome </h2>
        <hr>
    </div>
   <div class="headings">
   <table align="center" border="1" class="table table-striped">
        <tr>
            <td align="center"><a href="showevent.php">1. Show Event List</a></td>
        </tr>
        <tr>
            <td align="center"><a href="mybooking.php">2. Show My Booking</a></td>
        </tr>
        <tr>
            <td align="center"><a href="logout.php">3. Logout</a></td>
        </tr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>