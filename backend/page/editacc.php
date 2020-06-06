<?php
$id = $_GET['id'];
if(isset($_POST["ok"]))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$point = $_POST['point'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$isadmin = $_POST['isadmin'];
	
	if(strlen($tel) != 10)
	{	
?>
	<script>
	window.alert("เบอร์โทรศัพย์ประเทศไทย มีความยาว 10 อย่าอินเตอร์อีหนู!");
	window.location='index.php';
	</script>
<?php
	}
	else
	{
		$sql = "UPDATE account SET username = '$username', password = '$password' , point = '$point', name='$name' , lastname = '$lastname' , address = '$address', tel = '$tel' , isadmin = '$isadmin' WHERE customerid = '$id'";
		$query = mysqli_query($conn, $sql);
?>
	<script>
	window.alert("อัพเดตข้อมูลเรียบร้อย!");
	window.location='index.php';
	</script>
<?php
	}
}
?>

	<div id="page" class="container">
						<section>
							<header class="major">
								<h2>ข้อมูลผู้ใช้</h2>
							</header>
							<p>
							<form method="post" action="#">
							<?php
								$sql = "SELECT * FROM account where customerid = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
								?>
								<p>ชื่อผู้ใช้ : <input type="text" id="username" name="username" class="form-control" value="<?php echo $row['username']; ?>"></p>
								<p>รหัสผ่าน : <input type="text" id="password" name="password" class="form-control" value="<?php echo $row['password']; ?>"></p>
								<p>พ้อย : <input type="text" id="point" name="point" class="form-control" value="<?php echo $row['point']; ?>"></p>
								<p>ชื่อ : <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>"></p>
								<p>นามสกุล : <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>"></p>
								<p>ที่อบู่ : <input type="text" id="address" name="address" class="form-control" value="<?php echo $row['address']; ?>"></p>
								<p>เบอร์ : <input type="text" id="tel" name="tel" class="form-control" value="<?php echo $row['tel']; ?>"></p>
								<p>สถานะแอดมิน : <input type="text" id="isadmin" name="isadmin" class="form-control" value="<?php echo $row['isadmin']; ?>"></p>
								<input type="submit" id="ok" name="ok" value="อัพเดตข้อมูล">
								<?php
								}
								?>
								</form>
							</p>
							</section>
					</div>