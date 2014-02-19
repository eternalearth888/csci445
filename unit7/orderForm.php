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
								<option value="Moon Tiara">Moon Tiara</option>
								<option value="Crescent Moon Wand">Crescent Moon Wand</option>
								<option value="Spiral Heart Moon Rod">Spiral Heart Moon Rod</option>
								<option value="Kaleido-Moon-Scope">Kaleido-Moon-Scope</option>
								<option value="Eternal Tiare">Eternal Tiare</option>
								<option value="Final Tiare">Final Tiare</option>
							</select>
						</td>		
						
					</tr>
					<tr>
						<td>Brooch</td>
						<td align="center"><input type="text" name="bqty" size="3" maxlength="3" /></td>
						<td>
							<select name="bfind">
								<option value="Henshin Brooch">Henshin Brooch</option>
								<option value="Crystal Star">Crystal Star</option>
								<option value="Cosmic Heart Compact">Cosmic Heart Compact</option>
								<option value="Crisis Moon Compact">Crisis Moon Compact</option>
								<option value="Eternal Moon Article">Eternal Moon Article</option>
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
