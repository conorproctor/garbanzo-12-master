<?php
include 'connection.php';
session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>HouseFindr</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <br>
        <center><i class="fa fa-user-plus" style="font-size:120px;color:blue"></i></center>
        <br>
        <style>
            body {
                background-color: #cdebf9;
            }
        </style>

        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-sm-4"> </div>
                <div class="col-md-4">

                    <h1><center>Register as:<br>Tenant or Landlord</center></h1>
                    <br>
                    <div class="col-sm-12">

                        <ul class="nav nav-pills">
                            <li class="active" style="width:50%">
                              <a class="btn btn-lg btn-default" data-toggle="tab" id="tenant-button">Tenant</a>
                            </li>
                            <li style="width:49%">
                              <a class=" btn btn-lg btn-default" data-toggle="tab" id="landlord-button">Landlord</a>
                            </li>
                        </ul>

                            <div id="tenant-form">
                                <center>
                                    <form method="post" action="register-action.php">

                                        <?php
                                            if (!isset($_SESSION['username'])) { ?>
                                                                  <?php
                                          if (isset($_GET['register_action'])) {
                                              if ($_GET['register_action'] == "success") { ?> Successfully Registered!
                                                <?php
                     }
                    }
                    ?>
                                                    <input type="text" name="email" placeholder="Email" required /><br>
                                                    <input type="text" name="username" placeholder="Username" required /><br>
                                                    <input type="password" name="password" placeholder="Password" required /><br>

                                                    <input type="submit" name="submit" value="Register" />
                                    </form>
                            </div>
                            <style>
                                input {
                                    text-align: center;
                                }
                            </style>

                            <!-- <br><br>Already a Tenant? Click <a href="index.php">here</a> to login. -->
                            <!-- <br><br>Already a Landlord? Click <a href="landlord/index.php">here</a> to login. -->

                            <?php } else { ?> You already logged in. Click <a href="logout.php">here</a> to logout.
                            <?php
               }
              ?>
                        </div>

                        <div class="tab-content">
                            <div id="landlord" class="tab-pane fade">
                            </div>


                            <div id="landlord-form">
                                <center>
                                    <form method="post" action="landlord/landlord-register-action.php">

                                        <?php
                    if (!isset($_SESSION['username'])) { ?>
                                            <?php
                    if (isset($_GET['landlord_register_action'])) {
                      if ($_GET['landlord_register_action'] == "success") { ?>
                                                Successfully Registered!
                                                <?php
                   }
                  }
                  ?>
                                                    <input type="text" name="email" placeholder="L-Email" required /><br>
                                                    <input type="text" name="username" placeholder="L-Username" required /><br>
                                                    <input type="password" name="password" placeholder="L-Password" required /><br>

                                                    <input type="submit" name="submit" value="Register" />
                                    </form>
                            </div>
                            <style>
                                input {
                                    text-align: center;
                                }

                                a {
                                    font-size: 20;
                                }
                            </style>

                            <center><br><br>Already a member? Click <a href="index.php">here</a> to login.
                                <?php } else { ?> You already logged in. Click <a href="logout.php">here</a> to logout.
                                <?php
             }
            ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>

        <script>
            $('#tenant-button').click(function() {
                $("#tenant-form").show();
                $("#landlord-form").hide();
            })

            $('#landlord-button').click(function() {
                $("#landlord-form").show();
                $("#tenant-form").hide();
            })
        </script>

    </body>
    </html>
