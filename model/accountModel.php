<?php  

	require_once "db.php";

	function showAllTransactions($AccountId)
	{
		$conn = getConnection();
		$sql = "select * from Trans where AccountId='{$AccountId}'";
		$result = mysqli_query($conn, $sql);
		$list = [];
		$i = 0;
		while ($row = mysqli_fetch_assoc($result)) 
        {
            $list[$i] = $row;
            $i++;
        }
        return $list;
	} 

	function getAccountName($AccountId)
	{
		$conn = getConnection();
		$sql = "select * from account where AccountId='{$AccountId}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$value = $row['AccountName'];
		return $value;
	}

	function getBalance($AccountId)
	{
		$conn = getConnection();
		$sqlADD = "select * from Trans where AccountId='{$AccountId}' and TransType='add'";
		$resultADD = mysqli_query($conn, $sqlADD);
		$add = 0;
		$min = 0;
		$listADD = [];
		$i = 0;
		while ($rowADD = mysqli_fetch_assoc($resultADD)) 
        {
            $listADD[$i] = $rowADD;
            $i++;
        }
        for ($k=0; $k < count($listADD); $k++) { 
        	$add = $add + (int)$listADD[$k]['Amount'];
        }

		$conn = getConnection();
		$sqlMin = "select * from Trans where AccountId='{$AccountId}' and TransType='minus'";
		$resultMin = mysqli_query($conn, $sqlMin);
		$listMin = [];
		$j = 0;
		while ($rowMin = mysqli_fetch_assoc($resultMin)) 
        {
            $listMin[$j] = $rowMin;
            $j++;
        }
        for ($n=0; $n < count($listMin); $n++) { 
        	$min = $min + (int)$listMin[$n]['Amount'];
        }

		$value = $add - $min;

		return $value;
	}

?>