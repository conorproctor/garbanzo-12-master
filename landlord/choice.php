<?php
include 'connection.php';
session_start();?>
<!DOCTYPE html>
<html>
<style>p{color:white;}</style>
<head>
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body style="background-color: black;">
</head>
<h4><center>Please select the option you want to register as:</center></h4>

<style>
h4{
    color:white;
}
.btn-group input {
    background-color: black; /* blue background */
    border: 6px solid white; /* black/blue border */
    color: white; /* White text */
    padding: 100px 100px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    width: 100%; /* Set a width if needed */
    display: block; /* Make the buttons appear below each other */
  }

.btn-group input :not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group input:hover {
    background-color: #gray;
}
input
{
    font-size:40px;
}
</style>
<body>


<div class="btn-group">
  <form>
    <input class="MyButton" type="button"  value="Tenant" onclick="window.location.href='registration.php'" />
    <input class="MyButton2" type="button" value="Landlord" onclick="window.location.href='registration.php'" />
</form>

</div>
<br><center><p><b>Already a member? Click <a href="index.php">here</a> to login.</b></p></center>

</body>
</html>

<!-- <div class="form">
<a href="logout.php">Logout</a>
-->


</html>
