<?php
	$date = date('H:i, jS F Y');
?>
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
			<?php
				if($finalTotal == 0) {
					echo "<h3>You did not order anything on the previous page!</h3>";
				} else {
					echo "<h3><p>Order Processed at ".$date."</p></h3>";
?>
				<table>
					<tr id="header_row">
						<td colspan="4">Name</td>
					</tr>
					<tr>
						<td colspan="4" align="center"> <?php echo $_POST['name']; ?> </td>
					</tr>
					<tr id="header_row">
						<td colspan="2"> Weapon </td>
						<td colspan="2"> Brooch </td>
					</tr>
						<td>
						<?php	echo $_POST['wfind']; ?>
						</td>
						<td>
						<?php	echo 'Total: '. $_POST['wqty']; ?>
						</td>
						<td>
						<?php	echo $_POST['bfind']; ?>
						</td>
						<td>
						<?php	echo 'Total: '. $_POST['bqty']; ?>
						</td>
					<tr id="header_row">		
							<td align="center" colspan="4">
							<?php	echo '<p> Delivery Address is: </p>'; ?>
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
						<?php	echo $_POST['streetVal'];?>
						</td>
						<td>
						<?php	echo $_POST['cityVal'];?>
						</td>
						<td id="center">
						<?php	echo $_POST['stateVal'];?>
						</td>
						<td>
						<?php	echo $_POST['zipVal'];?>
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
						<?php	echo $totalItems;?>
						</td>
						<td>
						<?php	echo '$'.$subTotal;?>
						</td>
						<td>	
						<?php	echo '$'.$tax;?>
						</td>
						<td>
						<?php	echo '$'.$finalTotal;?>
						</td>
					</tr>
				</table>
<?php
}
?>

		<?php
			$outputString = $_POST['name']."\t".$_POST['wfind']."\t".$_POST['wqty']."\t".$_POST['bfind']."\t".$_POST['bqty']."\t".$finalTotal."\t".$date."\n";
			/**open file for appending**/
			@ $fp = fopen("orders/orders.txt",'ab');

			if (!$fp) {
				echo "<h3>Your order could not be processed at this time.Please try again later.</h3>";
				exit;
			}
			if ($finalTotal != 0) {
				flock($fp, LOCK_EX);
							
				/**WRITE TO FILE**/
				fwrite($fp, $outputString, strlen($outputString));
	
				/**CLOSE FILE**/
				flock($fp, LOCK_UN);
				fclose($fp);
		
				echo "<h3>Order written.</h3>";
			}
		?>
		</div>
		<center><a href="orderView.php">View Orders</a></center>
	</body>
</html>
