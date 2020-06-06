	<div id="page" class="container">
						<section>
							<header class="major">
								<h2>สถานะสินค้า</h2>
							</header>
							<?php 
							if(!isset($_POST['tackingid']))
							{
							?>
								<form method="post" action="#">
									<p class="from-control">
										<input type="text" id="tackingid" name="tackingid" class="form-control" placeholder="กรอกรหัส Tracking">
									</p>
									<p class="from-control">
										<input type="submit" id="check" name="check" value="ตรวจสอบ">
									</p>
								</form>
							<?php
							}
							else
							{
								$id = $_POST['tackingid'];
								$check = 0;
								$sql = "SELECT * FROM statusdelivery where tacking_id = '$id'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)) 
								{
									$check++;
							?>
								<p>หมายเลขการจัดส่ง :  <?php echo $row['delivery_id'];?></p>
								<p>สถานะการจัดส่ง :  <?php echo $row['tacking_detail'];?></p>
								<p>Tracking ID :  <?php echo $row['tacking_id'];?></p>
								<a style="color:black;" href="index.php?page=tacking">กลับไปหน้าก่อนนี้</a>
							<?php	
								}
								if($check == 0)
								{
								?>	
									<script>
								   window.alert("ไม่พบรายการ");
								window.location='index.php?page=tacking';
								</script>
							<?php
								}
							}
							?>
							</section>
					</div>