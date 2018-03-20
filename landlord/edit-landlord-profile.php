<?php    include 'connection.php';

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
    <style type="text/css">

    body{
      background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
    }

    </style>

    <title>
        <?php echo $user_data['username'] ?>'s Profile Settings</title>
</head>

<body> <a href="index.php">Home</a>| Welcome to your profile <?php echo $user_data['username'] ?></a>!
    <h3>Update House Information</h3>
    <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">
      <label>House address:</label><br> <input type="text" name="address" value="<?php echo $user_data['address'] ?>" /><br><br>
      <label>Nearest College:</label><br> <input type="text" name="college" value="<?php echo $user_data['college'] ?>" /><br>
      <label>Distance to college (kms):</label><br> <input type="text" name="distance" value="<?php echo $user_data['distance'] ?>" /><br><br>
      <label>Lease length(months):</label><br> <input type="text" name="leaselength" value="<?php echo $user_data['leaselength'] ?>" /><br>
      <label>Monthly rent:</label><br> <input type="text" name="rent" value="<?php echo $user_data['rent'] ?>" /><br>
      <label>Deposit:</label><br> <input type="text" name="deposit" value="<?php echo $user_data['deposit'] ?>" /><br>
      <label>Room type:</label><br> <input type="text" name="room" value="<?php echo $user_data['room'] ?>" /><br>
      <label>Move in date:</label><br> <input type="text" name="move_in" value="<?php echo $user_data['move_in'] ?>" /><br>
      <label>Amenities:</label><br> <input type="text" name="amenities" value="<?php echo $user_data['amenities'] ?>" /><br>
      <label>Rules:</label><br> <input type="text" name="rules" value="<?php echo $user_data['rules'] ?>" /><br>
      <label>Nearby facilities:</label><br> <input type="text" name="nearby_facilities" value="<?php echo $user_data['nearby_facilities'] ?>" /><br>

      <br>
       <input type="submit" name="update_profile" value="Update Profile" />
     </form>
</body>

</html>
