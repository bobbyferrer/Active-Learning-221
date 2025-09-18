<?php
define('TAXRATE', 0.12);

$cokeCanQny = $_REQUEST['qty'] ?? 0;
$orderPrice = $cokeCanQny * 16;
$tax = $orderPrice * TAXRATE;

$delivery = ($orderPrice > 150) ? 0 : 100;
$grandTotal = $orderPrice + $tax + $delivery;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocerific Shoppung Cart</title>
</head>
<body>
    <?php
      if($cokeCanQny < 1) {
        echo 'You did not order anything.';
        echo'</body></html>';
        exit;
      }
     ?>
    <p>Here are the contents of your shopping cart:</p>
    <table width="400">
        <thead>
            <tr>
                <th>Qty</th>
                <th>Description</th>
                <th>Unit Prince</th>
                <th>Ext. Prince</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $cokeCanQny ?></td>
                <td>Coke Can</td>
                <td>16</td>
                <td><?php echo $orderPrice ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <?php
     echo "ORDER TOTAL: $orderPrice <br>";
     echo "TAX: $tax <br>";
     echo "DELIVERY: $delivery <br>";
     echo "GRAND TOTAL: $grandTotal <br>";
    ?>
</body>
</html>