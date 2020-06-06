<?php
$id = $_SESSION["login"];
if(isset($_REQUEST['clear']))
{
	$_SESSION["shopcart"] = 0;
	$_SESSION["shopcartid"] = [];
	$priceall = 0;
}
if(isset($_REQUEST['select']))
{
	
	$pricereal = $_SESSION['priceall'];
	{ // random tackingid
		$number = rand(12,13);
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
						 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
						 .'0123456789');
		shuffle($seed);
		$rand = '';
		foreach (array_rand($seed, $number ) as $k) 
			$rand .= $seed[$k];
	}
	
	$sqls = "SELECT * FROM account where username = '$id'";
	$results = mysqli_query($conn, $sqls);
	$select = mysqli_fetch_array($results,MYSQLI_ASSOC);

	date_default_timezone_set("Asia/Bangkok");
	$datenow = date("Y-m-d h:i:sa");
	for($i = 0;$i < count($_SESSION["shopcartid"]);$i++)
	{
		$shopid = $_SESSION["shopcartid"][$i];
		$query2 = "insert into logbuy (idlog,customerid,product_id,datelog)  VALUES
			('','".$select['customerid']."','$shopid ', '$datenow')";
		$objExecute2 = mysqli_query($conn, $query2);
		
		$sql2 = "UPDATE product SET product_left = product_left - '1' WHERE product_id = '$shopid'";
		$runing2 = mysqli_query($conn, $sql2); // 
	}
	
	$query = "insert into statusdelivery (delivery_id,tacking_id,tacking_detail,customerid)  VALUES
        ('','$rand','กำลังจัดส่ง','$select[customerid]')";
    $objExecute = mysqli_query($conn, $query);
	
	$sqlx = "UPDATE account SET point = (point - $pricereal) WHERE username = '$id'";
	$runing = mysqli_query($conn, $sqlx);
	
	$_SESSION["shopcart"] = 0;
	$_SESSION["shopcartid"] = [];
?>
	<script>
       window.alert("ซื้อสินค้าเรียบร้่อย! <?php echo $pricereal;?>");
	window.location='index.php?page=cart';
    </script>
<?php

}
else
{
?>
	
	<div id="page" class="container">
						<section>
							<header class="major">
								<h2 align="center">รายการสินค้าในตระกร้า</h2>
							</header>						
							<center>							
							<form method="post" action="#">
							<span align="center" class="bgproduct">
							<?php
								$priceall = 0;
								$sqls = "SELECT * FROM account where username = '$id'";
								$results = mysqli_query($conn, $sqls);
								$select = mysqli_fetch_array($results,MYSQLI_ASSOC);	
								for($i = 0;$i < count($_SESSION["shopcartid"]);$i++)
								{
									$shopid = $_SESSION["shopcartid"][$i];
									
									
									$sql = "SELECT * FROM product where product_id = '$shopid'";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)) 
									{
										$priceall += $row['product_price'];
									?>
									
									
										<img class="bgproduct2" src="images/product/<?php echo $row['product_pic'];?>" width="70" height="70">
										<p>ชื่อสินค้า :  <?php echo $row['product_name'];?></p>
										<p>รายละเอียดสินค้า :  <?php echo $row['product_desc'];?> </p>
										<p>ราคาสินค้า :  <?php echo $row['product_price'];?> </p>
									<?php
										}
									}
									?>
									<p>ราคาสินค้าทั้งหมด :  <font color="red"> <?php echo $priceall ;?> </font></p>
									<?php
									if($priceall != 0)
									{
									?>	<?php
										if($select['point'] < $priceall)
										{
										?>
										 <p>ยอดเงินคงเหลือของคุณไม่พอ <?php echo $select['point'];?></p>
										<?php
										}
										else
										{
										?>
											<button class="myButton" type="submit" name="select" />ชำระเงิน</button>
											
									<?php
										}
									}
									$_SESSION['priceall'] = $priceall;
									?>
									<p>จัดส่งไปที่<input type="text" class="form-control" readonly value="<?php if($select['address'] != "") echo $select['address']; else echo "กรุณาใส่ข้อมูลที่อยู่";?>"></p>
									<button class="myButton" type="submit" name="clear" />เคลียตระกร้าสินค้า</button>
									</span>
								</form>
							</center>
							</section>
					</div>
<?php
}
?>
	</body>
</html>