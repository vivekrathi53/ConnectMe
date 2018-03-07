<?php
	session_start();
	$currentuser=$_SESSION['username'];
	$tempimage=basename($_FILES['profilepic']['tmp_name']);
	$k=move_uploaded_file($tempimage, "images123/".$currentuser.".jpg");
	$con=mysqli_connect('localhost','root','password','connectme');
	$sql="UPDATE peopleinfo SET Profilepic='$currentuser.jpg' WHERE Username='$currentuser'";
	$run=mysqli_query($con,$sql);
	if($run)
		if($k)
			header("location:home.php");
?>