<?php
if(isset($_POST["ok"]))
{
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$id = $_SESSION["login"];
	
	if(strlen($tel) != 10)
	{	
?>
	<script>
	window.alert("เบอร์โทรศัพย์ประเทศไทย มีความยาว 10 อย่าอินเตอร์อีหนู!");
	window.location='index.php?page=info';
	</script>
<?php
	}
	else
	{
		$sql = "UPDATE account SET name='$name' , lastname = '$lastname' , address = '$address', tel = '$tel' WHERE username = '$id'";
		$query = mysqli_query($conn, $sql);
?>
	<script>
	window.alert("อัพเดตข้อมูลเรียบร้อย!");
	window.location='index.php?page=info';
	</script>
<?php
	}
}
?>

	<div id="page" class="container">
						<section>
							<header class="major">
								<h2>ข้อมูลส่วนตัว</h2>
							</header>
							<p>
							<form method="post" action="#">
							<?php
								$id = $_SESSION["login"];
								$sql = "SELECT * FROM account where username = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
								?>
								<p><a href="#" data-toggle="modal" data-target="#tracking">หมายเลขการจัดส่งของคุณ</a></p>
								<p>ชื่อผู้ใช้ :  <?php echo $row['username'];?></p>
								<p>ยอดเงินคงเหลือ :  <?php echo $row['point'];?> บาท</p>
								<label>หากต้องการเปลี่ยนพาสให้กรอกค่าใหม่</label>
								<p>รหัสผ่าน : <input type="password" id="password" name="password" class="from-control" value="<?php echo $row['password'];?>"></p>
								
								<p>
								ชื่อ :  
								<?php 
									if($row['name'] == "")
									{
								?>
									<input type="text" id="name" name="name" class="form-control" placeholder="กรุณากรอกชื่อของคุณ">
									
								<?php
									}
									else
									{
								?>
									<input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>">
									
								<?php	
									} ?>
								</p>
								<p>
								นามสกุล :  
								<?php 
									if($row['lastname'] == "")
									{
								?>
									<input type="text" id="lastname" name="lastname"  class="form-control" placeholder="กรุณากรอกนามสกุลของคุณ">
									
								<?php
									}
									else
									{
								?>
									<input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
									
								<?php	
									} ?>
								</p>
								<p>
								ที่อยู่จัดส่ง :  
								<?php 
									if($row['address'] == "")
									{
								?>
									<input type="text" id="address" name="address" class="form-control" placeholder="กรุณากรอกที่อยู่ของคุณ">
									
								<?php
									}
									else
									{
								?>
									<input type="text" id="address"  name="address"  class="form-control" value="<?php echo $row['address']; ?>">
									
								<?php	
									} ?>
								</p>
								<p>
								เบอร์โทรศัพย์ :  
								<?php 
									if($row['tel'] == "")
									{
								?>
									<input type="text" id="tel" name="tel" maxlength="10" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพย์ของคุณ">
									
								<?php
									}
									else
									{
								?>
									<input type="text" id="tel" name="tel" maxlength="10" class="form-control" value="<?php echo $row['tel']; ?>">
									
								<?php	
									} 
								?>
								</p>
								<input type="submit" id="ok" name="ok" value="อัพเดตข้อมูล">
								<?php
								}
								?>
								</form>
							</p>
							</section>
					</div>