<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 10</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Sum of all whole numbers till given number</h1>

        <form action="exercises10.php" method="get">
            Given number: <input type="number" name="number">
            <input type="submit" value="calculate">
        </form><br>

        <?php
                $number = $_GET[("number")];
                $totalX = 0;

                for ($x = 0; $x < $number; $x++) {
                    echo "$x + ";
                    $totalX = $totalX + $x;
                }

                $total = $totalX + $number;
                echo "$number = $total";
        ?>
    </body>
</html>