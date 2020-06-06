<?php
session_start();
include "../include/connect.php";

$username = stripslashes($_POST['username']);
$username = htmlspecialchars($username,ENT_QUOTES);

$pass = stripslashes($_POST['pass']);
$pass = htmlspecialchars($pass,ENT_QUOTES);

$repass = stripslashes($_POST['repass']);
$repass = htmlspecialchars($repass,ENT_QUOTES);

$captcha = $_POST['captcha'];

$sql = "SELECT username FROM account where username = '$username'";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_fetch_array($result,MYSQLI_ASSOC);

if (empty($username) || empty($pass) || empty($repass) || empty($captcha))
{
?>
<script>
       window.alert("กรุณากรอกข้อมูลให้หมด!");
       window.location='../index.php';
    </script>
<?php
}
else if($result1)
{
	?>
<script>
   window.alert("ชื่อผู้ใช้งานนี้มีในระบบแล้ว!");
   window.location='../index.php';
</script>
<?php
}
else if($captcha != $_SESSION["captcha"])
{
?>
	<script>
	   window.alert("รหัสยืนยันโรบอทไม่ถูกต้อง!");
	   window.location='../index.php';
	</script>
<?php
}
else if($pass != $repass)
{
?>
	<script>
	   window.alert("รหัสผ่านไม่ตรงกัน!");
	   window.location='../index.php';
	</script>
<?php
}
else
{
		$query = "insert into account (customerid,username,password,point,name,lastname,address,tel,isadmin)  VALUES
        ('','$username','$pass','0','','','','','0')";
        $objExecute = mysqli_query($conn, $query);


		
        if ($objExecute) 
		{
			echo '<script>
			   window.alert("สมัครสมาชิกเรียบร้อย!");
			   window.location="../index.php";
			</script>';
        } else {
			echo '<script>
			   window.alert("พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง!");
			   window.location="../index.php";
			</script>';
        }
}
?>