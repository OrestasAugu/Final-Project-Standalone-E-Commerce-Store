<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypal_id='vikaug123-facilitator@gmail.com'; 
?>
<?php
	include("function/session.php");
	include("db/dbconn.php");
		include("function/headerON.php");
?>


	<form method="post" class="well"  style="background-color:#fff; overflow:hidden;">
	<table class="table" style="width:50%;">
	<label style="font-size:25px;">Summary of Order/s</label>
		<tr>
			<th><h5>Quantity</h5></td>
			<th><h5>Product Name</h5></td>
			<th><h5>Price</h5></td>
		</tr>

		<?php
		$t_id = $_GET['tid'];
		$query = $conn->query("SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysqli_error());
		$fetch = $query->fetch_array();

		$amnt = $fetch['amount'];
		$t_id = $fetch['transaction_id'];

		$query2 = $conn->query("SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysqli_error());
		while($row = $query2->fetch_array()){

		$pname = $row['product_name'];
		$pprice = $row['product_price'];
		$oqty = $row['order_qty'];

		echo "<tr>";
		echo "<td>".$oqty."</td>";
		echo "<td>".$pname."</td>";
		echo "<td>£".$pprice."</td>";
		echo "</tr>";
		}
		?>

	</table>
	<legend></legend>
	<h4>Total: £<?php echo $amnt; ?></h4>
	</form>
	<div class='pull-right'>
<div class="">
    <form action="<?php echo $paypal_url ?>" method="post" >
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="ConvenientShop LTD">
    <input type="hidden" name="item_number" value="<?php echo $t_id; ?>">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $amnt; ?>">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="GBP">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="function/cancel.php">
    <input type="hidden" name="return" value="function/success.php">
    <input type="image" src="images/paypal.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="images/paypal.jpg" width="1" height="1">
    </form>
</div>
	</div>
		</div>


		<br />
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
