<?php
	session_start();
	$location="C:\wamp64\www\My Project\profileimages";
	$currentuser=$_SESSION['username'];
	$tempimage=$_FILES['profilepic']['tmp_name'];
    $imagename=$_FILES['profilepic']['name'];
	$k=move_uploaded_file($tempimage,"$imagename");
	if(!$k) echo "problem";
	$con=mysqli_connect('localhost','root','password','connectme');
	$sql="UPDATE peopleinfo SET Profilepic='$imagename' WHERE Username='$currentuser'";
	$run=mysqli_query($con,$sql);
	if($run)
		if($k)
			header("location:home.php");
?>
