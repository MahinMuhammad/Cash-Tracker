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
    <title>Account Settings</title>
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
            <legend>ACCOUNT SETTINGS</legend>
            <form method="post" action="../control/AccountSettingsCheck.php" enctype="">
                <table align="center">
                    <tr>
                        <td>Account Name</td>
                        <td><input type="text" name="AccountName" value="<?php echo getAccountName($_COOKIE['account']); ?>"></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name="AccountDescription" cols="18" rows="3"><?php echo getAccountDescription($_COOKIE['account']); ?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Save">|<a href='account.php'> GO BACK </a></td>
                    </tr>
                </table>
            </form>
            <hr>
            <a href='deleteTransAccount.php'> DELETE ACC </a>
        </fieldset>
    </body>
</html>