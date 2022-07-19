<?php 
    require_once "db.php";

    function login($userName, $password){
        $conn = getConnection();
		$sql = "select * from userTab where UserName='{$userName}' and Pass='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function regis($user){
        $conn = getConnection();
		$sql = "insert into userTab values('{$user['username']}', '{$user['name']}', '{$user['pass']}')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>