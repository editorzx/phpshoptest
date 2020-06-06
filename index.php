<!DOCTYPE HTML>
<?php 
//error_reporting(~E_NOTICE);
//error_reporting(0);
include 'include/connect.php';
session_start();
?>
<html>
	<head>
		<title>SHOPEX KDxR</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
		<script src="js/myscript.js"></script>
	</head>
	<body>
			
	<div class="wrapper style1">
					
					<?php include 'template/menu.php';?>
					
										
					<?php 
					if(isset($_GET['page']))
					{
					  if(file_exists("page/".trim($_GET['page']).".php")); else include("page/404.php");
						  
						{
							require_once("page/".trim($_GET['page']).".php");
						}
						
					 }
					 else
					 { 
					?>
					<iframe style="margin-top:-6em;" src="slider.html" frameBorder="0" width="100%" height="500" scrolling="no"></iframe>
					<div id="banner" class="container">
						<section>
							<p><iframe class="logo" id="logo" align="center" src="logo.html" frameBorder="0" width="350" height="60" scrolling="no"></iframe></p>
							<!--<a href="#" class="button medium">Read More</a>-->
						</section>
					</div>
					<div id="extra">
					<div id="footer" class="wrapper style2">
						<div class="container">
							<div style="margin-top:-3em;margin-bottom:2em;">
							<form method="post" action="index.php?page=search">
								<h3 style="color:#dce0e5;">อยากค้นหาสินค้าอะไร <i class="fa fa-search"></i></h3>
								<span><input type="text" class="searchproduct" id="productname" name="productname" value="" placeholder="กรอกชื่อสินค้าที่ต้องการค้นหา"></span>
								 <label for="mySubmit"></label>
								<span><input type="submit" id="mySubmit" class="enterproduct" name="mySubmit" value="ค้นหาสินค้า "></span>
							</form>
							</div>
							<header class="major">
								<h2>สินค้าขายดี <i class="fa fa-refresh"> </i></h2>
							</header>
							 
							<div class="row no-collapse-1">
							<?php
							$sql = "SELECT * FROM product ORDER BY product_left ASC LIMIT 3";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) 
							{
							?>
							
								<section class="4u"> <a href="#" class="image featured"><img src="images/product/<?php echo $row["product_pic"]; ?>" alt="" width="368" height="160"></a>
									<div class="box">
										<h4><?php echo $row["product_name"]; ?></h4>
										<p><?php echo $row["product_desc"]; ?></p>
										<p><span><b><?php echo number_format($row["product_price"],2); ?></b> บาท</span></p>
										<a href="index.php?page=shop&id=<?php echo $row["product_cat"]; ?>" class="button">ซื้อสินค้าชิ้นนี้</a> 
									</div>
								</section>
							<?php
							}
							?>
							</div>
						</div>
					</div>
					<hr>
					<div id="footer" class="wrapper style2">
						<div class="container">
							<header class="major">
								<h2>สินค้ากำลังลดราคา <i class="fa fa-money"> </i></h2>
							</header>
							 
							<div class="row no-collapse-1">
							<?php
							$sql = "SELECT * FROM product where product_issale = '1' ORDER BY product_price ASC LIMIT 3";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) 
							{
							?>
							
								<section class="4u"> <a href="#" class="image featured"><img src="images/product/<?php echo $row["product_pic"]; ?>" alt="" width="368" height="160"></a>
									<div class="box">
										<h4><?php echo $row["product_name"]; ?> </h4>
					
										<p><?php echo $row["product_desc"]; ?></p>
										<p><span><b><?php echo number_format($row["product_price"],2); ?></b> บาท</span></p>
										<div><a href="index.php?page=shop&id=<?php echo $row["product_cat"]; ?>" class="button">ซื้อสินค้าชิ้นนี้</a> </div>
										<strong style="color:red;">สินค้าชิ้นนี้กำลังลดราคา !</strong>
									</div>
								</section>
							<?php
							}
							?>
							</div>
						</div>
					</div>
					</div>
				<?php
				  }
					 ?>
		
	</div>
	<?php include 'template/footer.php';?>
	<?php
		include 'template/modal.php';
	?>
	</body>
</html>