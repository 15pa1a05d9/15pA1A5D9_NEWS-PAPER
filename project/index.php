<?php
	session_start();
	include "connect.php";
?>
<html>
	<body>
		<div id="head">
			<span id="left">
				<a href="index.php">HOME</a>
				<a href="login.php">LOGIN</a>
			</span>
		</div>
		<div id="one"></div>
	</body>
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




