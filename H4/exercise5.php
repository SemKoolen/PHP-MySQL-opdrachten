<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 5</title>
    </head>
    <body>
    <a href="http://localhost/">Return to exercise list.</a>
    <form action="exercise5.php" method="get">
        <input type="number" name="number">
        <input type="submit" value="is even?">
    </form>
    <?php

        $number = $_GET[("number")];
        if($number%2 == 0) {
            $even = "Yes";
        } else {
            $even = "No";
        }
        echo "Is the number $number an even number? $even";
    ?>
    </body>
</html>