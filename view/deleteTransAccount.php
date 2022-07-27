<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

    if(!isset($_COOKIE['account']))
    {
        header('location: home.php');
    }
?>

<html>
    <head>
        <title>Delete Transaction Account</title>
    </head>
    <style>
        body 
        {
          background-image: url('../asset/backGr.jpg');
          background-size: cover;
        }
    </style>
    <body>
        <form method="post" action="../control/DeleteTransAccCheck.php" enctype="">
            <fieldset align=center>
                <legend>Delete Transaction Account</legend>
                <table align="center">
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Delete">
                            <a href="accountSetting.php"> ABORT </a> 
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>









