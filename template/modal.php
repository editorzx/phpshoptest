<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">เข้าสู่ระบบ</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="ajax/login.php" method="post">
            <div class="form-group">
				<label for="exampleInputEmail1">ชื่อผู้ใช้</label>
               <input type="text" name="login" size="60" placeholder="Username" id="login" class="form-control" >
            </div>
			<div class="form-group">
				<label for="exampleInputEmail1">รหัสผ่าน</label>
               <input type="password" name="pass" size="60" placeholder="Password" id="pass" class="form-control" >
			   <input type="checkbox" onclick="hideshowpass()">Show Password
            </div>
            <div class="form-group">
			  <button type="submit" class="btn btn-large btn-primary"><i class="fa fa-check"></i> เข้าสู่ระบบ</button>
			  <button type="reset" class="btn btn-large btn-success"><i class='fa fa-recycle'></i> ล้าง</button>
            </div>
          </form>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>
<?php
$number = rand(2,6);
$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789');
shuffle($seed);
$rand = '';
foreach (array_rand($seed, $number ) as $k) 
	$rand .= $seed[$k];
$_SESSION["captcha"] = $rand;
?>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">สมัครสมาชิก</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="ajax/register.php" method="post">
            <div class="form-group">
				<label for="exampleInputEmail1">ชื่อผู้ใช้</label>
               <input type="text" name="username" size="60" placeholder="Username" id="username" class="form-control" >
            </div>
			<div class="form-group">
				<label for="exampleInputEmail1">รหัสผ่าน</label>
               <input type="password" name="pass" size="60" placeholder="Password" id="pass" class="form-control" >
            </div>
			<div class="form-group">
				<label for="exampleInputEmail1">ยืนยันรหัสผ่าน</label>
               <input type="password" name="repass" size="60" placeholder="Password" id="repass" class="form-control" >
            </div>
			<div class="form-group">
				<label for="exampleInputEmail1">รหัสยืนยันโรบอท : " <?php echo $rand; ?> "</label>
               <input type="text" name="captcha" maxlength="7" placeholder="กรอกรหัสยืนยัน โรบอท" id="captcha" class="form-control" >
            </div>
            <div class="form-group">
			  <button type="submit" class="btn btn-large btn-primary"><i class="fa fa-check"></i> สมัครสมาชิก</button>
			  <button type="reset" class="btn btn-large btn-success"><i class='fa fa-recycle'></i> ล้าง</button>
            </div>
          </form>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>
<?php 
if(isset($_SESSION["login"])) 
{  
?>
<div class="modal fade" id="tracking" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">หมายเลข Tacking</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <?php
			$id = $_SESSION["login"];
			$sqls = "SELECT * FROM account where username = '$id'";
			$results = mysqli_query($conn, $sqls);
			$select = mysqli_fetch_array($results,MYSQLI_ASSOC);
			$idx = $select['customerid'];
			$sql = "SELECT * FROM statusdelivery where customerid = '$idx'";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
		  ?>
			<p>Tacking ของคุณ :  <font color="red"><?php echo $row['tacking_id'];?></font></p>
			<hr>
		  <?php
			}
			?>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>
<?php
}
?>