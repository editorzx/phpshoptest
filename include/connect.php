<?php
		$servername = "localhost";
		$username = "root";
		$password = "12345678";
		$port = "3306";
		$db = "shop";
		$conn = mysqli_connect($servername, $username, $password, $db, $port);
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		mysqli_set_charset($conn,"utf8");

?>