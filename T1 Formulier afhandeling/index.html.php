`<!DOCTYPE html>
    <head>
        <title>T1 Formulier afhandeling</title>
    </head>

    <body>
        <?php
        $input = filter_input(INPUT_GET, 'input', FILTER_VALIDATE_FLOAT);
        $getal1 = filter_input(INPUT_GET, 'getal1', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
        $getal2 = filter_input(INPUT_GET, 'getal2', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
        $operator = $_GET["operator"];
        $total = 0;


        function drawTable($x){
            echo "<table>";
            for($y = 1; $y <= $x; $y++){
                if($y%2 == 0){$bgcolor = "red";}
                else         {$bgcolor = "white";}

                $t = $y * 10;
                echo "<tr>";
                echo "<td>$y * 10 =</td><td>$t</td>";
                echo "</tr>";

            }
            echo "</table>";
            echo "<table>";
            for($y = 1; $y <= $x; $y++){
                if($y%2 == 0){$bgcolor = "red";}
                else         {$bgcolor = "white";}

                $t = $y * 10;
                echo "<tr>";
                echo "<td style='background-color: $bgcolor'>$y * 10 =</td><td style='background-color: $bgcolor'>$t</td>";
                echo "</tr>";

            }
            echo "</table>";
        }

        function calculate($getals1, $getals2, $operators, $totals){
            if(isset ($_GET["submit"])){

                switch ($operators) {
                    case "+": $totals = $getals1 + $getals2; break;
                    case "-": $totals = $getals1 - $getals2; break;
                    case "*": $totals = $getals1 * $getals2; break;
                    case "/": $totals = $getals1 / $getals2; break;
                }
                if($totals == INF){
                    echo "Error, impossible";
                } else {
                    echo "$getals1 $operators $getals2 = $totals";
                }
            }
        }
        ?>
        <div style="float: left; margin: 150px">
        <form>
            <div>
                <label for="input">table:</label>
                <input type="text" min="1" max="20" id="input" name="input" value="<?= $input ?>">
            </div><br>
            <button type="submit" name="calculate">Draw</button>
        </form><br>

        <?php
        if(isset($_GET['calculate'])) {
            if($input === null) {
                echo "No input detected!";
            } else {
                if($input === false) {
                    echo "Wrong input type detected!";
                } else {
                    if($input > 0 && $input < 21){
                        drawTable($input);
                    } else {
                        echo "Value is less than 1 or more than 20";
                    }
                }
            }
        }
        ?>


        </div>
        <div style="float: left; margin: 150px">

            <form action="" method="get">
                <label>Getal 1</label>
                <input type="text" name="getal1" value="<?php echo "$getal1"; ?>"><br>

                <input type="radio" name="operator" value="+" checked="checked"
                    <?php if($operator == "+") { echo "checked='checked'"; } ?>><label>Optellen</label>
                <input type="radio" name="operator" value="-"
                    <?php if($operator == "-") { echo "checked='checked'"; } ?>><label>Aftrekken</label>
                <input type="radio" name="operator" value="*"
                    <?php if($operator == "*") { echo "checked='checked'"; } ?>><label>Vermenigvuldigen</label>
                <input type="radio" name="operator" value="/"
                    <?php if($operator == "/") { echo "checked='checked'"; } ?>><label>Delen</label><br>

                <label>Getal 2</label>
                <input type="text" name="getal2" value="<?php echo "$getal2";?>"><br><br>

                <input type="submit" name="submit" value="calculate">
            </form><br>

            <?php
            if(isset($_GET['submit'])) {
                if($getal1 === null || $getal2 === null) {
                    echo "No input detected!";
                } else {
                    if($getal1 === false || $getal2 === null) {
                        echo "Wrong input type detected!";
                    } else {
                        calculate($getal1, $getal2, $operator, $total);
                    }
                }
            }
            ?>
        </div>
    </body>
</html>