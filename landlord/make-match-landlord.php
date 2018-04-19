<?php    include 'connection.php';
   if (isset($_POST['see-relationship'])) {
            $landlord_id = $_POST['landlord_id'];
            $tenant_id = $_POST['tenant_id'];

            $update_profile = $mysqli->query("REPLACE INTO matches (landlord_id, tenant_id) VALUES ('$landlord_id', '$tenant_id') ");
            echo "$tenant_id";

// SET landlord_id = '$landlord_id', tenant_id = '$tenant_id' WHERE tenant_id = '$tenant_id'
            // $register = $mysqli->query("INSERT INTO users (username, password) VALUES ('$username', '". md5($password)."')");


    if ($update_profile) {
             header("Location: landlord-matches.php?user=$landlord_id");
              echo "success";
       }
              else{
                echo $mysqli->erro;
          }
}?>
