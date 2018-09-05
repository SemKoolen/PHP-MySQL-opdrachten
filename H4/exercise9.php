<html>
    <head>
        <title>H4 Opdracht 9</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>Can it be a triangle?</h1>
        <form action="exercise9.php" method="get">
            Side 1: <input type="number" name="side1">cm<br>
            Side 2: <input type="number" name="side2">cm<br>
            Side 3: <input type="number" name="side3">cm<br>
            <input type="submit" value="check">
        </form>

        <?php
            $side1 = $_GET[("side1")];
            $side2 = $_GET[("side2")];
            $side3 = $_GET[("side3")];

            if($side1 >= $side2 && $side1 >= $side3){
                $max = $side1;
                $sumSmall = $side2 + $side3;
            } else if($side2 >= $side1 && $side1 >= $side3){
                $max = $side2;
                $sumSmall = $side1 + $side3;
            } else {
                $max = $side3;
                $sumSmall = $side1 + $side2;
            }

            if($sumSmall > $max){
                echo "Can be a triangle";
            } else {
                echo "Can't be a triangle";
            }
        ?>
    </body>
</html>