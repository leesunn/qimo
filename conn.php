<?php session_start();
$con=@mysqli_connect("localhost","root","","wyt")or die("数据库链接失败");
mysqli_query($con,"set names UTF8");
?>