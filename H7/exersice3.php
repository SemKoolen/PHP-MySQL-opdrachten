<html>
    <head>
        <title>H7 Opdracht 3</title>
    </head>
    <body>
        <a href="http://localhost/H7/">Return to exercise list.</a>

        <?php
        if(isset($_GET["submit"])) {
            $operator = $_GET["operator"];
        }
        ?>
        <style>
            body { background-color: <?php echo"$operator"; ?>; }
        </style>

        <form action="exersice3.php" method="get">
            <input type="radio" name="operator" value="red"
                <?php if($operator == "red") { echo "checked='checked'"; } ?>><label>Rood</label>
            <input type="radio" name="operator" value="green"
                <?php if($operator == "green") { echo "checked='checked'"; } ?>><label>Groen</label>
            <input type="radio" name="operator" value="blue"
                <?php if($operator == "blue") { echo "checked='checked'"; } ?>><label>Blauw</label>
            <input type="radio" name="operator" value="black"
                <?php if($operator == "black") { echo "checked='checked'"; } ?>><label>Zwart</label><br><br>
            <input type="submit" name="submit" value="Instellen">
        </form>

    </body>
</html>