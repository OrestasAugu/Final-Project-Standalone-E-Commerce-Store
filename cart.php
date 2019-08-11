<?php
	include("function/session.php");
	include("db/dbconn.php");
		include("function/headerON.php");
?>

	<form method="post" class="well" style="background-color:#fff;">
	<table class="table">
	<b><label style="font-size:25px;">My Cart</label></b>
		<tr>
			<th><h4>Image</h4></td>
			<th><h4>Product Name</h4></th>		
			<th><h4>Quantity</h4></th>
			<th><h4>Price</h4></th>
			<th><h4>Add</h4></th>
			<th><h4>Remove</h4></th>
			<th><h4>Subtotal</h4></th>
		</tr>

<?php


	if (isset($_GET['id']))
	$id=$_GET['id'];
	else
	$id=1;
	if (isset($_GET['action']))
	$action=$_GET['action'];
	else
	$action="empty";

	switch($action)
	{

		case "view":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id];
		break;
		case "add":
			if (isset($_SESSION['cart'][$id]))
			$_SESSION['cart'][$id]++;
			else
			$_SESSION['cart'][$id]=1;
		break;
		case "remove":
			if (isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$id]--;
				if ($_SESSION['cart'][$id]==0)
				unset($_SESSION['cart'][$id]);
			}
		break;
		case "empty":
			unset($_SESSION['cart']);
		break;
	}
if (isset($_SESSION['cart']))
	{

	$total=0;
	foreach($_SESSION['cart'] as $id => $x)
	{
	$result=$conn->query("Select * from product where product_id=$id");
	$myrow=$result->fetch_array();
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
	$price=$myrow['product_price'];
	$image=$myrow['product_image'];
	$line_cost=$price*$x;
	$total=$total+$line_cost;


		echo "<tr class='table'>";
		echo "<td><h4><img height='70px' width='70px' src='photo/".$image."'></h4></td>";
		echo "<td><h4><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h4></td>";
		echo "<td><h4><input type='hidden' required value='".$x."' name='qty[]'> ".$x."</h4></td>";
		echo "<td><h4>".$price."</h4></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=add'><i class='icon-plus-sign'></i></a></td>";
		echo "<td><h4><a href='cart.php?id=".$id."&action=remove'><i class='icon-minus-sign'></i></a></td>";
		echo "<td><strong><h3>£".$line_cost."</h3></strong>";
		echo "</tr>";
		}

		echo"<tr>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td><h3>Total:</h3></td>";
		echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h3 class='text-danger'>£".$total."</h3></strong></td>";
		echo "<td></td>";
		echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";
		echo "</tr>";
	}
 	else
		echo "<font color='#111' class='alert alert-error' style='float:right'>Cart is empty</font>";

?>
	</table>


	<div class='pull-right'>
	<a href='home.php' class='btn btn-inverse btn-lg'>Continue Shopping</a>
	<?php echo "<button name='pay_now' type='submit' class='btn btn-inverse btn-lg' >Purchase</button>";
	include ("function/paypal.php");
	?>
	</form>
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
