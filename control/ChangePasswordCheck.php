<?php  

	if(!isset($_COOKIE['status']))
	{
	    header('location: ../view/login.html');
	}

	require_once "../model/userModel.php";

	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordConf = $_POST['passwordConf'];

	if($password == null || $passwordNew == null || $passwordConf == null)
	{
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="../view/ChangePassword.php"> Go Back </a>';
	}
	else
	{
		if($passwordNew == $passwordConf)
		{
			if(changePass($_COOKIE['status'], $password, $passwordNew))
			{
				header('location: ../view/Settings.php');
			}
			else
			{
				echo '<h1>Wrong Current Password!!!</h1>';
				echo'<br><a href="../view/ChangePassword.php"> Go Back </a>';
			}
		}
		else
		{
			echo '<h1>Type New Password Twice Correctly</h1>';
			echo'<br><a href="../view/ChangePassword.php"> Go Back </a>';
		}
	}

?>