<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

?>

<html>
<?php require_once "../model/userModel.php"; ?>
<head>
    <title>Settings</title>
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
            <legend>SETTINGS</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td><a href='DeleteUserId.php'> DELETE ID </a></td>
                    <td><a href='ChangePassword.php'> CHANGE PASSWORD </a></td>
                    <td><a href='home.php'> GO BACK </a></td>
                </tr>
            </table>
            <br>
            <form method="post" action="../control/SettingsCheck.php" enctype="">
                <table align="center">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="Realname" value="<?php echo getRealName($_COOKIE['status']); ?>"></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="name" value="<?php echo getUserName($_COOKIE['status']); ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Save"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>










