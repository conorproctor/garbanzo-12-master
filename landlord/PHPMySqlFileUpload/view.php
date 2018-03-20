<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HouseFindr</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body{
			background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
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
	<a href="photo-index.php" class="btn btn-info">Go Back</a>

	<body>
		<div class="container">
			<div class="page-header">
				<h1>Upload photos to your profile</h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Uploaded Photos:</h3>
					<br/>
					<?php
						$conn = mysqli_connect("localhost","root","","cp");

						$query = "SELECT * FROM userfiles";

						$result = mysqli_query($conn, $query);

						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["FilePath"]."/".$row["FileName"];
					?>
								<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a>
					<?php
							}
						}
						else
						{
					?>
						<p>There are no images uploaded to display.</p>
					<?php
						}
					?>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
