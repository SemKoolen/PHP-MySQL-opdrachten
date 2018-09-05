<!DOCTYPE html>
        <head>
            <title>H4 Opdracht 14</title>
            <link rel="stylesheet" type="text/css" href="border.css">
        </head>
        <body>
            <a href="http://localhost/">Return to exercise list.</a>
            <h1>Miles / Kilometers side by side table</h1>

            <table border="1">
                <tr>
                    <td>Miles</td>
                    <td>Kilometers</td>
                    <td>Miles</td>
                    <td>Kilometers</td>
                </tr>
                <?php
                for($miles = 1; $miles <= 20; $miles++){
                    $kilometers = $miles * 1.609;
                    $miles2 = $miles + 20;
                    $kilometers2 = $miles2 * 1.609;
                    echo "<tr>
                            <td>$miles</td>
                            <td>$kilometers</td>
                            <td>$miles2</td>
                            <td>$kilometers2</td>
                          </tr>";
                }
                ?>
            </table>

    </body>
</html>