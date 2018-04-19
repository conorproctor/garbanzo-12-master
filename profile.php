<?php
include 'connection.php';
  session_start();
   if (isset($_GET['user']))
    {
              $user = $_GET['user'];
              $get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <head>
      <style type="text/css">

      body{
        background-color:#cdebf9;      }

  #tenant-box {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }
  #tenant-box td, #tenant-box th {
      border: 1px solid #000000;
      padding: 8px;
    }

  #tenant-box tr:nth-child(even){background-color: #f2f2f2;}

  #tenant-box tr:hover {background-color: #ddd;}

  #tenant-box th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #000000;
      color: white;
  }
  </style>
  </head>
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
       <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-arrow-left"></i> Back to interface </a></i>
       <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-user"></i> Edit Profile Details</a>
       <a href="swiping.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-hand-pointer-o"></i>  Start swiping</a>
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

 <!-- !PAGE CONTENT! -->
 <div class="w3-main" style="margin-left:340px;margin-right:40px"></div>

  <br><br><br><center><h3>Personal Information
        <?php
        $visitor = $_SESSION['username'];
        if ($user == $visitor ) { ?>
        <?php }
        ?>
    </h3></center>

    <table id="tenant-box">
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
