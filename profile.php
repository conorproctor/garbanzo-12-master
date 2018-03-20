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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <head>
      <style type="text/css">

      body{
        background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
      }

      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
    <title>
        <?php echo $profile_data['username'] ?>'s Profile</title>
</head>

<body>
    <a href="index.php">Home</a> |<?php echo $profile_data['username'] ?>'s Profile <h3>Personal Information |
        <?php
        $visitor = $_SESSION['username'];
        if ($user == $visitor ) { ?>
        <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a> | <a href="login.php"> Back to home page </a>

        <?php }
        ?>
    </h3>
    <table>
      <center>
        <tr>
            <td>Name:</td>
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
</body>
</html>
