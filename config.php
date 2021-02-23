<?php 
 $con = mysqli_connect("localhost", "root", "","tsf1");
 if($con){
 	echo "<script>console.log('connected');</script>";
 }else{
 	echo "<script>console.log('not connected');</script>".$con->connect_error;
 }
?>