<?php  

	if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

	$accountId = $_POST['AccountId'];

	setcookie('account', $accountId, time()+3600, '/');

	header('location: ../view/account.php');

?>