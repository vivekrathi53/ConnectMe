<?php
	session_start();
	$currentuser=$_SESSION['username'];
	$con=mysqli_connect('localhost','root','password','connectme');
	$sql="UPDATE peopleinfo SET Profilepic='' WHERE Username='$currentuser'";
	$run=mysqli_query($con,$sql);
	if($run)
	header("location:home.php");
?>