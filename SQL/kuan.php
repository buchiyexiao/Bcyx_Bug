<?php
	$connect=mysqli_connect("localhost","root","root","sql_test");
    if(mysqli_connect_error()){
        echo "连接失败" .mysqli_connect_error();
    }
    mysqli_query("SET NAMES 'gbk'",$connect);
    $id = addslashes($_GET['id']);
    $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 0,1";
    $result = mysqli_query($sql,$connect);
    $row = mysqli_fetch_array($result);
    if($row){
        echo $row['username']. ":" . $row['passwd'];
    }else{
        print_r(mysqli_error());
    }
?>