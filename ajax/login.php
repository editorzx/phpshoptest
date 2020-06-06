<?php
include '../include/connect.php';
session_start();
$login = stripslashes($_POST['login']);
$login = htmlspecialchars($login,ENT_QUOTES);

$pass = stripslashes($_POST['pass']);
$pass = htmlspecialchars($pass,ENT_QUOTES);

$sql = "SELECT * FROM account where username = '$login' and password= '$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	if($row)
	{
?>
	<script>
        window.alert("ยินดีต้อนรับ!");
        window.location='../index.php';
    </script>
<?php
	$_SESSION['login'] = $login;
	$_SESSION["shopcart"] = 0;
	$_SESSION["shopcartid"] = $Array;
	}
	else
	{
?>
	<script>
        window.alert("รหัสไม่ถูกต้อง!");
        window.location='../index.php';
    </script>
<?php
	}
?>