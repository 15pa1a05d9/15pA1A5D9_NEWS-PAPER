<?php
	session_start();
	include "connect.php";
?>
<html>
		<div id="head">
			<span id="left">
				<a href="main.php">HOME</a>
				<a href="logout.php">LOGOUT</a>
				<a href="upload.php">UPLOAD</a>
			</span>
		</div>
</html>
<?php
	$q="SELECT * FROM `new`;";
	$result=mysqli_query($conn,$q);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result))
		{
				$com=$row['com'];
			    $pop="result.php?&mid="+$row['ids'];
			    echo "<a href='$pop'><table>";
			    echo $com."</table>";
		}
	}
?>


