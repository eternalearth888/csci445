<html>
<head>
	<title>Moon Armory - Customer Orders</title>
	<link rel="stylesheet" type="text/css" href="orderStyle.css" />
</head>
<body>
	<h1>Moon Armory</h1>
	<div id="container">
		<h2>Customer Orders</h2>
	<?php
		@$fp = fopen("orders/orders.txt", 'rb');

		$readOrders = file("orders/orders.txt");
		$numOrders=count($readOrders);

		if (!$fp || $numOrders == 0) {
			echo "<h3>No Orders Pending. Please try again later.</h3>";
			exit;
		} else {
			echo "<table>";
			echo "<tr id=\"header_row\">
					<td>Customer</td>
					<td colspan=\"2\">Weapon</td>
					<td colspan=\"2\">Brooch</td>
					<td>Total$</td>
					<td>Date</td>
				</tr>";
			$grandTotal=0;
			$i=0;
			while($orders[] = fgetcsv($fp, 100, "\t")) {}
		
			usort($orders, function ($a, $b) {return strnatcmp($a[0], $b[0]); });
			while($i < $numOrders) {
				echo "<tr>
					<td>".$orders[$i][0]."</td>
					<td>".$orders[$i][1]."</td>
					<td>".$orders[$i][2]."</td>
					<td>".$orders[$i][3]."</td>
					<td>".$orders[$i][4]."</td>
					<td>".$orders[$i][5]."</td>
					<td>".$orders[$i][6]."</td>
					</tr>";
				$grandTotal+=$orders[$i][5];
				$i++;
			}
			echo"<tr id=\"header_row\">
				<td colspan=\"7\" align=\"center\">GRAND TOTAL: $".$grandTotal."</td>
				</tr>";
			echo "</table>";
		}
	?>
	</div>
</body>
</html>
