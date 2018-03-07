<!DOCTYPE html>
<html>
<style type="text/css">
	body{
		background-image: url(logo.gif);
		background-size: 100%;
	}
	.SignupBox{
		text-align: center;
		align-items: center;
	}
	h1{
		font-family: Comic Sans MS;
		color: grey;
		text-align: center;
	}
	.SignupButton{
		position: absolute;
		left: 610px;
		top: 450px;
		height: 40px;
		width: 100px;
		font-family: Comic Sans MS;
		color: green;
	}
	.SignupButton:hover{
		transition-duration: 0.4s; 
		background-color: rgb(129,249,0);

	}
</style>
<head>
	<title>Signup</title>
</head>
<body>
	<h1>Fill details below to signup</h1>
	<form action="newuserinsert.php" method="post" enctype="multipart/form-data">
		<div class="SignupBox">
			<p>
				<input type="text" name="firstName" placeholder="First Name" required="required" style="height: 40px;width: 500px;font-size: 20px;" />
				<input type="text" name="lastName" placeholder="Last Name" required="required" style="height: 40px;width: 500px;font-size: 20px;" />
			</p>
			<p>
				<input type="text" name="emailId" placeholder="Email-Id" required="required" style="height: 40px;width: 700px;font-size: 20px;" />
				<input type="text" name="mobileno" placeholder="Mobile Number" required="required" style="height: 40px;width: 300px;font-size: 20px;" />
			</p>
			<p>
				<input type="text" name="username" placeholder="UserName" required="required" style="height: 40px;width: 500px;font-size: 20px;" />
				<input type="password" name="password" placeholder="Password" required="required" style="height: 40px;width: 250px;font-size: 20px;" />
				<input type="password" name="confirmPassword" placeholder="Confirm Password" required="required" style="height: 40px;width: 250px;font-size: 20px;" />
			</p>
			<p>
				<input type="text" name="dob" placeholder="Date of Birth YYYY-MM-DD" required="required" style="height: 40px;width: 350px;font-size: 20px;" />
			</p>
				<button action="submit" class="SignupButton">ConnectMe</button>
		</div>
	</form>
</body>
</html>