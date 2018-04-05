<?php
include '../connection.php';

  if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $name = $_POST['full_name'];
      $register = $mysqli->query("INSERT INTO landlord (username, password, full_name) VALUES ('$username', '". md5($password)."', '$full_name')");
  if ($register) {

      header("Location: index.php?register_action=success");
      } else {
          echo $mysqli->error;
        }
      }
?>
