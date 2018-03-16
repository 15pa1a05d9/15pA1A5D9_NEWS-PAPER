<?php
	session_start();
	include "connect.php";
	if(isset($_POST["upload"]))
	{
		$image=$_FILES['image']['name'];
        //$target="images/".basename($image);
        $text=$_POST["text"];
		$id=$_SESSION['id'];
        $sql="INSERT INTO `new` (`id`,`img`,`com`) VALUES('$id','$image','$text');";
        mysqli_query($conn,$sql) or die("NOT conneted");
        header("location:main.php");
        /*if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
            echo "uploaded sucessfully";
		else
  			echo "Failed to upload image"."</br>";*/
	}
?>
<html>
	<form action="" method="post" enctype="multipart/form-data">
		IMAGE:<input type="file" name="image"></br></br>
		<textarea name="text"></textarea></br></br>
		<button type="submit" name="upload">POST</button>
	</form>
</html>
