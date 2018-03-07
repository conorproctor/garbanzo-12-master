<?php    include 'connection.php';
   if (isset($_POST['update_profile'])) {
            $user = $_GET['user'];
            $full_name = $_POST['full_name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $college = $_POST['college'];
            $course = $_POST['course'];
            $year = $_POST['year'];
            $distance  = $_POST['distance'];
            $leaselength = $_POST['leaselength'];
            $rent = $_POST['rent'];
            $deposit = $_POST['deposit'];
            $move_in = $_POST['move_in'];
            $room = $_POST['room'];
            $amenities = $_POST['amenities'];
            $nearby_facilities = $_POST['nearby_facilities'];

            $update_profile = $mysqli->query("UPDATE users SET
               full_name = '$full_name', age = $age, gender = '$gender', address = '$address', college = '$college',
               course= '$course', year= '$year', distance= '$distance', leaselength = '$leaselength', rent = '$rent',
               deposit = '$deposit', move_in = '$move_in', room = '$room', amenities = '$amenities', nearby_facilities = '$nearby_facilities'
               WHERE username = '$user'");
    if ($update_profile) {
             header("Location: profile.php?user=$user");}
              else{
                echo $mysqli->error;
          }
}?>
