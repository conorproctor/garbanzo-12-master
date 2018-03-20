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
  <br><center><i class="fa fa-user-plus" style="font-size:120px;color:blue"></i></center>
  <br>
    <style>body{
      background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
    }</style>
    <div class="container" style="margin-top: 5%;">
      <div class="row">
        <div class="col-sm-4"> </div>
    <div class="col-md-4">

    <h1 class="text-center text-success">Register as a Tenant or Landlord</h1>
    <br>
    <div class="col-sm-12">

      <ul class="nav nav-pills" >

        <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Tenant</a></li>
        <li class=" " style="width:49%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Landlord</a></li>

      </ul>

<center>
  <div class="tab-content">

  <?php
    if (!isset($_SESSION['username']))
    { ?>
        <h1><center>Registration</center></h1>
  <?php
    if (isset($_GET['register_action']))
      {
    if ($_GET['register_action'] == "success")
        {
    ?>
      Successfully Registered!
  <?php
      }
    }
  ?>

    <div id="home" class="tab-pane fade in active">
      <form method="post" action="register-action.php">

        <div class="form-group">
          <label for="UserName">T-Username</label>
          <input type="text" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd">
        </div>

        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-default" value="Register">Submit</button>

      </form>

      <br/>

      <a href="#" class="pull-right btn btn-block btn-danger" > Already Registered ?   </a>

    </div>

    <div id="menu1" class="tab-pane fade">

      <form method="post" action="register_landlord">

        <div class="form-group">
          <label for="UserName">L-UserName</label>
          <input type="text" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd">
        </div>

        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="pwd">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

      </form>

        <br/>
        <a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>

    </div>
  </div>

  <br><br>Already a member? Click <a href="index.php">here</a> to login.
    <?php } else { ?>
      You already logged in. Click <a href="logout.php">here</a> to logout.
    <?php
     }
    ?>

</center>



</body>
</html>
