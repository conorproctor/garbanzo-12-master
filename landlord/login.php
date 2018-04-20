<?php     include 'connection.php';
session_start();?>

 <!DOCTYPE html>
 <html>
 <title>HomeFindr</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="css/style.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
     body,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
     h1{color:blue}
     body {background-color: #cdebf9;}
     {font-size: 16px;}
     .w3-half img {margin-bottom: -6px;margin-top: 16px;opacity: 0.8;cursor: pointer}
     .w3-half img:hover {opacity: 1}

     @media only screen and (max-width: 480px) {
 .responsive .container { width: 300px; }}
@media only screen and (max-width: 480px) {
 .av-special-heading h1 { font-size: 24px !important; }}
@media only screen and (max-width: 480px) {
.entry-content-wrapper .post-title { font-size: 24px !important; }}
@media only screen and (max-width: 480px) {
  .template-page .entry-content-wrapper h1 { font-size: 24px; }}

  body{
  }

  </style>

 <div style="float:right">
   <form align="top-right" name="form1" method="post">
     <label class="logoutLblPos">
</div>

 <body>
   <?php
   if (isset($_SESSION['username'])) {
     $username = $_SESSION['username'];
     $users = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
      while ($user_data = $users->fetch_assoc()) { ?>

     <!-- Sidebar/menu -->
     <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>



         <!-- Avatar image in top left corner -->
         <br><center><a href="login.php"><img src="img\logo1.jpg" style="width:50%"></a></center>
         <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>

         <div class="w3-bar-block">
             <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-home"></i>  Home</a>
             <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-user"></i>  Profile</a>
             <a href="landlord-matches.php?user=<?php echo $user_data['user_id'] ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-handshake-o"></i>  Your matches</a>
             <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="glyphicon glyphicon-log-out"></span> Log out </a>

         </div>
     </nav>

     <!-- Top menu on small screens -->
     <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
         <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
         <span>HouseFindr</span>
     </header>

     <!-- Overlay effect when opening sidebar on small screens -->
     <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

     <!-- !PAGE CONTENT! -->
     <div class="w3-main" style="margin-left:340px;margin-right:40px">

         <!-- Header -->
      <div class="w3-container" style="margin-top:80px" id="gallery">
        <center><h3 class=" w3-text-blue"><b>Welcome to HouseFindr </b></h3>
        <h5><b>Students can swipe to find their desired student accommodation and potenially link up with you</b></h5></center>
        <br><center><h2 class=" w3-text-blue">Gallery</h2></center>
        <center><h5><b>Check out some of the recent images uploaded by some of our other landlords</b></h5></center>
         </div>

         <!-- Photo grid (modal) -->
         <div class="w3-row-padding">
             <div class="w3-half">
                 <img src="img\bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Luxurious, spacious rooms">
                 <img src="img\dining.jpg" style="width:100%" onclick="onClick(this)" alt="Nice, tidy dining area to enjoy your meals">
                 <img src="img\seating.jpg" style="width:100%" onclick="onClick(this)" alt="Kick back and enjoy some Tv with your housemates">
             </div>

             <div class="w3-half">
                 <img src="img\bathroom.jpg" style="width:100%" onclick="onClick(this)" alt="Nice, tidy dining area to enjoy your meals">
                 <img src="img\house2.jpg" style="width:100%" onclick="onClick(this)" alt="Kick back and enjoy some Tv with your housemates">
             </div>
         </div>

         <!-- Modal for full size images on click-->
         <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
             <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
             <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                 <img id="img01" class="w3-image">
                 <p id="caption"></p>
             </div>
         </div>


         <!-- what makes our app unique -->
         <div class="w3-container" id="choice" style="margin-top:75px">
             <h2 class=" w3-text-blue"><center>What makes our app unique?</center></h2>
             <p>Are you a landlord who hates the hassle of sorting out accommodation for the academic year? </p>
             <p>Yes? Great! - Then look no further, this app has it all. </p>
             <p>For the students of colleges around Ireland, accommodation seems to be scarce. Some students are living in hostels, on couches or worse again, commuting for 2,3 or 4+ hours. This is not practical in the slightest & is very off-putting for first year students - first year students are effected the most and this app helps alleviate this problem for these students. </p>
             <p>For all you landlords in the cities with colleges, it's a nightmare for yiu too. Landlords have their preferences for who stays in their properties, some more picky than others. This app has landlords who are just looking for students to stay in their houses - therefore reducing the amount of homeless students substancially. </p>
         </div>

         <!-- Swiping -->
         <div class="w3-container" id="swiping" style="margin-top:75px">
               <h2 class=" w3-text-blue"><center>The Swiping!</center></h2>
               <p>When you've created your house profile & added the images of your house - your house will become swipable.</p><br>
               <p>If the Student swipes right (likes) your house, they could potentially match with you if they meet the criteria of your house! It's simple as that! </p>
               <div class="w3-row-padding">
                   <div class="w3-half">
                     <img src="img\swipe-no.jpg" style="width:100%" onclick="onClick(this)" alt="Swipe no if you don't feel this house suits you">
                   </div>
                   <div class="w3-half">
                     <img src="img\swipe-yes.jpg" style="width:100%" onclick="onClick(this)" alt="Swipe yes to try match with your ideal landlord">
                   </div>
               </div>
           </div>

             <!-- End page content -->
         <div style="float:right">
           <form align="right" name="form1" method="post">
             <label class="logoutLblPos">
               <a href="logout.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out </a>

       <!--  <p><a href="index.php">Home</a></p> -->


   </label>
 </form>
 </div>
<?php }
}
?>


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
