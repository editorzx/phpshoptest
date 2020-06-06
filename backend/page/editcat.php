<?php
$id = $_GET['id'];
if(isset($_POST["ok"]))
{

	$cat_name = $_POST['cat_name'];
	$cat_desc = $_POST['cat_desc'];
	
	if(!isset($cat_name) || !isset($cat_desc))
	{	
?>
	<script>
	window.alert("ใส่ข้อมูลให้ครบด้วย!");
	window.location='index.php';
	</script>
<?php
	}
	else
	{
		$sql = "UPDATE catagory SET cat_name = '$cat_name', cat_desc = '$cat_desc' WHERE Cat_id = '$id'";
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
								<h2>ข้อมูลหมวดหมู่</h2>
							</header>
							<p>
							<form method="post" action="#">
							<?php
								$sql = "SELECT * FROM catagory where Cat_id = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
								?>
								<p>ชื่อหมวดหมู่ : <input type="text" id="cat_name" name="cat_name" class="form-control" value="<?php echo $row['cat_name']; ?>"></p>
								<p>คำอธิบายหมวดหมู่ : <input type="text" id="cat_desc" name="cat_desc" class="form-control" value="<?php echo $row['cat_desc']; ?>"></p>
								<input type="submit" id="ok" name="ok" value="อัพเดตข้อมูล">
								<?php
								}
								?>
								</form>
							</p>
							</section>
					</div>