<?php

	//include("function/session.php");
	include("db/dbconn.php");
	include("function/paypal.php");
	include("function/headerOFF.php")
?>

		<?php
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = $conn->query("SELECT * FROM product WHERE product_id = '$id' ");
			$row = $query->fetch_array();
		?>
				<div>
					<center>
						<img class="img-polaroid" style="width:400px; height:350px;" src="photo/<?php echo $row['product_image']; ?>">
						<h2 class="text-uppercase bg-primary"><?php echo $row['product_name']?></h2>
						<h3 class="text-uppercase">£ <?php echo $row['product_price']?></h3>
						<h3 class="text-uppercase">Size: <?php echo $row['product_size']?></h3>
						<?php echo "<a href='cart2.php?id=".$id."&action=add'><input type='submit' class='btn btn-inverse' name='add' value='Add to Cart'></a> &nbsp;  <a href='product.php'><button class='btn btn-inverse'>Back</button></a> " ?>
					</center>
				</div>
		<?php }?>

		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">
						<input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
						<input type="hidden" value="<?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['lastname'];?>" name="customer">
						<textarea name="destination" placeholder="Destination" style="height:100px; width:250px;" required></textarea>
						<select name="size" required style="width:150px;">
							<option value="">---------Size----------</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<br />
						<h4>Total: P <?php echo $row['product_price']; ?> </h4>
						<br />
						<input type="checkbox" required> I Agree the <a href="#terms" data-toggle="modal"> Terms and Condition</a> of Pros4You LTD.
					</center>
				</div>
			<div class="modal-footer">
				<center>
					<input type="image" src="images/button.jpg" border="0" name="paypal" alt="Make payments with PayPal - it's fast, free and secure!"  />
					<input type="submit" name="cash" value="Cash" class="btn btn-lg">
				</center>
					<button class="btn btn-danger btn-mini" data-dismiss="modal" aria-hidden="true">Cancel</button>
					</form>
			</div>
		</div>

		<div id="terms" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Props4You LTD Terms and Condition</h3>
			</div>
				<div class="modal-body">
					<ul>
						<li>You are guaranteed that your product will be delivered 2-3 days upon ordering.</li>
						<li>We dispatch with Royal Mail 24 Hour delivery service.</li>
						<li>All prices are shown in GBP. Price and availability information is subject to change without notice.</li>
						<li>Mode of payment are as follows:customers with paypal account can pay through paypal otherwise Cash on Delivery(COD).</li>
					</ul>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>





</div>
		<br />
</div>
	<br />
<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; Props4You LTD 2019</label>
		</div>
	</div>
</body>
</html>
