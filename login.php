<!DOCTYPE html>
<html>
<head>
	<title>Login to ConnectMe</title>
</head>
<style type="text/css">
	body{
		background-image: url(logo.gif);
		background-size: 100%;
	}
	.block{
		position: absolute;
		left: 450px;
		top:  50px;
		background-image: url(loginlogo.jpg);
		background-size: 100% 100%;
		padding: 50px;

	}
	.loginbutton{
		height: 40px;
		width: 250px;
		background-color: transparent; 
	}
	.loginbutton:hover {
		background-color: lightblue;
		transition-duration: 0.3s;
	}
</style>
<body >
	<div class="block">
		<form action="authenticate.php" method="post" enctype="multipart/form-data">
			<input type="text" name="username" placeholder="Username" style="height: 40px;width: 250px;border-width: 3px;border-color: white;" /><br>
			<input type="password" name="password" placeholder="Password" style="height: 40px;width: 250px;border-width: 3px;border-color: white;"/><br>
			<button type="submit"  class="loginbutton">LogIn to ConnectMe</button>
		</form>
		<a href="Signup.php" style="color: white;">Click Here To Signup</a>
	</div>
</body>
</html>