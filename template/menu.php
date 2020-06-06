<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.php">SHOPEX</a></h1>
							<span class="tag">KDxR</span>
						</div>
						<nav id="nav">			
							<ul>
								<li class="active"><a href="index.php">หน้าแรก</a></li>
								<div class="btn-group" role="group">
									<button type="button" id="btndrop2" class="btn btn-primary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ร้านค้า <i class="fa fa-arrow-down"> </i>
									</button>
									<div class="dropdown-menu" aria-labelledby="btndrop2">
									<?php
									$sql = "SELECT * FROM catagory order by Cat_id ASC";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)) 
									{
									?>
										<li>
										<a style="color:black;"class="dropdown-item" href="index.php?page=shop&id=<?php echo $row['Cat_id'];?>" title="<?php echo $row['cat_desc'];?>"><?php echo $row['cat_name'];?></a>
										</li>
										<hr class="divider">
									<?php
									}
									?>
									 </div>
								</div>
								<?php 
								if(!isset($_SESSION["login"])) 
								{  
								?>
								<li><a href="#" data-toggle="modal" data-target="#register">สมัครสมาชิก</a></li>
								<li><a href="#" data-toggle="modal" data-target="#login">เข้าสู่ระบบ</a></li>
								
								<?php
								}
								else
								{
								?>
								<div class="btn-group" role="group">
									<button type="button" id="btndrop" class="btn btn-success " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ยินดีต้อนรับ <?php echo $_SESSION["login"];?>  <i class="fa fa-arrow-down"> </i>
									</button>
									<div class="dropdown-menu" aria-labelledby="btndrop">
										<li><a style="color:black;"class="dropdown-item" href="index.php?page=info">ข้อมูลผู้ใช้</a></li>
										<li><a style="color:black;"class="dropdown-item" href="index.php?page=cart">ตระกร้าสินค้า  <font color="red"><?php echo $_SESSION["shopcart"] ;?></font></a></li>
										<hr class="divider">
										<li><a style="color:black;"class="dropdown-item" href="index.php?page=tacking">เช็คสถานสินค้า</a></li>
										<li><a style="color:black;"class="dropdown-item" href="logout.php" onclick="return confirm('ต้องการออกจากระบบ?')">ออกจากระบบ</a></li>
									 </div>

								</div>
								
								<?php
								}
								?>
							</ul>
						</nav>
					</div>