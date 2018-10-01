<html>
    <head>
        <title>H7 Opdracht 7</title>
    </head>
    <body>
        <a href="http://localhost/H7/">Return to exercise list.</a><br><br>

        <?php
        if(isset($_GET["submit"])) {
            $balance = $_GET["balance"];
            $amount = $balance;
            $interest = 1 + ($_GET["interest"] / 100);
            $interestPercentile = $_GET["interest"];
            $withdrawal = $_GET["withdrawal"];
            $years = 0;
            if((($balance * $interest)-$withdrawal) > $balance){
                $years = "oneindig";
            } else {
                for ($x = 0; $amount > $withdrawal; $x++) {
                    $amount = ($amount * $interest) -$withdrawal;
                    $years++;
                }

            }

        }
        ?>

        <form action="exersice7.php" method="get">
            <table>
                <tr>
                    <td>Startkapitaal</label></td>
                    <td><input type="number" name="balance" value="<?php echo "$balance"; ?>"></td>
                </tr>
                <tr>
                    <td><label>Rentepercentage</label></td>
                    <td><input type="number" name="interest" value="<?php echo "$interestPercentile"; ?>"></td>
                </tr>
                <tr>
                    <td><label>Jaarlijkse opname</label></td>
                    <td><input type="number" name="withdrawal" value="<?php echo "$withdrawal"; ?>"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="submit" value="Bereken">
        </form><br>

        <?php
        if(isset($_GET["submit"])) {
            echo "U kunt $years jaar lang &euro; $withdrawal opnemen.";
        }
        ?>

    </body>
</html>