<?php
	if(isset($_POST["btnSubmit"])){
		$errors = array();

		$extension = array("jpeg","jpg","png","gif");

		$bytes = 1024;
		$allowedKB = 100;
		$totalBytes = $allowedKB * $bytes;

		if(isset($_FILES["files"])==false)
		{
			echo "<b>Please select the files to upload!</b>";
			return;
		}

		$conn = mysqli_connect("localhost","root","","cp");

		$landlord = $_POST["landlord_id"];

	 echo $landlord;

		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{

			$uploadThisFile = true;

			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];

			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}

			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 100KB. Name:- ".$file_name);
				$uploadThisFile = false;
			}

			if(file_exists("UploadedHouseImages/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "File already exists. Name:- ". $file_name);
				$uploadThisFile = false;
			}

			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"UploadedHouseImages/".$newFileName);

				$query = "INSERT INTO houseimages(landlord_id, FilePath, FileName) VALUES('$landlord', 'UploadedHouseImages','".$newFileName."')";

				mysqli_query($conn, $query);
			}
		}

		mysqli_close($conn);

		$count = count($errors);

		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}
	}
?>
