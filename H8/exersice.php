<!DOCTYPE html>
    <head>
        <title>Medicijnen</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <?php
        include("dbConnect.php");
        $query = $db->prepare("SELECT * FROM medicijnen");
        $query->execute();

        $result = $query->fetchAll (PDO::FETCH_ASSOC);
        echo "<table class='medicijnlijst'>";
            echo "<tr>";
                echo "<td><h3>ID</h3></td>";
                echo "<td><h3>NAAM</h3></td>";
                echo "<td><h3>BESCHRIJVING</h3></td>";
                echo "<td><h3>BIJWERKINGEN</h3></td>";
                echo "<td><h3>VERGOED</h3></td>";
            echo "</tr>";
        foreach($result as &$data) {
            echo "<tr>";
                echo "<td>" . $data["id"] . "</td>";
                echo "<td>" . $data["naam"] . "</td>";
                echo "<td>" . $data["beschrijving"] . "</td>";
                echo "<td>" . $data["bijwerkingen"] . "</td>";
                echo "<td>" . $data["vergoed"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

    </body>
</html>
