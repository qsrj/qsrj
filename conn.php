<?php
$user="root";
$pass="root";
$url="localhost";
$conn=mysqli_connect($url,$user,$pass);
if(!$conn)
{
	die("数据库连接失败.");
}
?>