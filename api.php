<?php
include("conn.php");
mysqli_query($conn,"set names utf8");
$user=$_POST['user'];
$wet=$_POST['wet'];
$pass=$_POST['password'];
$sql = "INSERT INTO user ".
        "(user_title,user_author, submission_date) ".
        "VALUES ".
        "('$user','$wet','$pass')";
	mysqli_select_db($conn,"DEMO");
	$rel=mysqli_query($conn,$sql);
	if(!$rel)
	{
		die("数据提交失败");
	}
	echo "数据提交成功";
?>