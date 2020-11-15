<?php
	$connect=mysqli_connect("localhost","root","root","sql_test");
	if(mysqli_connect_error()){
        echo "连接失败" .mysqli_connect_error();
    }
    $id = $_GET['id'];
	if(preg_match("/union/i",$id)){
        exit("<html><body>no</body></html>");
    }
	$result = mysqli_query($connect,"select * from where `id` ='".$id."'");
	$row = mysqli_fetch_array($result);
	if($row){
        exit("<html><body>yes</body></html>");
    }else{
        exit("<html><body>no</body></html>");
    }
?>