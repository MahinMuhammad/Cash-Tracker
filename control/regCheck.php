<?php 
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	$name = $_POST['name'];

	require_once "../model/userModel.php";

	if($userName == null || $password == null || $passwordConf == null || $name == null){
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="../view/reg.html"> Go Back </a>';
	}else{

		if($password == $passwordConf)
		{
			$user['name'] = $name;
			$user['username'] = $userName;
			$user['pass'] = $password;
			if(regis($user))
			{
				header('location: ../view/login.html');
			}
			else
			{
				echo '<h1>Registration Failed failed!!!</h1>';
				echo'<br><a href="../view/reg.html"> Go Back </a>';
			}

			
		}
		else
		{
			echo '<h1>Password confirmation failed!!!</h1>';
			echo'<br><a href="../view/reg.html"> Go Back </a>';
		}

	}
?>