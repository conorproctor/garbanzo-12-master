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
		<title>HouseFindr</title>
		<style>
		body{
			background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
		}

	</style>

	<?php
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
		 while ($user_data = $landlord->fetch_assoc()) { ?>

					 <b><?php echo $user_data['user_id'] ?></b>
			<?php echo $user_data['username'] ?><br>
		<?php }
	 }
	 ?>



		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<a href="/garbanzo-12-master/landlord/index.php" class="btn btn-info">Go Back</a>
	</header>
	<body>
		<div class="container">
			<div class="page-header">
				<center><h1>Upload House Images <br><small>Populate your profile with some images of your house</small> </h1></center>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload.php">
						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
							<?php
							if (isset($_SESSION['username'])) {
								$username = $_SESSION['username'];
								$landlord = $mysqli->query("SELECT * FROM landlord WHERE username='$username'");
								 while ($user_data = $landlord->fetch_assoc()) { ?>

									 <input type="hidden" id="landlordInput" name="landlord_id" value="<?php echo $user_data['user_id'] ?>">

								<?php }
							 }
							 ?>

							<p class="help-block"><span class="label label-info">Note</span>  Please only select file types: (.jpg, .jpeg, .png, .gif) to upload with the size of 100KB only.</p>
						</div>
						<button type="submit" class="btn btn-primary" name="btnSubmit" >Upload Images</button>
						<a href="view.php" class="btn btn-info">Show Uploaded Images</a>
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
	</body>
</html>
