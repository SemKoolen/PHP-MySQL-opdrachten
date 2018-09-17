<html>
    <head>
        <title>H7 Opdracht 6</title>
    </head>
    <body>
        <a href="http://localhost/H7/">Return to exercise list.</a>

        <?php
            session_start();
            $number = $_GET["number"];
            if ($number == null) {$_SESSION["numbers"] = array(); }
            if(isset($_GET["submit"])) {
                array_push($_SESSION["numbers"], $number);
                $total = count($_SESSION["numbers"]);
                for ($x = 0; $x < $total; $x++){

                }
            }
        ?>

        <form action="exersice6.php" method="get">
            <table>
                <tr>
                    <td><label>Cijfer :</label></td>
                    <td><input type="number" name="number" value="<?php echo "$number"; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Bereken"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_SESSION["numbers"])) {
            echo "Aantal ingevoerde cijfers: $total";
        }
        ?>

    </body>
</html>