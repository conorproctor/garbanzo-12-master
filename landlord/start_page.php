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
            <br><br><img src="img\logoHome.jpg" style="width:75%">
            <style>
            h1{
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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .h2 {
                color: white;
            }

            .button {
                display: inline-block;
                border-radius: 13px;
                background-color: gray;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 300px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 15px;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>
        </head>

        <body>

            <br><br><h1>HouseFindr</h1>
            <br><br><br><br><br><br><br><br><br><br>
            <a class="button" style="vertical-align:middle" href="choice.php"><span> Get started </span></a>

        </body>
        <!--  <a class="w3-button w3-XXL w3-blue" href="choice.php">Click to get started!</a>
-->
        </div>
    </body>
    </center>
</html>
