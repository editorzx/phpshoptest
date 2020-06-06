<?php
$id = $_GET['id'];
$sql = "SELECT * FROM catagory where Cat_id = '$id'";
$result = mysqli_query($conn, $sql);
$select=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(isset($_REQUEST['select']))
{
	$_SESSION["shopcartid"][$_SESSION["shopcart"]] = $_REQUEST['select'];
	$_SESSION["shopcart"]++;
?>
	<script>
        window.location='index.php?page=shop&id=<?php echo $id; ?>';
    </script>
<?php
}
?>

	<div id="page" class="container">
						<section>
							<header class="major">
								<h2 align="center"><?php echo $select['cat_name']?></h2>
							</header>						
							<center>							
							<form method="post" action="#">
							<?php
								$sql = "SELECT * FROM product where product_cat = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
								?>
								
								<span align="center" class="bgproduct">
									<img class="bgproduct2" src="images/product/<?php echo $row['product_pic'];?>" width="70" height="70">
									<p>ชื่อสินค้า :  <?php echo $row['product_name'];?></p>
									<p>รายละเอียดสินค้า :  <?php echo $row['product_desc'];?> </p>
									<?php
									if($row['product_issale'] == 1)
									{
									?>
										<b>สินค้าชิ้นนี้กำลังลดราคา</b>
										<p>ราคา :  <strong style="color:red;"><?php echo $row['product_price'];?> <b> บาท </b> </strong></p>
									<?php
									}
									else
									{
									?>
										<p>ราคา :  <strong><?php echo $row['product_price'];?> <b> บาท </b> </strong></p>
									<?php
									}
									?>
									<p>สินค้าคงเหลือในระบบ : <?php echo $row['product_left']; ?> ชิ้น </p>
									<?php
									if(!isset($_SESSION["login"])) 
									{  
									?>
									กรุณาเข้าสู่ระบบ
									<?php
									}
									else
									{
									?>
									<button class="myButton" type="submit" name="select" value="<?php echo $row['product_id'];?>"/>หยิบใส่ตระกร้า</button>
									<?php
									}
									?>
								</span>
								<?php
									}
								?>
								</form>
							</center>
							</section>
					</div>
	</body>
</html>