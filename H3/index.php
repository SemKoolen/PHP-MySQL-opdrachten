<!DOCTYPE html>
<head>
    <title>My awesome Date viewer</title>
    <?php
        include 'dates.php';
    ?>
</head>

<body>
    <?php
        echo "Today is $today. <br>";
        echo "Today is the $todayNumber$st day of the year. <br>";
        echo "$day is the $nDayOfTheWeek$nd day of the week. <br>";
        echo "The $month has a total of $totalDays days. <br>";
        if($leap){
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    ?>
</body>

</html>