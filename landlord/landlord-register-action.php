<?php
include '../connection.php';

  if (isset($_POST['username'])) {
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $register = $mysqli->query("INSERT INTO landlord (email, username, password) VALUES ('$email', '$username', '". md5($password)."')");
  if ($register) {

      header("Location: index.php?register_action=success");
      } else {
          echo $mysqli->error;
        }
      }
?>
