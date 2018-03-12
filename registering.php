<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">

body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}
</style>

</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">

<h1 class="text-center text-success">Register as a Tenant or Landlord</h1>
<br/>

<div class="col-sm-12">

  <ul class="nav nav-pills" >

    <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Tenant</a></li>
    <!--<li class=" " style="width:49%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Landlord</a></li> -->

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<?php
  if (!isset($_SESSION['username'])) { ?>
<?php
  if (isset($_GET['register_action'])) {
    if ($_GET['register_action'] == "success") { ?>
      Successfully Registered!
<?php
 }
}
?>
  <center><form method="post" action="register-action.php">

      <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" class="form-control" id="email"  required>
      </div>


      <div class="form-group">
        <label for="pwd">Password: </label>
        <input type="password" class="form-control" id="pwd" required>
      </div>

      <button type="submit" class="btn btn-default">Register as Tenant</button>


    <!--<input type="text" name="username" placeholder="Username" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>

    <input type="submit" name="submit"  value="Register" />-->
  </form>
  <style>  input{
   text-align:center;
  }
  </style>

  <br>Already a member? Click <a href="index.php">here</a> to login.
<?php } else { ?>
  You already logged in. Click <a href="logout.php">here</a> to logout.
<?php
 }
?>
      </div>
    </div>
    </div>
   </div>
  </div>
</div>

<!-- This design is created by manoj chauhan  -->
</body>
</html>
