<?php
	include("function/session.php");
	include("db/dbconn.php");
		include("function/headerON.php");
?>


<legend><h3><h4 style="text-indent:60px;"><br />Please fill this form and include a valid Email address.<br /> We will reply you within 24 hours.<br /> If you have an urgent enquiry, please call our customer service.</h4></h3></legend>
		<div id="content">
			<form method="post">
				<table style="position:relative; left:25%;">
					<tr>
						<td style="font-size:20px;">Email:</td><td><input type="email" name="email" placeholder="Email" style="width:400px;"></td>
					</tr>
					<tr>
						<td style="font-size:20px;">Message:</td><td><textarea name="message" style="width:400px; height:300px;" required></textarea></td>
					</tr>
					<tr>
						<td></td><td><button class="btn btn-info" name="send" style="width:300px;"><i class="icon icon-ok icon-white"></i>Submit</button>&nbsp;<a href="index.php"><button class="btn btn-danger" style="width:110px;"><i class="icon icon-remove icon-white"></i>Cancel</button></a></td>
					</tr>
				</table>
			</form>
		</div>
		<?php


			if(isset($POST['send']));
			{
				@$email = $_POST['email'];
				@$message = $_POST['message'];

				$conn->query ("INSERT INTO `contact` (email, message) VALUES ('$email', '$message')") or die (mysqli_error());
			}
		?>

	<br />
</div>
	<br />
    </div></div></div></div>
<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; Props4You LTD 2019</label>
		</div>
	</div>
</body>
</html>
