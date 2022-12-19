<?php
    $ISBN=$_GET["ISBN"];

    require "dbConnection.php";
    $sql="SELECT bookname FROM ownership WHERE ISBN = '".$ISBN."'";
    $result=mysqli_query($con,$sql) or die(0);
    $rws=mysqli_fetch_array($result);
    print($rws[0]);
?>