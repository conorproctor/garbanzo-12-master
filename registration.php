<?php
include 'connection.php';
session_start();
?>
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
    <br><br><br><center><i class="fa fa-user-plus" style="font-size:120px;color:blue"></i></center>
    <br>
    <style>body{
      background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
    }</style>

<?php
  if (!isset($_SESSION['username'])) { ?>
    <h1><center>Registration</center></h1>
<?php
  if (isset($_GET['register_action'])) {
    if ($_GET['register_action'] == "success") { ?>
      Successfully Registered!
<?php
 }
}
?>
  <center><form method="post" action="register-action.php">

    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>

    <input type="submit" name="submit"  value="Register" />
  </form>
  <style>  input{
   text-align:center;
  }
  <style>

  <br><br>Already a member? Click <a href="index.php">here</a> to login.
<?php } else { ?>
  You already logged in. Click <a href="logout.php">here</a> to logout.
<?php
 }
?>
</center>
</body>
</html>
