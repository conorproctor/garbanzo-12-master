<?php    include 'connection.php';
   if (isset($_POST['update_profile'])) {
            $user = $_GET['user'];
            $address = $_POST['address'];
            $college = $_POST['college'];
            $distance  = $_POST['distance'];
            $leaselength = $_POST['leaselength'];
            $rent = $_POST['rent'];
            $deposit = $_POST['deposit'];
            $room = $_POST['room'];
            $move_in = $_POST['move_in'];
            $amenities = $_POST['amenities'];
            $rules = $_POST['rules'];
            $nearby_facilities = $_POST['nearby_facilities'];
            $number = $_POST['number'];


            $update_profile = $mysqli->query("UPDATE landlord SET
               address = '$address',
               college = '$college',
               distance= '$distance',
               leaselength = '$leaselength',
               rent = '$rent',
               deposit = '$deposit',
               room = '$room',
               move_in = '$move_in',
               amenities = '$amenities',
               rules = '$rules',
               nearby_facilities = '$nearby_facilities',
               number = '$number'

               WHERE username = '$user'");
               if ($update_profile) {
                 header("Location: landlord-profile.php?user=$user");}
              else{
                echo $mysqli->error;
          }
}?>
