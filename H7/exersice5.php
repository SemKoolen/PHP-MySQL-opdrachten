<html>
    <head>
        <title>H7 Opdracht 5</title>
    </head>
    <body>
        <a href="http://localhost/H7/">Return to exercise list.</a>

        <?php
        if(isset($_GET["submit"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c = $_GET["c"];
            $dis = ($b*$b) -(4*$a*$c);
            $x1 = (-$b+sqrt($dis)) / (2*$a);
            $x2 = (-$b-sqrt($dis)) / (2*$a);
        }
        ?>

        <form action="exersice5.php" method="get">
            <table>
                <tr>
                    <td><input type="number" name="a" value="<?php echo "$a"; ?>"></td>
                    <td><label>x<sup>2</sup> +</label></td>
                    <td><input type="number" name="b" value="<?php echo "$b"; ?>"></td>
                    <td><label>x +</label></td>
                    <td><input type="number" name="c" value="<?php echo "$c"; ?>"></td>
                    <td><label> = 0</label></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Bereken"></td>
                </tr>
            </table>
        </form><br>

        <?php
            if(isset($_GET["submit"])) {
                echo "x1 = $x1 <br>";
                echo "x2 = $x2 <br>";
            }
        ?>

    </body>
</html>