<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 12</title>
        <link rel="stylesheet" type="text/css" href="border.css">
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Exchange rates</h1>

        <table border="1">
            <tr>
                <td>Euro</td>
                <td>American Dollar</td>
                <td>British pound</td>
                <td>Japanese Yen</td>
                <td>Indian Rupee</td>
            </tr>
            <?php
                for($x = 1; $x < 11; $x++){
                    $dollar = $x * 1.12651;
                    $pound = $x * 0.79494;
                    $yen = $x * 119.524;
                    $rupee = $x * 75.559;
                    echo "<tr>";
                    echo "<td>$x</td>";
                    echo "<td>$dollar</td>";
                    echo "<td>$pound</td>";
                    echo "<td>$yen</td>";
                    echo "<td>$rupee</td>";
                    echo "</tr>";
                }
            ?>
        </table>

    </body>
</html>