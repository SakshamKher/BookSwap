<?php 
	include 'dbConnection.php';
	$sql="SELECT * FROM announcement";
	$result=mysqli_query($con,$sql) or die("Error");
	while($rws= mysqli_fetch_array($result)){
		echo "<h5>At ".$rws[2]." from administrator</h5>";
		echo "<p>".$rws[3]."</p>";
	}
?>