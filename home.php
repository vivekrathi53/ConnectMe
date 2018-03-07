<?php
	session_start();
	if(!($_SESSION['username']))
	{
		header("location:login.php");
	}
	$currentuser=$_SESSION['username'];
	echo $currentuser;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style type="text/css">
	body{
		background-image: url(backgroundimg.jpg);
	}
	.profilepic{
		float: left;
		border-width: 2px;
		border-color: grey;
		background-color: white;
		height: 400px;
		width: 400px;
		text-align: center;
		vertical-align: middle;
		line-height: 90px;
		background-size: 100% 100%;
	}
</style>
<body>
	<?php
	$con=mysqli_connect('localhost','root','password','connectme');
	$data="SELECT * FROM peopleinfo WHERE Username='$currentuser'"; 
	$run=mysqli_query($con,$data);
	$fetch=mysqli_fetch_array($run);
	if($fetch['Profilepic']=="") {?><div class="profilepic">Upload Your Profile Picture.<br>Choose File Below.<form action="insertprofilepic.php" method="post" enctype="multipart/form-data"><input type="file" name="profilepic"><button type="submit" style="height: 20px;width: 60px">Upload</button></form>
	</div><?php }
	else
	{
		$run=mysqli_query($con,$data);
		$imagename=mysqli_fetch_array($run);
		echo $imagename['Profilepic'];
		?><div class="profilepic" style="background-image:url(images123/<?php echo "A".$currentuser; ?>);"></div> <?php 
	} 
	?>
		<form action="logout.php"> <button type="submit">Logout</button> </form>
		<form action="changeprofilepic.php"><button>Change Profile Picture</button></form>
</body>
</html>

















