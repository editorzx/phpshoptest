<?php
	if(isset($_SESSION['logadmin']))
	{
		
		
		
?>
<div class="modal fade" id="editacc" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">แก้ไขผู้ใช้</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="#" method="post">
		 
		   <table class="table table-hover" width="100%" height="auto" border="1" style="height: 350px; overflow-y: auto;overflow-x: auto;display: block;">
           <?php
		   $sql = "SELECT * FROM account";
			$result = mysqli_query($conn, $sql);
		   while($row = mysqli_fetch_assoc($result)) 
			{
			?>
			<tr>
			<td> ID : <?php echo $row['customerid'] ?></td>
			<td> Username : <?php echo $row['username'] ?></td>
			<td> Point : <?php echo $row['point'] ?></td>
			<td> name : <?php echo $row['name'] ?></td>
			<td> lastname : <?php echo $row['lastname'] ?></td>
			<td> Address : <?php echo $row['address'] ?></td>
			<td> Tel : <?php echo $row['tel'] ?></td>
			<td> <button type="button" class="btn btn-warning"> <a href="index.php?page=editacc&id=<?php echo $row['customerid'];?>">แก้ไขผู้ใช้นี้</a></button></td>
			 </tr>
			<?php
			}
		   ?>
		   </table>
		   
          </form>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>

<div class="modal fade" id="editcat" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">แก้ไขหมวดหมู่</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="#" method="post">
		  
		    <table class="table table-hover" width="100%" height="auto" border="1" style="height: 350px; overflow-y: auto;overflow-x: auto;display: block;">
           <?php
		   $sql2 = "SELECT * FROM catagory";
			$result2 = mysqli_query($conn, $sql2);
		   while($row2 = mysqli_fetch_assoc($result2)) 
			{
			?>
			<tr>
			<td> ID : <?php echo $row2['Cat_id'] ?></td>
			<td> ชื่อหมวด : <?php echo $row2['cat_name'] ?></td>
			<td> คำอธิบาย : <?php echo $row2['cat_desc'] ?></td>
			<td> <button type="button" class="btn btn-warning"> <a href="index.php?page=editcat&id=<?php echo $row2['Cat_id'];?>">แก้ไขหมวดหมู่นี้</a></button></td>
			 </tr>
			<?php
			}
		   ?>
		   </table>
		   
          </form>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>

<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">แก้ไขสินค้า</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="#" method="post">
		  
		  <table class="table table-hover"  border="1" style="height: 350px;width: 100%;overflow-y: auto;overflow-x: auto;display: inline-block;">
           <?php
		   $sql3 = "SELECT * FROM product";
			$result3 = mysqli_query($conn, $sql3);
		   while($row3 = mysqli_fetch_assoc($result3)) 
			{
			?>
			<tr>
			<td> ID : <?php echo $row3['product_id'] ?></td>
			<td> ชื่อสินค้า : <?php echo $row3['product_name'] ?></td>
			<td> คำอธิบาย : <?php echo $row3['product_desc'] ?></td>
			<td> ราคา : <?php echo $row3['product_price'] ?></td>
			<td><img src="../<?php echo $row3['product_pic'] ?>" width="50" height="30"></td>
			<td> คงเหลือ : <?php echo $row3['product_left'] ?></td>
			<td> หมวดหมู่ : <?php echo $row3['product_cat'] ?></td>
			<td> วันที่ลงขาย : <?php echo $row3['product_date'] ?></td>
			<td> Sale : <?php echo $row3['product_issale'] ?></td>
			<td> <button type="button" class="btn btn-warning"> <a href="index.php?page=editproduct&id=<?php echo $row3['product_id'];?>">แก้ไขสินค้านี้</a></button></td>
			 </tr>
			<?php
			}
		   ?>
		   </table>
		   
          </form>
          </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</center>
			
		</div>
	</div>
	</div>
	
<div class="modal fade" id="checklog" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalLabelLarge">การสั่งซื้อทั้งหมด</h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
          <form name="form1"  action="#" method="post">
		 
		    <table class="table table-hover" width="100%" height="auto" border="1" style="height: 350px; overflow-y: auto;overflow-x: auto;display: block;">
           <?php
		   $sql4 = "SELECT * FROM logbuy";
			$result4 = mysqli_query($conn, $sql4);
		   while($row4 = mysqli_fetch_assoc($result4)) 
			{
			?>
			<tr>
			<td> ID : <?php echo $row4['idlog'] ?></td>
			<td> CustomerID : <?php echo $row4['customerid'] ?></td>
			<td> productid : <?php echo $row4['product_id'] ?></td>
			<td> Date : <?php echo $row4['datelog'] ?></td>
			 </tr>
			<?php
			}
		   ?>
		   </table>
		   
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
	}
?>