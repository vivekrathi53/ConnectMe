<?php
	$con = mysqli_connect('localhost','root','password','connectme');
	$query="SELECT * FROM `peopleinfo`";
	$run=mysqli_query($con,$query);
	if($run)
	{
		while($con)
		{
			$data = mysqli_fetch_assoc($run);
			$data2=$_POST['username'];
			if($data['Username']=="") 
			{
					echo "Wrong Username Or Password";
					?><a href="login.php"><br>Click Here To login Again</a><?php 
					break;
			}
			if($data2==$data['Username'])
			{
				$data3=$_POST['password'];
				if($data['Password']==$data3)
				{
					session_start();
					$_SESSION["username"]=$data['Username'];
					header("location:home.php");
				}
				echo "Wrong Username Or Password";
				?><a href="login.php"><br>Click Here To login Again</a><?php 
				break;
			}
		}
	}
?>