<?php
include 'connection.php';
session_start();


if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $get_user = $mysqli->query("SELECT * FROM landlord WHERE username = '$user'");
    $user_data = $get_user->fetch_assoc();
   } else {
             header("Location: landlord-profile.php");
}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">

    body{
      background-color: #cdebf9;
    }

    </style>


    <title><?php echo $user_data['username'] ?>'s Profile Settings</title>
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
         <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-arrow-left"></i> Back to interface </a></i>
         <a href="landlord-profile.php?user=<?php echo $user_data['username'] ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-user"></i>  House Details</a>
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
    <center>  <br><br><br><br><h3>Edit House Information</h3>
    <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">
      <label>House address:</label><br><input class="form-control" type="text" name="address"  value="<?php echo $user_data['address'] ?>" /><br>
      <label>Nearest College:</label><br><input class="form-control"type="text" name="college" value="<?php echo $user_data['college'] ?>" /><br>
      <label>Distance to college (kms):</label><br><input class="form-control" type="text" name="distance" value="<?php echo $user_data['distance'] ?>" /><br><br>
      <label>Lease length(months):</label><br> <input class="form-control" type="text" name="leaselength" value="<?php echo $user_data['leaselength'] ?>" /><br>
      <label>Monthly rent:</label><br> <input class="form-control" type="text" name="rent" value="<?php echo $user_data['rent'] ?>" /><br>
      <label>Deposit:</label><br> <input class="form-control" type="text" name="deposit" value="<?php echo $user_data['deposit'] ?>" /><br>
      <label>Room type:</label><br> <input class="form-control" type="text" name="room" value="<?php echo $user_data['room'] ?>" /><br>
      <label>Move in date:</label><br> <input class="form-control" type="text" name="move_in" value="<?php echo $user_data['move_in'] ?>" /><br>
      <label>Amenities:</label><br> <input class="form-control" type="text" name="amenities" value="<?php echo $user_data['amenities'] ?>" /><br>
      <label>Rules:</label><br> <input class="form-control" type="text" name="rules" value="<?php echo $user_data['rules'] ?>" /><br>
      <label>Nearby facilities:</label><br> <input class="form-control" type="text" name="nearby_facilities" value="<?php echo $user_data['nearby_facilities'] ?>" /><br><br>
      <label>Phone number:</label><br> <input class="form-control" type="text" name="number" value="<?php echo $user_data['number'] ?>" /><br><br>


      <center><a href="PHPMySqlFileUpload/photo-index.php"class="btn btn-info"> Upload house photo to swipe card</a><br><br>
      <a href="photos-to-profile/photo-index-interior.php"class="btn btn-info"> Upload photos of house to profile </a><br></center>

      <br>
       <!-- <input type="submit" name="update_profile" value="Update Profile" /> -->
       <button type="submit" class="btn btn-primary" name="update_profile" >Update Profile</button></center>

     </form>

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
