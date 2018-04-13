<?php
include 'connection.php';
session_start();
if (isset($_POST['username'])) {
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];

$login = $mysqli->query("SELECT * FROM landlord WHERE email = '$email' AND username = '$username' AND password = '.md5($password).' ");
if ($login->num_rows <= 1) {
$_SESSION['username'] = $username;
header("Location: login.php");
} else {
echo $mysqli->error;
}
}
?>
