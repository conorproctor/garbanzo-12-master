<?php
include 'connection.php';
  session_start();
   if (isset($_GET['tenant']))
    {
              $user = $_GET['tenant'];
              $get_user = $mysqli->query("SELECT * FROM users WHERE user_id = '$user'");
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
        background-color:#cdebf9;      }

  #tenant-view-box {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }
  #tenant-view-box td, #tenant-view-box th {
      border: 1px solid #000000;
      padding: 8px;
    }

  #tenant-view-box tr:nth-child(even){background-color: #f2f2f2;}

  #tenant-view-box tr:hover {background-color: #ddd;}

  #tenant-view-box th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #000000;
      color: white;
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

    <center><br><br><br><h3>House Information</h3>
      <table id="tenant-view-box">
        <center>
          <tr>
               <td> Name:</td>
              <td>
                  <?php echo $profile_data['full_name'] ?>
              </td>
          </tr>
          <tr>
              <td>Age:</td>
              <td>
                  <?php echo $profile_data['age'] ?>
              </td>
          </tr>

          <tr>
              <td>Gender:</td>
              <td>
                  <?php echo $profile_data['gender'] ?>
              </td>
          </tr>

          <tr>
              <td>Address:</td>
              <td>
                  <?php echo $profile_data['address'] ?>
              </td>
          </tr>

          <tr>
              <td>College:</td>
              <td>
                  <?php echo $profile_data['college'] ?>
              </td>
          </tr>

          <tr>
              <td>Course:</td>
              <td>
                  <?php echo $profile_data['course'] ?>
              </td>
          </tr>

          <tr>
              <td>Year:</td>
              <td>
                  <?php echo $profile_data['year'] ?>
              </td>
          </tr>
          <tr>
              <td>Distance from college in KM:</td>
              <td>
                  <?php echo $profile_data['distance'] ?> KM
              </td>
          </tr>
          <tr>
              <td>Lease length in months:</td>
              <td>
                  <?php echo $profile_data['leaselength'] ?> months
              </td>
          </tr>
          <tr>
              <td>Monthly rent (max):</td>
              <td>
                  €<?php echo $profile_data['rent'] ?>
              </td>
          </tr>
          <tr>
              <td>Deposit (max):</td>
              <td>
                  €<?php echo $profile_data['deposit'] ?>
              </td>
          </tr>
          <tr>
              <td>Move in date:</td>
              <td>
                  <?php echo $profile_data['move_in'] ?>
              </td>
          </tr>
          <tr>
              <td>Room type:</td>
              <td>
                  <?php echo $profile_data['room'] ?>
              </td>
          </tr>
          <tr>
              <td>Desired amenities:</td>
              <td>
                  <?php echo $profile_data['amenities'] ?>
              </td>
          </tr>
          <tr>
              <td>Desired nearby facilities:</td>
              <td>
                  <?php echo $profile_data['nearby_facilities'] ?>
              </td>
          </tr>

      </table>
    <!--<a href="tel:+353871642535" class="btn btn_primary" itemprop="telephone"><i class="fa fa-phone"></i> +353-87-1642535</a>
    <!-- <a href="landlord/PHPMySqlFileUpload/view.php" class="btn btn-info">Go to Uploaded Files</a> -->

<?php
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $users = $mysqli->query("SELECT * FROM users WHERE username='$username'");
   while ($user_data = $users->fetch_assoc()) { ?>

     <form method="post" name="make_match" action="make-match.php?user=<?php echo $user_data['user_id'] ?>">
     <input type="hidden" name="landlord_id" value="<?php echo $profile_data['user_id'] ?>">
     <input type="hidden" name="tenant_id" value="<?php echo $user_data['user_id'] ?>">

     <input type="submit" name="see-relationship" value="Check to see if you've made match" />

<?php }
}
?>
</form>


</center>

  <script>

  // window.onload = function(){ document.forms['make_match'].submit(); }

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
