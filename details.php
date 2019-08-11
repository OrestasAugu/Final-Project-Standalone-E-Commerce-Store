<?php
	include("function/session.php");
	include("db/dbconn.php");
	include("function/paypal.php");
	include("function/headerON.php")
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
						<h3 class="text-uppercase bg-primary"><?php echo $row['product_name']?></h2>
                        <h4 class="text-uppercase"><?php echo $row['product_size']?></h3>
						<h4 class="text-uppercase">Price: £<?php echo $row['product_price']?></h3>
						
                        <h4 class="text-uppercase">In Stock: <?php
					$query1 = $conn->query("SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = $query1->fetch_array();

						$qty = $fetch1['qty'];
					?>
                    <?php echo $fetch1['qty']?></h3>
                    
						<?php echo "<a href='cart.php?id=".$id."&action=add'><input type='submit' class='btn btn-inverse' name='add' value='Add to Cart'></a> &nbsp;  <a href='product1.php'><button class='btn btn-inverse'>Back</button></a> " ?>
					</center>
				</div>
		<?php }?>

		
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
	</div>
</body>
</html>
