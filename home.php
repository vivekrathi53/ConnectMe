<?php
	session_start();
	if(!($_SESSION['username']))
	{
		header("location:login.php");
	}
	$currentuser=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: url(backgroundimg.jpg);
	}
	#profilepic{
		float: left;
		border-width: 0px;
		border-color: grey;
		background-color: white;
		text-align: center;
		vertical-align: middle;
		line-height: 90px;
		background-size: 100% 100%;
	}
	#content{
		color: pink;
	}
</style>
<body>
	<h1 style="color: #3fee42;">Welcome To ConnectMe</h1>
	<div class="row" style="height: 300px;">
	<?php
	$con=mysqli_connect('localhost','root','password','connectme');
	$data="SELECT * FROM peopleinfo WHERE Username='$currentuser'"; 
	$run=mysqli_query($con,$data);
	$fetch=mysqli_fetch_array($run);
	if($fetch['Profilepic']=="") {?><div class="col-6" id="profilepic">Upload Your Profile Picture.<br>Choose File Below.<form action="insertprofilepic.php" method="post" enctype="multipart/form-data"><input type="file" name="profilepic"><button type="submit" style="height: 20px;width: 60px">Upload</button></form>
	</div><?php }
	else
	{
		$run=mysqli_query($con,$data);
		$imagename=mysqli_fetch_array($run);
		?><div class="col-5" id="profilepic" style="background-image: url(<?php echo $imagename['Profilepic'] ; ?>) ;"  ></div><?php
	}
	?>   
	<div class="col-5" id="content">
		<h1>Welcome <?php echo $currentuser; ?> </h1>
		<h2  style="color: green;">About Yourself...</h2>
		<h3 style="color: white;">I am very Enthusiastic about my project</h3>
		<input type="text" action="insertabout.php">Write Aboute Yourself 
	</div>
	<div class="col-1" style="float: right;">
		<form action="logout.php"> <button type="submit" >Logout</button> <br> </form>
		<form action="changeprofilepic.php"><button>Change Profile Picture</button></form>
	</div>
	</div>
</body>
</html>

















