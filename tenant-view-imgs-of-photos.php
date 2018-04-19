<?php
include 'connection.php';
  session_start();
   if (isset($_GET['landlord']))
    {
              $user = $_GET['landlord'];
              $get_user = $mysqli->query("SELECT * FROM landlord WHERE user_id = '$user'");
              if ($get_user->num_rows == 1) {
                  $profile_data = $get_user->fetch_assoc();
                }}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>HouseFindr</title>

    <head>
      <style type="text/css">

      body{
        background-color: #cdebf9;
      }

      </style>

  </head>
    <title><?php echo $profile_data['username'] ?>'s Profile</title>
</head>

<body>


    <!-- Sidebar/menu -->
          <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
          <!-- Avatar image in top left corner -->
          <br><br><center><a href="login.php"><img src="img\logo1.jpg" style="width:50%"></a>
          <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
          <div class="navbar-header">
                </div></center>
          <!-- Collection of nav links and other content for toggling -->
          <div class="w3-bar-block"><br>
           <a href="swiping.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-arrow-left"></i> Back to swiping </a></i>
           <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-home"></i> Back to dashboard </a>
           <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="glyphicon glyphicon-log-out"></span> Log out </a>
          </div>
        </nav>
    </body>


     <!-- Top menu on small screens -->
     <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
         <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
         <span>HouseFindr</span>
     </header>

     <!-- Overlay effect when opening sidebar on small screens -->
     <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
     <div class="w3-main" style="margin-left:340px;margin-right:40px"></div>
        <?php
        $visitor = $_SESSION['username'];
        if ($user == $visitor ) { ?>
        <?php }
        ?>

    <br><br><br><h3>House Image</h3>
    <table>
      <center>

    </table>
    <a href="landlord/UploadedHouseImages/view-interior.php" class="btn btn-info">Show Uploaded Files</a>
  </center>
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
  </html>
