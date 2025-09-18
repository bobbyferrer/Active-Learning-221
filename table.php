
<?php
 $numRows = 10;
 $numCols = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h1>Using for Loop</h1>
    <table width="400" border="0" cellspacing="0" cellpadding="2">
        <?php
         for($r = 1; $r <= $numRows; $r++) {
            if($r % 2 == 1) {
                 $bgColor ="#ECECEC";
            } else {
                 $bgColor ="#FFFFFF";

            }
            echo "<tr bgcolor='$bgColor'>";
            for($c = 1; $c <= $numCols; $c++) {
                echo "<td>$r-$c</td>";

            }
            echo "</tr>";
         }
        ?>

    </table>
</body>
</html>