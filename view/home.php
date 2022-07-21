<?php  

    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }

?>
<html>
<head>
    <title>HOME</title>
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
            <legend>HOME</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td><a href='home.php'> CALCULATOR </a></td>
                    <td><a href='Settings.php'> SETTINGS </a></td>
                    <td><a href='home.php'> ABOUT US </a></td>
                    <td><a href='../control/logout.php'> LOGOUT </a></td>
                </tr>
            </table>
            <h1>Wellcome <?php require_once "../model/userModel.php"; echo getRealName($_COOKIE['status']);?> </h1>
            <h2>Account List</h2>
            <table border="1" align="center">
                <?php
                    $list = getAccountList($_COOKIE['status']);
                    for ($i=0; $i < count($list); $i++) 
                    { 
                        $flag = true;
                        echo    "<tr align=center>
                                    <td width=150>".$list[$i]['AccountName']."</td>
                                </tr>";
                    }
                    echo    "<tr align=center>
                                <td width=150><a href='home.php'> ADD ACCOUNT </a></td>
                            </tr>";
                ?>
            </table>
        </fieldset>
    </body>
</html>



