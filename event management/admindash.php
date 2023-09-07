<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    echo "<script>window.location.href='adminlogin.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .welcome{
            background-color:cyan;
            font-size:30px;
            
        }
        .headings{
            background-color:pink;
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
        <h3 align="center"> Welcome Admin </h3>
        <hr>
        </div>
        <div class="headings">
   <table align="center" border="1" class="table table-striped">
        <tr>
            <td align="center"><a href="createevent.php">1.Create Event </a></td>
        </tr>
        <tr>
            <td align="center"><a href="eventlist.php">2. Show Event</a></td>
        </tr>
        <tr>
            <td align="center"><a href="bookingreq.php">3. Event Booking</a></td>
        </tr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
       </body>
</html>
