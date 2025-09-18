<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocerific</title>
</head>
<body>
    <a href="shoppingcart.php">View Cart</a>
    <h1>Product</h1>
    <form action="shoppingcart.php" method="post">
       <table width="400" border="0" cellspaing="0" cellpadding="6">
          <thead>
            <tr>
                <th></th>
                <th>Qty</th>
                <th>Descriotion</th>
                <th>Size</th>
                <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr bgcolor="#FFFFFF">
               <td>
                <input type="submit" name="submit" value="Buy">
               </td>
               <td>
                <input type="text" name="qty" value="0" size="3" maxlength="3">
               </td>
               <td>Coke Can</td>
               <td>330 ML</td>
               <td>16.00</td>

            </tr>
          </tbody>
       </table>
    </form>
</body>
</html>