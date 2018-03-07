<?php
include 'connection.php';
session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>HouseFindr</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

      <br><br><center><i class="fa fa-user" style="font-size:130px;color:blue"></i></center>
      <br><style>
      body{
        background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
      }

    </style>

    <?php

    if (!isset($_SESSION['username'])) { ?>
    <h1><center>Login</center></h1>
    <center><form method="post" action="login-action.php">
       <br> <input type="text" name="username" placeholder = "Username" /><br>
       <input type="password" name="password" placeholder = "Password" /><br>
       <input type="submit" value="Login" /> </form><br>
        Not a member yet? Click <a href="registration.php">here</a> to register.

    </center>
    <style>  input{ text-align:center; }
          a{
            font-size: 25;
          } </style>

  <?php } else if (isset($_SESSION['username'])) { ?>


    <?php }        ?>
    <?php
    if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      $users = $mysqli->query("SELECT * FROM users WHERE username='$username'");
       while ($user_data = $users->fetch_assoc()) { ?>

         <center><b><?php echo $user_data['user_id'] ?></b>
    <?php echo $user_data['username'] ?><br><a href="profile.php?user=<?php echo $user_data['username'] ?>"><br>View Profile</a><br><br>
     <a href="logout.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out </a><br></center>
    <?php }
   }
   ?>
 </body>

</html>
