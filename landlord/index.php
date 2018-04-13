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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="PHPMySqlFileUpload/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>
      <br>
      <style>
      body{
        background-color: #cdebf9;}

    </style>
    <br><br><center><i class="fa fa-user" style="font-size:170px;color:blue"></i></center>

    <body>
    <?php

    if (!isset($_SESSION['username'])) { ?>
    <h1><center>Login</center></h1>
    <center><form method="post" action="login-action.php">
       <br>
       <input type="text" name="email" placeholder="Email" required /><br>
       <input type="text" name="username" placeholder = "Username" /><br>
       <input type="password" name="password" placeholder = "Password" /><br>
       <input type="submit" value="Login" /> </form><br>
        Not a member yet? Click <a href="registration.php">here</a> to register.

    </center>
    <style>  input{
     text-align:center;
}
  </style>
  <?php } else if (isset($_SESSION['username'])) { ?>


    <body>

              <?php } ?>
                <?php
                if (isset($_SESSION['username'])) {
                  $username = $_SESSION['username'];
                  $landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
                   while ($user_data = $landlord->fetch_assoc()) { ?>

                     <body>

                       <!-- Sidebar/menu -->
                       <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>



                           <!-- Avatar image in top left corner -->
                           <br><br><center><a href="login.php"><img src="img\logo1.jpg" style="width:50%"></a></center>
                           <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
                           <div class="navbar-header">

                           </div></center>
                           <!-- Collection of nav links and other content for toggling -->
                           <div class="w3-bar-block">
                               <a href="landlord-profile.php?user=<?php echo $user_data['username'] ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="fa fa-home"></span>  View Profile</a>
                               <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="fa fa-home"></span> Back to dashboard</a>
                               <a href="matches.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="fa fa-handshake-o"></span>  Your matches</a>
                               <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="glyphicon glyphicon-log-out"></span> Log out </a>


                           </div>
                           <?php }
                           }
                           ?>

                       </nav>

                       <!-- Top menu on small screens -->
                       <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
                           <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
                           <span>HouseFindr</span>
                       </header>

                       <!-- Overlay effect when opening sidebar on small screens -->
                       <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

                       <!-- !PAGE CONTENT! -->
                       <div class="w3-main" style="margin-left:340px;margin-right:40px">

                           <!-- Header -->



                     </label>
                   </form>
                   </div>
                   <?php
                   if (isset($_SESSION['username'])) {
                     $username = $_SESSION['username'];
                     $landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
                      while ($user_data = $landlord->fetch_assoc()) { ?>
                          <center><p class="w3-text-blue" >Welcome <?php echo $user_data['username'] ?></p></center>



                   <center><div class="w3-container" style="margin-top:60px">
                       <h4 class=" w3-text-black">Set up your profile and improve your chances of matching the desired tenant!</h4>
                      <br><br> <a href="landlord-profile.php?user=<?php echo $user_data['username'] ?>" class="btn btn-primary btn-lg enabled" role="button" aria-disabled="true">Click here to go to your profile</a>
                  </div></center>
                <?php }
               }
               ?>
            </head>


                           <script>
                               // Script to open and close sidebar
                               function w3_open() {
                                   document.getElementById("mySidebar").style.display = "block";
                                   document.getElementById("myOverlay").style.display = "block";
                               }

                               function w3_close() {
                                   document.getElementById("mySidebar").style.display = "none";
                                   document.getElementById("myOverlay").style.display = "none";
                               }


                           </script>
                   </body>
              </div>
          </div>
      </nav>

 </body>

</html>
