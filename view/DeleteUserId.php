<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

?>

<html>
<head>
    <title>Delete User ID</title>
</head>
    <style>
        body 
        {
          background-image: url('../asset/backGr.jpg');
          background-size: cover;
        }
    </style>
    <body>
        <form method="post" action="../control/DeleteUserIdCheck.php" enctype=""> 
            <fieldset align=center>
                <legend>DELETE ACCOUNT</legend>
                <table align="center">
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Delete">
                            <a href="Settings.php"> ABORT </a> 
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>