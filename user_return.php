i<?php 
	session_start();
	include 'dbConnection.php';
		
	if(!isset($_SESSION['user_login'])||$_SESSION["user_login"]=='0') 
        header('location:index.php');
    if(!isset($_GET["recordID"]))
        header('location:index.php');
	$record_id=$_GET["recordID"];
	$date=date("Y-m-d h:i:sa");
	$sql="UPDATE record SET endDate='$date' WHERE record_id=$record_id";
	mysqli_query($con,$sql) or die("Error");
	$sql="SELECT owner_id,ISBN FROM record WHERE record_id=$record_id";
	$result=mysqli_query($con,$sql) or die("Error");
	$rws=mysqli_fetch_array($result);
	$sql="UPDATE ownership SET loanDate='' WHERE owner_id=$rws[0] AND ISBN=$rws[1]";
	mysqli_query($con,$sql) or die("Error");
	header('location:user_home.php');
?>