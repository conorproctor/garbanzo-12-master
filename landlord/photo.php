<!doctype>
 <html>

 <head>
 <meta charset="utf-8">
 <title></title>
 <link rel="stylesheet" href="css/stylesheet.css">
 </head>

 <body>
  <form action="photo.php" method="Post" enctype="multipart/form-data">
   <input type="file" name="image"><input type="submit" name="submit" value="Upload">
  </form>
 <?php
 $imageName='';
 if(isset($_POST['submit']))
 {
 mysql_connect('localhost','root','');
 mysql_select_db('cp');
 $imageName= mysql_real_escape_string($_FILES['image']['name']);
 $imageData=mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
 $imageType=mysql_real_escape_string($_FILES['image']['type']);
 if(substr($imageType,0,5)=='image')
 {
  if(mysql_query("INSERT INTO `images` values('','$imageName','$imageData')"))
  {

   echo'file uploaded<br>';
  }
  else{
  echo mysql_error();
  }
 }else
 {
  echo 'its not an image<br>';
 }
}

?>
<img src="showImage.php?name=<?php echo $imageName?>">

 </body>

 </html>

showImage.php
<?php
mysql_connect('localhost','root','');
mysql_select_db('cp');
if(isset($_GET['name']))
{
 $name=mysql_real_escape_string($_GET['name']);
 $query_run=mysql_query("SELECT * FROM `images` WHERE `name`='$name'");
 while($row=mysql_fetch_assoc($query_run)){
  $imageData = $row['image'];
 }
 header('content-type:image/jpeg');
 echo $imageData;

}
?>﻿
