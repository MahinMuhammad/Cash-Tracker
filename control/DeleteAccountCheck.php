<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

    require_once "../model/userModel.php";

    $password = $_POST['password'];

    if($password == null)
	{
		echo '<h1>Password Empty!!!</h1>';
		echo'<br><a href="../view/DeleteAccount.php"> Go Back </a>';
	}
	else
	{
		if(deleteUser($_COOKIE['status'], $password))
		{
			setcookie('status', 'delete', time()-100, '/');
			header('location: ../view/login.html');
		}
		else
		{
			echo '<h1>Invalid user!!!</h1>';
			echo'<br><a href="../view/DeleteAccount.php"> Go Back </a>';
		}
	}

?>