<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellpacing="0">
        <?php
        for($i=1; $i<=3;$i ++){
            echo "<tr>";
            for($j=1; $j<=5; $j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
    <table border="1" cellpading="10" cellpacing="0">
        <?php for($i=1; $i<=3; $i++) :?>
            <tr>
                <?php for($j=1; $j<=5; $j++) :?>
                    <td><?php echo "$i ,$j"?></td>
                    <?php endfor;?>
            </tr>
            <?php endfor; ?>

    </table>

    </body>
</html>