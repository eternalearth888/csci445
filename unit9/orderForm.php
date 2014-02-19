<?php
	@ $db = new mysqli('localhost', 'root', '', 'team11');
	if (mysqli_connect_errno()) {
		echo 'ERROR: Could not connect to database. Please try again later.';
		exit;
	}

	$queryW = "SELECT * FROM weapons";
	$resultW = $db->query($query);
	$num_resultW = $resultW->num_rows;

	$queryB = "SELECT * FROM brooches";
	$resultB = $db->query($query);
	$num_resultB = $resultB->num_rows;
?>
<?php
	$pictures = array('images/crescentwand.png', 'images/eternal.png', 'images/finaltiare.png', 'images/kaleido.png', 'images/spiralheartrod.png');

	shuffle($pictures);
	
	$prices = array('Weapons'=>150.00, 'Brooch'=>100.00);
?>
								
<html>
	<head>
		<title>mdeslis | csci445 | unit6</title>
	</head>
	<link rel="stylesheet" type="text/css" href="orderStyle.css" />
	<body>
		<h1>
		Welcome to the Moon Armory!
		<br />
		<?php
			for ($i=0; $i<$num_resultW; $i++) {
				$row = $resultW->fetch_asssoc();
				echo '| '.stripslashes($row['weapon_type']);
				$priceW = stripslashes($row['price_weapon']);
				echo '| '.number_format($priceW, 2);
				echo '|<br />';
			}
			for ($j=0; $j<$num_resultB; $j++) {
				$row = $resultB->fetch_asssoc();
				echo '| '.stripslashes($row['brooch_type']);
				$priceB = stripslashes($row['price_brooch']);
				echo '| '.number_format($priceB, 2);
				echo '|<br />';
			}
		?>
		<?php
			for($pic = 0; $pic < 3; $pic++) {
				echo "<img src=\"";
				echo $pictures[$pic];
				echo "\"/>";
			}
		?>	
		</h1>
		<center>
			<?php
				foreach ($prices as $key => $value) {
					echo $key." : $".$value."<br />";
				}
			?>
		</center>
		<br />
		<div id="container">
			<h2>Order Form</h2>
			<form action="orderSubmit.php" method="post">
				<table border="0">
					<tr id="header_row">
						<td colspan="3">Name</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="text" name="name" /></td>
					</tr>
					<tr id="header_row">
						<td>Item</td>
						<td colspan="2">Quantity & Type </td>
					</tr>
					<tr>
						<td>Weapon</td>
						<td align="center"><input type="text" name="wqty" size="3" maxlength="3" /></td>
						<td>
							<select name="wfind">
								<?php
									$resultW->data_seek(0);
									for ($k=0; $k<$num_resultW; $k++) {
										$rowW = $resultW->fetch_assoc();
										$wtype = stripslashes($rowW['weapon_type']);
										echo '<option value="'.$wtype.'">'.$wtype.'</option>';
									}
								?>
							</select>
						</td>		
						
					</tr>
					<tr>
						<td>Brooch</td>
						<td align="center"><input type="text" name="bqty" size="3" maxlength="3" /></td>
						<td>
							<select name="bfind">
								<?php
									$resultB->data_seek(0);
									for ($k=0; $k<$num_resultB; $k++) {
										$rowB = $resultB->fetch_assoc();
										$btype = stripslashes($rowB['brooch_type']);
										echo '<option value="'.$btype.'">'.$btype.'</option>';
									}
								?>
							</select>
						</td>
				
					</tr>
					<tr id="header_row">
						<td colspan="3">Delivery Address</td>
					</tr>
					<tr> 
						<td>Street</td>
						<td colspan="2" align="center"><input type="text" name="streetVal" size="25" /></td>
					</tr>
					<tr>
						<td>City</td>
						<td colspan="2" align="center"><input type="text" name="cityVal" size="25" /></td>
					</tr>
					<tr>
						<td>State</td>
						<td colspan="2" align="center"><input type="text" name="stateVal" size="25" /></td>
					</tr>
					<tr>
						<td>ZipCode</td>
						<td colspan="2" align="center"><input type="text" name="zipVal" size="25" /></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" value="Submit Order" /></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
