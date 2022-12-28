<!DOCTYPE html>
<html lang="en">
<head>

    <title>Latihan1a</title>
</head>
<body>
    <table border="1" cellpanding="10" cellspasing="0">
        <?php
        for( $i = 0; $i < 3; $i++){
            echo "<tr>";
            for( $i =0; $i < 3; $i++){
                echo "<td>$i,$i</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table border="1" cellpandding="10" cellspasing="0">
        <?php for( $i = 1; $i < 3; $i++) :?>
            <tr>
                <?php for( $i =1; $i < 3; $i++) : ?>
                    <td><?="$i,$i"; ?></td>
                <php endfor; ?>
                </tr>
            <?php endfor; ?>
            </table>
        </body>
        </html>