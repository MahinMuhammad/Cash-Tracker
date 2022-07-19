<?php  

	$con = mysqli_connect('localhost', 'root', '', 'CashTracker');

	$display_sql = "select * from Trans";
	$display_result = mysqli_query($con, $display_sql);

	echo '<table border=1 align="center">
            <tr align="center">
                <td width=150>ID</td>
                <td width=100>AMOUNT</td>
                <td width=100>DATE</td>
                <td width=600>DESCRIPTION</td>
                <td width=200>TRANSACTION TYPE</td>
                <td width=100>ACTION</td>
            </tr>';

    while($row = mysqli_fetch_assoc($display_result)){
        echo 	"<tr align=center>
                    <td>{$row['ID']}</td>
                    <td>{$row['Amount']}</td>
                    <td>{$row['Trans_Date']}</td>
                    <td>{$row['Description']}</td>
                    <td>{$row['TransType']}</td>
                    <td>EDIT</td>
            	</tr>";
    }
    echo    "<tr align=center>
    		<td colspan=6><a href='home.php'> HOME </a></td>
    		</tr>";
?>



