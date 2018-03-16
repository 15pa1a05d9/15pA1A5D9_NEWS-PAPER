<html>
	<?php
		session_start();
		include "connect.php";
		if(isset($_POST['sub'])){
			$id=$_POST['id'];
			$pass=$_POST['pass'];
			$q="SELECT * FROM `logins` where `id`='$id';";
			$result=mysqli_query($conn,$q) or die("cant connect");
			if(mysqli_num_rows($result)>0){
				$re=mysqli_fetch_array($result);
				if($re['pass']!=$pass)
					echo "INVALID PASSWORD";
				else {
					$_SESSION['id']=$id;
					echo $_SESSION['id'];
					header("location:main.php");
				}
			}
			else{
				echo "INVALID id";
			} 
		}
	?>
	<form method="post" action="">
		ID:<input type="text" name="id"></br></br>
		PASSWORD:<input type="password" name="pass"></br></br>
		<input type="submit" name="sub"> 
	</form>
</html>

