<?php  

	if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

    if(!isset($_COOKIE['account']))
    {
        header('location: home.php');
    }

    require_once "../model/accountModel.php";

    $password = $_POST['password'];

    if($password == null)
	{
		echo '<h1>Password Empty!!!</h1>';
		echo'<br><a href="../view/deleteTransAccount.php"> Go Back </a>';
	}
	else
	{
		if(deleteAccount($_COOKIE['status'], $_COOKIE['account'], $password))
		{
			setcookie('account', 'delete', time()-100, '/');
			header('location: ../view/home.php');
		}
		else
		{
			echo '<h1>Invalid Password!!!</h1>';
			echo'<br><a href="../view/deleteTransAccount.php"> Go Back </a>';
		}
	}

?>