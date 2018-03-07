<?php
	$firstname=$_POST['firstName'];
	$lastname=$_POST['lastName'];
	$email=$_POST['emailId'];
	$mobile=$_POST['mobileno'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$conn = mysqli_connect('localhost','root','password','connectme');
	$querys = "INSERT INTO `peopleinfo`(`FirstName`, `LastName`, `Emailid`, `MobileNo.`, `Username`, `Password`, `DOB`,`Profilepic`) VALUES ('$firstname','$lastname','$email','$mobile','$username','$password','$dob','')";
	if($querys) echo "Yes ";
	$run=mysqli_query($conn,$querys);
	if($run==TRUE)
	{
		header("location:login.php");
		exit();
	}
	else
	{
		echo "Error!! In signing In SignUp Again!";
	}
?>