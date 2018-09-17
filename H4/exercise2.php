<!DOCTYPE html>
<head>
    <title>H4 Opdr. 2</title>
</head>
    <body>
        <?php
//            $time = date("H");
            $time = 0;
            $time++;
            $timeStatement;
            switch($time) {
                case $time >=19: $timeStatement = "Avond";   break;
                case $time >=13: $timeStatement = "Middag";  break;
                case $time >=7 : $timeStatement = "Ochtend"; break;
                default        : $timeStatement = "Nacht";
            }
            echo "Het is $timeStatement";
        ?>
    </body>
</html>
