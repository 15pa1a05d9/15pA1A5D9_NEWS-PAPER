<?php
		session_start();
		include "connect.php";
		$id=$GET['mid'];
?>
<html>
		<?php
			$q="SELECT * FROM `news` where `ids`=$id;";
			$result=mysqli_query($conn,$q);
			$p=mysqli_fetch_array($result);
			$image=$p['img'];
			$com=$p['com'];
			$sid=$_SESSION['id'];
			echo "IMAGE".$image."</br";
			echo "NEWS".$com."</br";
			echo "BY:".$sid."</br>";
		?>
</html>
