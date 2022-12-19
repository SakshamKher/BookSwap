<?php
	$dbusername="root";
	$dbpassword="ymca1234";
	$db="bookswapdb";
	if(!$con = mysqli_connect('localhost',$dbusername,$dbpassword,$db))
	{
		die("Failed to connect to database");
	}
?>