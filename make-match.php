<?php    include 'connection.php';
   if (isset($_POST['make-relationship'])) {
            $landlord_id = $_POST['landlord_id'];
            $tenant_id = $_POST['tenant_id'];

            $update_profile = $mysqli->query("INSERT INTO matches (landlord_id, tenant_id) VALUES ('$landlord_id', '$tenant_id') ");
            echo "$landlord_id";


    if ($update_profile) {
             header("Location: tenant-matches.php?user=$tenant_id");
              echo "success";
       }
              else{
                echo $mysqli->erro;
          }
}?>
