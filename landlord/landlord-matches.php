<?php
include 'connection.php';
  session_start();
   if (isset($_GET['user']))
    {
              $user = $_GET['user'];
              $get_user = $mysqli->query("SELECT * FROM landlord WHERE user_id = '$user'");
              if ($get_user->num_rows == 1) {
                  $profile_data = $get_user->fetch_assoc();
                }}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Housefindr</title>
    <h1>Matches</h1>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
  .no-matches{
    color:red;
    text-align: center;
  }
  .table-sub{
    background-color: green;
    color: white ;
  }
        </style>
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


       <!-- Top menu on mobile devices -->
       <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
           <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
           <span>HouseFindr</span>
       </header>

       <!-- Overlay effect when opening sidebar on small screens -->
       <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
       <div class="w3-main" style="margin-left:340px;margin-right:40px"></div>
          <!-- <?php
          $visitor = $_SESSION['username'];
          if ($user == $visitor ) { ?>
          <?php }
          ?> -->
    <script>var data = []</script>
    <!-- <?php echo $user ?> -->


   <?php
   if (isset($_SESSION['username'])) {
     $username = $_SESSION['username'];
     $users = $mysqli->query("SELECT DISTINCT m.tenant_id,u.username, u.address, u.email, u.number from matches m join users u on m.tenant_id=u.user_id where m.landlord_id='4'");
      while ($user_data = $users->fetch_assoc()) { ?>

        <script>
         var js_array<?php echo $user_data['tenant_id'] ?> = [<?php echo '"'.implode('","',  $user_data ).'"' ?>];
      //console.log(js_array<?php echo  $user_data['tenant_id'] ?>);
         data.push(js_array<?php echo $user_data['tenant_id'] ?>)
      </script>

    <?php }
   }
   ?>
   <script>console.log(data)</script>
  <script src="js/matching-landlord.js"></script>


  <div id="tenant-match"></div>
  <script>

  //window.onload = function(){ document.forms['make_match'].submit(); }

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
