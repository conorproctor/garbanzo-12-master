c<?php

include("connection.php"); //include connection.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HouseFindr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="index.css">

    <body class="w3-white">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:10;width:300px;font-weight:bold;" id="mySidebar"><br>



        <!-- Avatar image in top left corner -->
        <center><a href="login.php"><img src="img\logo1.jpg" style="width:50%"></a></center>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>

        <div class="w3-bar-block">
          <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-home"></i>  Back to Dash</a>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-user"></i>  Your Profile</a>
            <a href="garbanzo-master/liked.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-check-circle-o"></i>   Houses</a>
            <a href="garbanzo-master/disliked.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-times-circle-o"></i>  Passed Houses</a>

        </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
        <span>HouseFindr</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class=" w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <body>
            <section>
                <div class="cardcontainer list">
                    <ul class="cardlist">
                        <li class="card current">
                            <div class="dvCard">
                                <div class="dvImage">
                                    <img class="image" src="" />
                                    <div class="likeTag tag">Like</div>
                                    <div class="nopeTag tag">No</div>
                                </div>
                                <span class="name"></span>
                            </div>
                        </li>
                    </ul>
                    <div class="dvButtons">
                        <div id="btnNope" class="nope button"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div id="btnLike" class="like button"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </section>
            <script src="js/data.js"></script>
            <script src="js/index.js"></script>
<center><body>

<div class="container">
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">See house details</button>

 <!-- The Modal -->
 <div class="modal fade" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">

       <!-- Modal Header -->
       <div class="modal-header">
         <center><h4 class="modal-title">House details</h4></center>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
         PHP data
         <br><br><br><br><br><br><br><br><br><br><br><br><br>
         print landlord House details corresponding to this house ID

       </div>

       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>

     </div>
   </div>
 </div>

</div>

</body></center>

			<script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }
        </script>
        </body>

</html>
