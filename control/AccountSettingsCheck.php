<?php  

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}

	if(!isset($_COOKIE['account']))
    {
        header('location: home.php');
    }

    require_once "../model/accountModel.php";

    $accName = $_POST['AccountName'];
    $accDescription = $_POST['AccountDescription'];

    if($accName == null || $accDescription == null)
	{
		echo '<h1>Name or User Name can not be empty!!!</h1>';
		echo'<br><a href="../view/Settings.php"> Go Back </a>';
	} 
	else
	{
		if(changeAccountInfo($_COOKIE['account'], $accName, $accDescription))
		{
			header('location: ../view/accountSetting.php');
		}
		{
			echo '<h1>DATABASE ERROR!</h1>';
			echo'<br><a href="../view/Settings.php"> Go Back </a>';
		}
	}
?>