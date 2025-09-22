<?php
/**
 * Course 221 - Web Development with PHP Course
 * 
 * @copyright ActiveLearning, Inc. - www.activelearning.ph
 * @author Gavin C. Lim
*/
?>

<?php
define('TAXRATE', 0.12);

$cokeCanQty = $_REQUEST['qty'];
$orderPrice = $cokeCanQty * 16;
$tax = $orderPrice * TAXRATE;
$delivery = ($orderPrice > 150) ? 0 : 100;
$grandTotal = $orderPrice + $tax + $delivery;
?>
<html>
<head>
<title>Grocerific Shopping Cart</title>
</head>
<body>
<?php 
if ($cokeCanQty < 1) {
	echo "You did not order anything.";
	echo "</body></html>";
	exit;
}
?>
<p>Here are the contents of your shopping cart:</p>

<table width="400">
<tr>
	<td>Qty</td>
	<td>Description</td>
	<td>Unit Price</td>
	<td>Ext. Price</td>
</tr>

<tr>
	<td><?php echo $cokeCanQty ?></td>
	<td>Coke Can</td>
	<td><?php echo number_format(16, 2) ?></td>
	<td><?php echo number_format($orderPrice, 2) ?></td>
</tr>
</table>
<br />
<?php 
printf("ORDER TOTAL: %s <br />\n", number_format($orderPrice, 2));
printf("TAX: %s <br />\n", number_format($tax, 2));
printf("DELIVERY: %s <br />\n", number_format($delivery, 2));
printf("GRAND TOTAL: %s", number_format($grandTotal, 2));
?>
</body>
</html>