<?php
include 'connection.php';

  if (isset($_POST['username'])) {
      $email = $_POST['email'];
      $number = $_POST['number'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $register = $mysqli->query("INSERT INTO users (email, number, username, password) VALUES ('$email', '$number', '$username', '". md5($password)."')");
  if ($register) {

      header("Location: index.php?register_action=success");
      } else {
          echo $mysqli->error;
        }
      }
?>
