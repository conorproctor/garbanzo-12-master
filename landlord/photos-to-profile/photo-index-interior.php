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

	<?php
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
		 while ($user_data = $landlord->fetch_assoc()) { ?>
		<?php }
	 }
	 ?>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body{
			background-color: #cdebf9;
		}
</style>

	</header>
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
       <a href="javascript:history.back()" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-gray"><i class="fa fa-user"></i> Back to profile details</a>
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
    <br><br>
		<div class="container">
			<div class="page-header">
				<center><h1>House interior images <br><small>Upload the pictures of the interior of your house for tenants to view</small> </h1></center>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload-interior.php">
						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
							<?php
							if (isset($_SESSION['username'])) {
								$username = $_SESSION['username'];
								$landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
								 while ($user_data = $landlord->fetch_assoc()) { ?>

									 <input type="hidden" id="landlordInput" name="landlord_id">

								<?php }
							 }
							 ?>

							<p class="help-block"><span class="label label-info">Note</span>  Please only select the following file types: (.jpg, .jpeg, .png, .gif) and to the size of 100KB only.</p>
						</div>
						<center><button type="submit" class="btn btn-primary" name="btnSubmit" >Upload house images</button></center>
						<!-- <a href="view.php" class="btn btn-info">Show Uploaded Image</a> -->
					</form>
					<br/>
					<label for="Progressbar">Progress:</label>
					<div class="progress" id="Progressbar">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
					<div id="status"></div>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jQuery.Form.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){

				var divProgressBar=$("#divProgressBar");
				var status=$("#status");

				$("#uploadForm").ajaxForm({

					dataType:"json",

					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},

					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},

					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>
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
