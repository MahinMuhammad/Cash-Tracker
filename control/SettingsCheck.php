<?php  

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}

	require_once "../model/userModel.php";

	$name = $_POST['Realname'];
	$userName = $_POST['name'];

	if($name == null || $userName == null)
	{
		echo '<h1>Name or User Name can not be empty!!!</h1>';
		echo'<br><a href="../view/Settings.php"> Go Back </a>';
	} 
	else
	{
		if(changeInfo($_COOKIE['status'], $name, $userName))
		{
			header('location: ../view/Settings.php');
		}
		{
			echo '<h1>DATABASE ERROR!</h1>';
			echo'<br><a href="../view/Settings.php"> Go Back </a>';
		}
	}

?>