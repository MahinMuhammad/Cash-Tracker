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
?>

<html>
<head>
	<title>Account</title>
</head>
	<style>
        body 
        {
          background-image: url('../asset/backGr.jpg');
          background-size: cover;
        }
    </style>
	<body>
		<fieldset align=center>
			<legend><?php echo getAccountName($_COOKIE['account']); ?></legend>

			<table align="center" width="100%">
                <tr align="center">
                    <td width="300"><a href='account.php'> NEW TRANSACTION </a></td>
                    <td><a href='account.php'> ABOUT US </a></td>
                    <td><a href='accountSetting.php'> SETTINGS </a></td>
                    <td><a href='home.php'> GO BACK </a></td>
                </tr>
            </table>

            <h2>Current balance <?php echo getBalance($_COOKIE['account']);  ?> BDT</h2>

			<table border=1 align="center">
				<tr align="center">
	                <td width=150>ID</td>
	                <td width=100>AMOUNT</td>
	                <td width=100>DATE</td>
	                <td width=600>DESCRIPTION</td>
	                <td width=200>TRANSACTION TYPE</td>
	                <td width=100>ACTION</td>
	            </tr>
	            <?php $list = showAllTransactions($_COOKIE['account']);
	            	for ($i=0; $i < count($list); $i++) 
	            	{ 
	            		echo "<tr align=center>
			                    <td>{$list[$i]['ID']}</td>
			                    <td>{$list[$i]['Amount']}</td>
			                    <td>{$list[$i]['Trans_Date']}</td>
			                    <td>{$list[$i]['Description']}</td>
			                    <td>{$list[$i]['TransType']}</td>
			                    <td>EDIT</td>
			            	</tr>";
	            	}
	            ?>
			</table>
		</fieldset>
	</body>
</html>









