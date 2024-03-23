<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php</title>
    
</head>
<body>
    <table width="300px" height="300px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
        for($row=1;$row<=5;$row++) {

            echo "<tr>";
            
            for($col=1;$col<=5;$col++) {

                $total=$row+$col;

                if($total%2==0) {

                    echo "<td height=30px width=30px bgcolor=#000000></td>";

                } else {

                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";

                }
            }

            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>