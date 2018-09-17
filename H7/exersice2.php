<html>
    <head>
        <title>H7 Opdracht 2</title>
    </head>
    <body>
        <a href="http://localhost/H7/">Return to exercise list.</a>
        <h1>Calculator</h1>

        <?php
            if(isset ($_GET["submit"])){
                $getal1 = $_GET["getal1"];
                $getal2 = $_GET["getal2"];
                $operator = $_GET["operator"];
                $total = 0;
            }
        ?>

        <form action="exersice2.php" method="get">
            <label>Getal 1</label>
            <input type="number" name="getal1" value="<?php echo "$getal1"; ?>"><br>

            <input type="radio" name="operator" value="+" checked="checked"
            <?php if($operator == "+") { echo "checked='checked'"; } ?>><label>Optellen</label>
            <input type="radio" name="operator" value="-"
            <?php if($operator == "-") { echo "checked='checked'"; } ?>><label>Aftrekken</label>
            <input type="radio" name="operator" value="*"
            <?php if($operator == "*") { echo "checked='checked'"; } ?>><label>Vermenigvuldigen</label>
            <input type="radio" name="operator" value="/"
            <?php if($operator == "/") { echo "checked='checked'"; } ?>><label>Delen</label><br>

            <label>Getal 2</label>
            <input type="number" name="getal2" value="<?php echo "$getal2"; ?>"><br><br>

            <input type="submit" name="submit" value="calculate">
        </form><br>

        <?php

            if(isset ($_GET["submit"])){
                switch ($operator) {
                    case "+": $total = $getal1 + $getal2; break;
                    case "-": $total = $getal1 - $getal2; break;
                    case "*": $total = $getal1 * $getal2; break;
                    case "/": $total = $getal1 / $getal2; break;
                }
                echo "$getal1 $operator $getal2 = $total";
            }

        ?>
    </body>
</html>