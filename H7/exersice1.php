<html>
    <head>
        <title>H7 Opdracht 1</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1></h1>

        <?php
        if(isset ($_GET["submit"])) {
            $bedrag = $_GET["bedrag"];
            $btw = $_GET["btw"];
            $total = $bedrag * (1 + ($btw / 100));
            $totalf = number_format($total, 2);
        }
        ?>

        <form action="exersice1.php" method="get">
            <label>Bedrag exlusief BTW</label>
            <input type="number" name="bedrag" value="<?php echo "$bedrag"; ?>"><br>

            <input type="radio" name="btw" value="6"
            <?php if($btw == 6) { echo "checked='checked'"; } ?>>
            <label>Laag, 6%</label><br>

            <input type="radio" name="btw" value="21"
            <?php if($btw == 21) { echo "checked='checked'"; } ?>>
            <label>Hoog, 21%</label><br><br>

            <input type="submit" name="submit" value="uitreken">
        </form>

        <?php
             echo "<h3>Bedrag inclusief $btw% BTW: $totalf</h3>";
        ?>
    </body>
</html>