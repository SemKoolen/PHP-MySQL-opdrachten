<html>
<head>
    <title>H7 Opdracht 4</title>
</head>
<body>
<a href="http://localhost/H7/">Return to exercise list.</a>

<?php
    if(isset($_GET["submit"])) {
        $getal1 = $_GET["getal1"];
        $korting = $_GET["korting"];
        $total = $getal1 * (1-($korting/100));
    }
?>

<form action="exersice4.php" method="get">
    <table>
        <tr>
            <td><label>Getal 1</label></td>
            <td><input type="number" name="getal1" value="<?php echo "$getal1"; ?>"></td>
        </tr>
        <tr>
            <td><label>Korting (%)</label></td>
            <td><input type="number" name="korting" value="<?php echo "$korting"; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Bereken"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_GET["submit"])) {
        echo "Bedrag inclusief $korting% korting: &euro;$total";
    }
?>

</body>
</html>