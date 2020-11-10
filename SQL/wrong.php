<?php
	$connect=mysqli_connect("localhost","root","root","sql_test");
	if(mysqli_connect_error()){
        echo "连接失败" .mysqli_connect_error();
    }
    $id = $_GET['id'];
	if($result = mysqli_query($connect,"select * from users where `id` ='".$id."'")){
        echo("ok");
    }else{
        echo mysqli_error($connect);
    }
?>