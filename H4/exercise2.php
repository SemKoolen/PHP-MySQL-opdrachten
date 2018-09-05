<!DOCTYPE html>
<head>
    <title>H4 Opdr. 2</title>
</head>
    <body>
        <?php
            $time = date("H");
            $timeStatement;
            switch($time) {
                case $time >=18: $timeStatement = "Avond";   break;
                case $time >=12: $timeStatement = "Middag";  break;
                case $time >=6 : $timeStatement = "Ochtend"; break;
                default        : $timeStatement = "Nacht";
            }
            echo "Het is $timeStatement";
        ?>
    </body>
</html>
