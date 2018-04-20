<?php
include '../connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<title>HouseFindr</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body{
			background-color: #cdebf9;
		}

	</style>
		<style>
			.images{
				width:150px;
				height:150px;
				cursor:pointer;
				margin:10px;
			}
			.images:hover{
				-webkit-transform: scale(1.2);
				-moz-transform: scale(1.2);
				-o-transform: scale(1.2);
				transform: scale(1.2);
				transition: all 0.3s;
				-webkit-transition: all 0.3s;

			}
		</style>
	</header>
	<a href="javascript:history.back()" class="btn btn-info">Go Back</a>
<body>

	  <!-- Sidebar/menu -->
	      <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
	      <!-- Avatar image in top left corner -->
	      <br><br><center><a href="login.php"><img src="..\img\logo1.jpg" style="width:50%"></a>
	      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
	      <div class="navbar-header">
	            </div></center>
	      <!-- Collection of nav links and other content for toggling -->
	      <div class="w3-bar-block">
					<a href="..\index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-arrow-left"></i> Back to interface </a></i>
 	       <a href="javascript:history.back()" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-user"></i> Profile Details</a>
 	       <a href="..\login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-home"></i> Back to dashboard </a>
 	       <a href="..\logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><span class="glyphicon glyphicon-log-out"></span> Log out </a>
	      </div>
	    </nav>
	</body>


	 <!-- Top menu on small screens -->
	 <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
	     <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
	     <span>HouseFindr</span>
	 </header>

	 <!-- Overlay effect when opening sidebar on small screens -->
	 <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
	 <div class="w3-main" style="margin-left:340px;margin-right:40px"></div>
		<div class="container">
			<div class="page-header">
				<center><h1>Upload photo to your swipe card</h1></center>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<center><h3>Uploaded Photo:</h3>
					<br/>
					<?php
					if (isset($_SESSION['username'])) {
						$username = $_SESSION['username'];
						$landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
						 while ($user_data = $landlord->fetch_assoc()) {

							 $landlord_id =  $user_data['user_id'] ?>
							 <!-- <?php echo $landlord_id ?> -->
							 <?php
			 					$conn = mysqli_connect("localhost","root","","cp");

			 					$query = "SELECT * FROM houseimages WHERE landlord_id = $landlord_id";


			 					$result = mysqli_query($conn, $query);

			 					if(mysqli_num_rows($result) > 0)
			 					{
			 						while($row = mysqli_fetch_assoc($result))
			 						{
			 							$url = $row["FilePath"]."/".$row["FileName"];
			 				?>
			 							<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a></center>
			 				<?php
			 						}
			 					}
			 					else
			 					{
			 				?>
			 					<p>There is no image uploaded to display.</p>
			 				<?php
			 					}
			 				?>
						<?php }
					 }
					 ?>


				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
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
		</script>
	</body>
</html>
