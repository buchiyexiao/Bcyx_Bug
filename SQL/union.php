<?php
	$connect=mysqli_connect("localhost","root","root","sql_test");
	if(mysqli_connect_error()){
        echo "连接失败" .mysqli_connect_error();
    }
	$id = $_GET['id'];
	$re = mysqli_query($connect,"select * from users where `id` =".$id);
	$result = mysqli_fetch_array($re);
	echo $result['username']. ":" . $result['passwd'];
?>