<!DOCTYPE html>
    <head>
        <title>H4 Opdr. 4</title>
    </head>
    <body>
        <?php
            $number = $_GET["number"];
            $price = $number;
            $multi;
            echo "Original price is $price. ";
            switch($number){
                case $number > 150 : $multi = 1.19; break;
                case $number < 55  : $multi = 1.11; break;
                default            : $multi = 1.16;
            }
            $result = $number * $multi;
            echo "After including taxes de total price is: $result";
        ?>
        <form action="exercise4.php" method="get">
            <input type="number" name="number" formmethod="get">
        </form>
    </body>
</html>
