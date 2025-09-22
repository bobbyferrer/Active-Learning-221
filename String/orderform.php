<html>
<head>
<title>Grocerific</title>
</head>

<body>
<a href="shoppingcart.php">View Cart</a>
<br />
<h1>Products</h1>
<form action="shoppingcart.php" method="POST">
<table width="400" border="0" cellspacing="0" cellpadding="3">
	<tr>
		<td></td>
		<td>Qty</td>
		<td>Description</td>
		<td>Size</td>
		<td>Price</td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td><input type="submit" name="submit" value="Buy" /></td>
		<td><input name="qty" type="text" value="0" size="3" maxlength="3" /></td>
		<td>Coke Can</td>
		<td>330ml</td>
		<td>16.00</td>
	</tr>
</table>
</form>
</body>
</html>