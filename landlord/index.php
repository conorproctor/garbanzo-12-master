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
    </head>
    <body>
      <br><br><center><i class="fa fa-user" style="font-size:120px;color:blue"></i></center>
      <br>
      <body style="background-color:gray">
    <body>
    <?php

    if (!isset($_SESSION['username'])) { ?>
    <h1><center>Login</center></h1>
    <center><form method="post" action="login-action.php">
       <br> <input type="text" name="username" placeholder = "Username" /><br>
       <input type="password" name="password" placeholder = "Password" /><br>
       <input type="submit" value="Login" /> </form><br>
        Not a member yet? Click <a href="registration.php">here</a> to register.

    </center>
    <style>  input{
     text-align:center;
}
  <style>
  <?php } else if (isset($_SESSION['username'])) { ?>

        <?php echo $_SESSION['username'] ?>'s Profile</a> | <a href="logout.php">Logout</a>
    <?php } ?>
    <?php
    if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      $landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
       while ($user_data = $landlord->fetch_assoc()) { ?>

         <b><?php echo $user_data['user_id'] ?></b>
    <?php echo $user_data['username'] ?> | <a href="profile.php?user=<?php echo $user_data['username'] ?>">View Profile</a>
    <?php }
   }
   ?>
 </body>

</html>
