<?php
	$mysql_hostname = "localhost:3307";	//主機名稱
	$mysql_user= "root";				//帳號
	$mysql_password = "";				//密碼
	$mysql_database = "shoppingweb";		//資料庫名稱
	//建立MySQL資料庫的連接
	$link = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password)
			or die("無法連結MySQL主機!!</BR>");//開啟MySQL主機連結
	mysqli_select_db($link, $mysql_database)
			or die("無法開啟資料庫!!</BR>");
	//echo "資料庫開啟成功!!!</BR>"; 
	//送出MySQL的編碼指令
	mysqli_query($link, "SET CHARACTER SET utf8");
	mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
?>