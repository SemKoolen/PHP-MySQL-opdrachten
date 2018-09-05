<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 11</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Faculty calculator</h1>

        <form action="exercises11.php">
            Faculty of: <input type="number" name="number">
            <input type="submit" value="Calculate">
        </form><br>

        <?php
            $number = $_GET[("number")];
            $total = 1;

            if($number != 0) {
                for ($x = 1; $x <= $number; $x++){
                    $total = $total * $x;
                }
                echo "The faculty of $number is $total";
            }
        ?>
    </body>
</html>