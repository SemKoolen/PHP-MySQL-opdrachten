<!DOCTYPE html>
    <head>
        <title>H5.3 Opdracht 2</title>
    </head>
        <body>
        <a href="http://localhost/">Return to exercise list.</a>

        <?php
            $x = 1;
            for($x ; $x <= 10000; $x += 2){
                $mad += (1/$x);
                $x += 2;
                $mad -= (1/$x);
            }
            $pie = 4*(1-$mad);
            echo "<br> $pie";
        ?>
    </body>
</html>