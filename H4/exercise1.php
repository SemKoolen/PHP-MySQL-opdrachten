<!DOCTYPE html>
    <head>
        <title>H4 Opdr. 1</title>
    </head>
    <body>
        <?php
        $time = date("H");
        $timeStatement;
        if ($time >= 18) {
            $timeStatement = "Avond";
        } else if ($time >= 12) {
            $timeStatement = "Middag";
        } else if ($time >= 6) {
            $timeStatement = "Ochtend";
        } else {
            $timeStatement = "Nacht";
        }
        echo "Het is $timeStatement";
        ?>
    </body>
</html>
