<?php
	include("function/login.php");
	include("function/customer_signup.php");
	include("function/headerOFF.php");
?>

  <div id="carousel">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" width="868" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel"></div>
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
    <div id="video">
			<video controls autoplay width="445px" height="300px">
				<source src="/video/commercial.mp4" type="video/mp4">
			</video>
		</div>

	<div id="content">
		<div id="product" style="position:relative; margin-top:30%;">
			<center><h2><legend><b>Featured Products</b></legend></h2></center>
			<br />

			<b><?php

				$query = $conn->query("SELECT *FROM product WHERE category='feature' ORDER BY product_id DESC") or die (mysqli_error());

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
							echo "".$fetch['product_price']."";
							echo "<br />";
							
							echo "</center>";
							echo "</div>";
						}

						}
			?></b>
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
