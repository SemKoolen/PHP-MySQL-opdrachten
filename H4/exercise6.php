<!DOCTYPE html>
<head>
    <title>H4 Opdracht 6</title>
</head>
<body>
<a href="http://localhost/">Return to exercise list.</a>
<form action="exercise6.php" method="get"><br>
    Number to divide:
    <input type="number" name="toDivide">
    Divider 1:
    <input type="number" name="divider1">
    Divider 2:
    <input type="number" name="divider2">
    <input type="submit" value="Divide">
    <br><br>

    <?php
        $toDivide = $_GET[("toDivide")];
        $divider1 = $_GET[("divider1")];
        $divider2 = $_GET[("divider2")];

        if($toDivide % $divider1 == 0){
            $result1 = "Is dividable by $divider1";
        } else {
            $result1 = "Is not dividable by $divider1";
        }

        if($toDivide % $divider2 == 0){
            $result2 = "is dividable by $divider2";
        } else {
            $result2 = "is not dividable by $divider2";
        }
        echo "The number $toDivide <br>";
        echo "$result1 and $result2";

    ?>
</form>
</body>
</html>