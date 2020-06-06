<!DOCTYPE HTML>
<?php 
//error_reporting(~E_NOTICE);
error_reporting(0);
include '../include/connect.php';
session_start();
?>
<html>
	<head>
		<title>SHOPEE KDxR</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.dropotron.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-wide.css" />
		<script src="../js/myscript.js"></script>
	</head>
	<body>
			
	<div class="wrapper style1">
					
				
					
										
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
					<?php
					if(!isset($_SESSION['logadmin']))
					{
					?>
						<div id="page" class="container">
							<section>
								<header class="major">
									<h2>เข้าสู่ระบบ ผู้จัดการ</h2>
								</header>
								<div align="center">
								<form method="post" action="ajax/login.php">
								<div class="form-group">
									<label for="exampleInputEmail1">ชื่อผู้ใช้</label>
								   <input type="text" name="logadmin" size="60" placeholder="Username" id="logadmin" class="form-control" >
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">รหัสผ่าน</label>
								   <input type="password" name="passadmin" size="60" placeholder="Password" id="passadmin" class="form-control" >
								</div>
								 <button type="submit" class="btn btn-large btn-primary"><i class="fa fa-check"></i> เข้าสู่ระบบ</button>
								</form>
								</div>
								</section>
						</div>
					
				<?php
					}
					else
					{
					?>
					<div id="page" class="container">
							<section>
								<header class="major">
									<h2>ยินดีต้อนรับ <?php echo $_SESSION['logadmin'];?></h2>
								</header>
								<div align="center">
								<p>
								| <button type="button" class="btn btn-default"> <a href="#" data-toggle="modal" data-target="#editacc">แก้ไข ผู้ใช้</a> </button>
								| <button type="button" class="btn btn-default"> <a href="#" data-toggle="modal" data-target="#editcat">แก้ไข หมวดหมู่</a>  </button>
								| <button type="button" class="btn btn-default"> <a href="#" data-toggle="modal" data-target="#editproduct">แก้ไข สินค้า</a> </button> | 
								</p>
								<p>
								| <button type="button" class="btn btn-success"> <a href="index.php?page=addcat">เพิ่ม หมวดหมู่</a>  </button>
								| <button type="button" class="btn btn-success"> <a href="index.php?page=addproduct">เพิ่ม สินค้า</a> </button> |
								</p>
								<p>
								| <button type="button" class="btn btn-warning"> <a href="#" data-toggle="modal" data-target="#checklog">ตรวจสอบรายการซื้อ สินค้า</a> </button> |
								</p>
								<p>
								| <button type="button" class="btn btn-danger"> <a href="logout.php" onclick="return confirm('ต้องการออกจากระบบ?')">ออกจากระบบ</a> </button> |
								</p>
								</div>
								</section>
						</div>
					<?php
					}
				  }
				  
					 ?>
					 
		
	</div>
	</body>
</html>
<?php include 'modal.php';?>