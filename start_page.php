<?php
include 'connection.php';
session_start();?>
    <!DOCTYPE html>
    <html>
     <head>
        <center>
            <meta charset="UTF-8">
            <title>HouseFindr</title>
            <link rel="stylesheet" href="css/style.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <body style="background-color:black">
              <link rel="stylesheet" href="css/style.css" />
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <br><br><img src="img\logoHome.jpg" style="width:75%">
            <style>
            h1,p{
              color: white;
            }
  .button {
                    background-color: #4CAF50;
                    /* Green */
                    border: none;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                }

                .button5 {
                    border-radius: 50%;
                }
            </style>
    </head>

    <body>
            <br><br><h1>HouseFindr</h1>
          <br><br><p>Giving students the best chance of obtaining a house for the academic year & making it effortless for landlords to manage their tenants</p>
          <center><div class="w3-container" style="margin-top:60px">
              <h4 class=" w3-text-black">Set up your profile and improve your chances of matching the desired tenant!</h4>
             <br> <a class="btn btn-primary btn-lg enabled" href="registration.php"  role="button" aria-disabled="true">Click here to get started</a>
        </div>
    </body>

</html>
