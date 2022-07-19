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

    function regi($user){
        $conn = getConnection();
		$sql = "insert into users values('{$user['username']}', password='{$user['password']})'";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>