<!DOCTYPE html>
    <head>
        <title>My awesome Date viewer</title>
    </head>

    <body>
    <?php
        $today = date("l j F Y");

        $todayNumber = date("z");
        $st = "st";

        $nDayOfTheWeek = date("N");
        $day = date("l");
        $nd = "nd";

        $month = date("F");
        $totalDays = date("t");

        $year = date("Y");
        $leap = date("L");

    ?>
    </body>

</html>