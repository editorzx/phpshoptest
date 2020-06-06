<?php
include '../../include/connect.php';
session_start();
$logadmin = stripslashes($_POST['logadmin']);
$logadmin = htmlspecialchars($logadmin,ENT_QUOTES);

$passadmin = stripslashes($_POST['passadmin']);
$passadmin = htmlspecialchars($passadmin,ENT_QUOTES);

$sql = "SELECT * FROM account where username = '$logadmin' and password= '$passadmin' and isadmin = '1'";
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
	$_SESSION['logadmin'] = $logadmin;
	}
	else
	{
?>
	<script>
        window.alert("ไม่สามารถเข้าสู่ระบบได้!");
         window.location='../index.php';
    </script>
<?php
	}
?>