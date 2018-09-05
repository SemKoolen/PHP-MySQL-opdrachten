<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 15</title>
        <link rel="stylesheet" type="text/css" href="border2.css">
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Table patterns</h1>

        <h2>Pattern I</h2>
        <table>
        <?php
            for($x = 1; $x < 7; $x++){
                echo "<tr>";
                for($z = 1; $z <= $x; $z++) {
                    echo "<td>$z</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>

        <h2>Pattern II</h2>
        <table>
            <?php
                for($x = 6; $x >= 1; $x--){
                echo "<tr>";
                    for($z = 1; $z <= $x; $z++) {
                    echo "<td>$z</td>";
                    }
                    echo "</tr>";
                }
            ?>
         </table>

        <h2>Pattern III</h2>
        <table>
            <?php
            for($x = 1; $x < 7; $x++){
                echo "<tr>";
                for($z = 5; $z >= $x; $z--) {
                    echo "<td>&nbsp</td>";
                }
                for($y = $x; $y >=1; $y-- ) {
                    echo "<td>$y</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Pattern IV</h2>
        <table>
            <?php
            for($x = 1; $x < 7; $x++){
                echo "<tr>";
                for($z = 1; $z < $x; $z++) {
                    echo "<td>&nbsp</td>";
                }
                for($y = $x; $y < 7; $y++) {
                    echo "<td>$y</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>