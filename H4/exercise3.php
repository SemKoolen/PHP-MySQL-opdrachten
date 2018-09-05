<!DOCTYPE html>
    <head>
        <title>H4 Opdr. 3</title>
    </head>
    <body>
        <?php
            $x = 5;
            $y = 11;
            $result;
            if($x > $y){
                $result = ($x * 2) + $y;
            } else {
                $result = ($y * 2) + $x;
            }
            echo "Result: $result";
        ?>
    </body>
</html>
