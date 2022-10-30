<?php
	$link = mysqli_connect('127.0.0.1', 'root', '', 'shopdienthoai', 3306);
	if($link)
	{
		mysqli_set_charset($link, 'utf8mb4');
		date_default_timezone_set("Asia/Ho_Chi_Minh");
	}
	else
		die('Không kết nối được tới server!');
?>