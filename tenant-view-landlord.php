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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>HouseFindr</title>

    <head>
      <style>
      body{
        background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
      }

    </style>
  </head>
    <title>
        <?php echo $profile_data['username'] ?>'s Profile</title>
</head>

<body>
  <a href="index.php">Back to interface </a>\|/
  <a href="login.php"> Back to home page </a>

    <h3>House Information
    </h3>
    <table>
      <center>

        <tr>
            <td>House address:</td>
            <td>
                <?php echo $profile_data['address'] ?>
            </td>
        </tr>

        <tr>
            <td>Nearest College:</td>
            <td>
                <?php echo $profile_data['college'] ?>
            </td>
        </tr>
        <tr>
            <td>Distance to college in KM:</td>
            <td>
                <?php echo $profile_data['distance'] ?>
            </td>
        </tr>
        <tr>
            <td>Lease length in months:</td>
            <td>
                <?php echo $profile_data['leaselength'] ?>
            </td>
        </tr>
        <tr>
            <td>Monthly rent (max):</td>
            <td>
                <?php echo $profile_data['rent'] ?>
            </td>
        </tr>
        <tr>
            <td>Deposit (max):</td>
            <td>
                <?php echo $profile_data['deposit'] ?>
            </td>
        </tr>
        <tr>
            <td>Room type:</td>
            <td>
                <?php echo $profile_data['room'] ?>
            </td>
        </tr>
        <tr>
            <td>Move in date:</td>
            <td>
                <?php echo $profile_data['move_in'] ?>
            </td>
        </tr>
        <tr>
            <td>Amenities:</td>
            <td>
                <?php echo $profile_data['amenities'] ?>
            </td>
        </tr>
        <tr>
            <td>Rules:</td>
            <td>
                <?php echo $profile_data['rules'] ?>
            </td>
        </tr>
        <tr>
            <td>Nearby facilities:</td>
            <td>
                <?php echo $profile_data['nearby_facilities'] ?>
            </td>
        </tr>


    </table>
    <a href="PHPMySqlFileUpload/view.php" class="btn btn-info">Show Uploaded Files</a>
  </center>
</body>
</html>
