<?php
	include("function/session.php");
	include("db/dbconn.php");
	include("function/headerON.php");
?>

<div id="container">


							<?php

								$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysql_error());
								$fetch = $query->fetch_array ();
								{
									$firstname=$fetch['firstname'];
									$mi=$fetch['mi'];
									$lastname=$fetch['lastname'];
									$address=$fetch['address'];
									$country=$fetch['country'];
									$zipcode=$fetch['zipcode'];
									$mobile=$fetch['mobile'];
									$telephone=$fetch['telephone'];
									$email=$fetch['email'];
									$password=$fetch['password'];
									$customerid=$fetch['customerid'];
								}
						?>
				<div id="account">
					<form method="POST" action="function/edit_customer.php">
						<center>
						<h3>Edit Account Details</h3>
							<table>
								<tr>
									<td>First name:</td><td><input type="text" name="firstname" placeholder="Firstname" required value="<?php echo $firstname; ?>"></td>
								</tr>
								<tr>
									<td>M.I. :</td><td><input type="text" name="mi" placeholder="Middle Initial" maxlength="1" value="<?php echo $mi;?>"></td>
								</tr>
								<tr>
									<td>Last name:</td><td><input type="text" name="lastname" placeholder="Lastname" required value="<?php  echo $lastname;?>"></td>
								</tr>
								<tr>
									<td>Address:</td><td><input type="text" name="address" placeholder="Address" style="width:430px;"required value="<?php echo $address;?>"></td>
								</tr>
								<tr>
									<td>Town:</td><td><input type="text" name="country" placeholder="Province" required value="<?php echo $country;?>"></td>
								</tr>
								<tr>
									<td>Post Code:</td><td><input type="text" name="zipcode" placeholder="ZIP Code" required value="<?php echo $zipcode;?>" maxlength="7"></td>
								</tr>
								<tr>
									<td>Mobile Number:</td><td><input type="text" name="mobile" placeholder="Mobile Number" value="<?php echo $mobile;?>" maxlength="12"></td>
								</tr>
								<tr>
									<td>Telephone Number:</td><td><input type="text" name="telephone" placeholder="Telephone Number" value="<?php echo $telephone;?>" maxlength="12"></td>
								</tr>
								<tr>
									<td>Email:</td><td><input type="email" name="email" placeholder="Email" required value="<?php echo $email;?>"></td>
								</tr>
								<tr>
									<td>Change Password:</td><td><input type="password" name="password" placeholder="Password" required value="<?php echo $password;?>"></td>
								</tr>
								<tr>
									<td></td><td><input type="submit" name="edit" value="Save Changes" class="btn btn-primary">&nbsp;<a href="home.php"><input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a></td>
								</tr>
							</table>
						</center>
					</form>
				</div>



	<br>

</div>
</body>
</html>
