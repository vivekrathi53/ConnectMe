<?php
	$firstname=$_POST['FirstName'];
	$lastname=$_POST['LastName'];
	$email=$_POST['EmailId'];
	$mobile=$_POST['PhoneNo.'];
	$username=$_POST['Username'];
	$password=$_POST['Password'];
	$dob=$_POST['DOB'];
	$con = mysqli_connect('localhost','root','engines','connectme');
	if($con)echo "Yes";
	else echo "No";
	$query = "INSERT INTO `peopleinfo`(`First Name`, `Last Name`, `Email-Id`, `Mobile No.`, `Username`, `Password`, `DOB`) VALUES ('$firstname','$lastname','$email','$mobile','$username','$password','$dob')";
	$run = mysqli_query($con,$query);
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