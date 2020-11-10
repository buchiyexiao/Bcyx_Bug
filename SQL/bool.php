<?php
	$connect=mysqli_connect("localhost","root","root","sql_test");
	if(mysqli_connect_error()){
        echo "连接失败" .mysqli_connect_error();
    }
    $id = $_GET['id'];
	if(preg_match("/union|sleep|benchmark/i",$id)){
        exit("no");
    }
	$result = mysqli_query($connect,"select * from users where `id` ='".$id."'");
	$row = mysqli_fetch_array($result);
	if($row){
        exit("yes");
    }else{
        exit("no");
    }
?>