<?php
$id = $_GET['id'];
if(isset($_POST["ok"]))
{
	
	$product_name = $_POST['product_name'];
	$product_desc = $_POST['product_desc'];
	$product_price = $_POST['product_price'];
	$product_pic = $_POST['file_upload'];
	$product_left = $_POST['product_left'];
	$product_cat = $_POST['product_cat'];
	$product_date = $_POST['product_date'];
	$product_issale = $_POST['product_issale'];
	
	if(!isset($product_name) || !isset($product_desc) || !isset($product_price) || !isset($product_pic) || !isset($product_left) || !isset($product_cat)
		|| !isset($product_date) || !isset($product_issale))
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
		$sql = "UPDATE product SET product_name = '$product_name', product_desc = '$product_desc' , product_price = '$product_price' ,
				product_pic = '$product_pic' , product_left = '$product_left' , product_cat = '$product_cat' , product_date = '$product_date' ,
				product_issale = '$product_issale' 	WHERE product_id = '$id'";
		$query = mysqli_query($conn, $sql);

?>
	<script>
	window.alert("อัพเดตข้อมูลเรียบร้อย! ");
	window.location='index.php';
	</script>
<?php
	}
}
?>

	<div id="page" class="container">
						<section>
							<header class="major">
								<h2>ข้อมูลสินค้า</h2>
							</header>
							<p>
							<form method="post"  action="#">
							<?php
								$sql = "SELECT * FROM product where product_id = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
								?>
								<p>ชื่อสินค้า : <input type="text" id="product_name" name="product_name" class="form-control" value="<?php echo $row['product_name']; ?>"></p>
								<p>คำอธิบาย : <input type="text" id="product_desc" name="product_desc" class="form-control" value="<?php echo $row['product_desc']; ?>"></p>
								<p>ราคา : <input type="number" id="product_price" name="product_price" class="form-control" value="<?php echo $row['product_price']; ?>"></p>
								<p>รูปภาพ(เลือกรูปภาพที่อยู่ใน floder images) : <input type="file" id="file_upload" name="file_upload" class="form-control"></p>
								<p>จำนวนคงเหลือ : <input type="number" id="product_left" name="product_left" class="form-control" value="<?php echo $row['product_left']; ?>"></p>
								<p>หมวดหมู่ :
								<select name="product_cat" class="form-control">
									<?php
									$sqlx = "SELECT * FROM catagory";
									$resultx = mysqli_query($conn, $sqlx);
									while($rowx = mysqli_fetch_assoc($resultx)) 
									{
									?>
										<option value="<?php echo $rowx['Cat_id'];?>"><?php echo $rowx['cat_name'];?></option>
									<?php
									}
									?>
								</select>
								</p>
								<p>วันที่ลงขาย : <input type="date" id="product_date" name="product_date" class="form-control" value="<?php echo $row['product_date']; ?>"></p>
								<p>
									<input type="radio" name="product_issale" value="1">ลดราคา
									<input type="radio" name="product_issale" value="0">ไม่ลดราคา
								</p>
								<input type="submit" id="ok" name="ok" value="อัพเดตข้อมูล">
								<?php
								}
								?>
								</form>
							</p>
							</section>
					</div>