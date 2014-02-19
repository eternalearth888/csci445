<!DOCTYPE HTML>
<html>

	<head>
		<title>mdeslis | csci445 | unit6</title>
	</head>
	<link rel="stylesheet" type="text/css" href="orderStyle.css" />
	<?php
		$weaponPrice=150.00;
		$broochPrice=100.00;
		$totalItems= $_POST['wqty'] + $_POST['bqty'];
		$subTotal= $weaponPrice*$_POST['wqty'] + $broochPrice*$_POST['bqty'];
		$tax= $subTotal * .08;
		$finalTotal= $tax+$subTotal;
	?>
	<body>
		<h1>Thank you for your purchase!</h1>
		<div id="container">
			<h2>Order Results</h2>
			<h3>
				<?php
					echo "<p>Order Processed at ".date('H:i js F Y')."</p>";
				?>
			</h3>
			<table>
				<tr id="header_row">
					<td colspan="2"> Weapon </td>
					<td colspan="2"> Brooch </td>
				</tr>
					<td>
						<?php
							echo $_POST['wfind'];
						?>
					</td>
					<td>
						<?php
							echo 'Total: '. $_POST['wqty'];
						?>
					</td>
					<td>
						<?php
							echo $_POST['bfind'];
						?>
					</td>
					<td>
						<?php
							echo 'Total: '. $_POST['bqty'];
						?>
					</td>
				<tr id="header_row">		
						<td align="center" colspan="4">
							<?php
								echo '<p> Delivery Address is: </p>';
							?>
						</td>
				</tr>
				<tr id="center">
					<td> Street </td>
					<td> City </td>
					<td> State </td>
					<td> Zip </td>
				</tr>
				<tr>
					<td>
						<?php
							echo $_POST['streetVal'];
						?>
					</td>
					<td>
						<?php
						echo $_POST['cityVal'];
						?>
					</td>
					<td>
						<?php
							echo $_POST['stateVal'];
						?>
					</td>
					<td>
						<?php
							echo $_POST['zipVal'];
						?>
					</td>
				</tr>
				<tr id="header_row">
					<td>Items Ordered</td>
					<td>SubTotal</td>
					<td>Tax</td>
					<td>Final Total</td>
				</tr>
				<tr id="center">
					<td>
						<?php
							echo $totalItems;
						?>
					</td>
					<td>
						<?php
							echo '$'.$subTotal;
						?>
					</td>
					<td>	
						<?php
							echo '$'.$tax;
						?>
					</td>
					<td>
						<?php
							echo '$'.$finalTotal;
						?>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
