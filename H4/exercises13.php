<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 13</title>
        <link rel="stylesheet" type="text/css" href="border.css">
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Miles / Kilometers</h1>

        <table border="1">
            <tr>
                <td>Miles</td>
                <td>Kilometers</td>
            </tr>
            <?php
                for($x = 1; $x < 11; $x++){
                    $kilometers = $x * 1.609;
                    echo "<tr><td>$x</td><td>$kilometers</td></tr>";
                }
            ?>
        </table>

    </body>
</html>