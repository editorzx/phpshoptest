<?php
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
		$query = "insert into catagory (Cat_id,cat_name,cat_desc)  VALUES
        ('','$cat_name','$cat_desc')";
        $objExecute = mysqli_query($conn, $query);
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
								<p>ชื่อหมวดหมู่ : <input type="text" id="cat_name" name="cat_name" class="form-control" placeholder="กรุณากรอกชื่อหมวดหมู่"></p>
								<p>คำอธิบายหมวดหมู่ : <input type="text" id="cat_desc" name="cat_desc" class="form-control"  placeholder="กรุณากรอกคำอธิบาย"></p>
								<input type="submit" id="ok" name="ok" value="อัพเดตข้อมูล">
								</form>
							</p>
							</section>
					</div>