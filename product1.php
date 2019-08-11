<?php
	include("function/session.php");
	include("db/dbconn.php");
	include("function/headerON.php");
?>

		<b><div class="nav1">
			<ul>
				<li><a href="product1.php" class="active" style="color:#111;">Dollars</a></li>
				<li>|</li>
				<li><a href="euros1.php">Euros</a></li>
				<li>|</li>
				<li><a href="pounds1.php">Pounds</a></li>
			</ul>
		</div>
        </b>

	<div id="content">
		<br />
		<br />
		<div id="product">
			<form method="post">

			<b><?php
				include ('function/addcart.php');

				$query = $conn->query("SELECT *FROM product WHERE category='basketball' ORDER BY product_id DESC") or die (mysqli_error());

					while($fetch = $query->fetch_array())
						{

						$pid = $fetch['product_id'];

						$query1 = $conn->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = $query1->fetch_array();

						$qty = $rows['qty'];
						if($qty <= 5){

						}else{
							echo "<div class='float'>";
							echo "<center>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "".$fetch['product_name']."";
							echo "<br />";
							echo "£".$fetch['product_price']."";
							echo "<br />";
							echo "</center>";
							echo "</div>";
						}
						}
			?></b>
</b>
			</form>
		</div>




	</div>

	<br />
</div>

		<br />
</div>
<br />
	<br />
<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; Props4You LTD 2019</label>
		</div>
	</div>
</body>
</html>
