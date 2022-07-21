<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user = explode('|', $_COOKIE['status']); 
?>

<html>
<head>
	<title>Change Password</title>
</head>
	<style>
		body 
		{
		  background-image: url('../asset/backGr.jpg');
		  background-size: cover;
		}
	</style>
	<body>
		<form method="post" action="../control/ChangePasswordCheck.php" enctype="">
			<fieldset align=center>
				<legend>CHANGE PASSWORD</legend>
				<table align="center">
					<tr>
						<td>Current Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="passwordNew" value=""><br></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="passwordConf" value=""><br></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Confirm">
							<a href="Settings.php"> Go Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>