<?php
	//This is only called from ajax.
	//Connect the database and print all current announcements
	include 'dbConnection.php';
	$sql="SELECT * FROM announcement";
	$result=mysqli_query($con,$sql) or die("Error");
	print("<table><tr><td>Time</td><td>Content</td><td></td></tr>");
	while($rws= mysqli_fetch_array($result)){
		echo "<tr><td>".$rws[2]."</td>";
		echo "<td>".$rws[3]."</td>";
		print ("<td><a style='color:OldLace;background-color:Maroon;' href='admin_deleteAnnouncement.php?time=".$rws[2]."'>Delete</a></td></tr>");
	}
	print("</table>");
?>