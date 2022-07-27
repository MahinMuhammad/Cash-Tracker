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

	function getAccountDescription($AccountId)
	{
		$conn = getConnection();
		$sql = "select * from account where AccountId='{$AccountId}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$value = $row['AccountDescription'];
		return $value;
	}

	function changeAccountInfo($AccountId, $accName, $accDescription)
	{
		$conn = getConnection();
		$sql = "update account set AccountName='{$accName}', AccountDescription='{$accDescription}' where AccountId='{$AccountId}'";
		if(mysqli_query($conn, $sql))
        {
            return true;
        }else{
            return false;
        }
	}

	function deleteAccount($userName, $AccountId, $password)
	{
		$conn = getConnection();
		$sqlConf = "select * from userTab where UserName='{$userName}' and Pass='{$password}'";
		$resultConf = mysqli_query($conn, $sqlConf);
		$count = mysqli_num_rows($resultConf);

        if($count >0)
        {
            $sql = "delete from account where AccountId='{$AccountId}' and UserName='{$userName}'";
            $result = mysqli_query($conn, $sql);
            return true;
        }else{
            return false;
        }
		
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