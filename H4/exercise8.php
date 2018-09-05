<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 8</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <h1>What rights do you have?</h1>
        <form action="exercise8.php" method="get">
            Your age: <input type="number" name="age"><br>
            Are you a legal resident?
            <select name="legal">
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select><br>
            <input type="submit" value="check">
        </form><br>

        <?php
            $age = $_GET[("age")];
            $legal = $_GET[("legal")];

            if($age != 0) {

                if ($age >= 16) {
                    echo "You are allowed to get your drivers license for a scooter!<br>";
                } else {
                    echo "You not are allowed to get your drivers license for a scooter!<br>";
                }

                if ($legal == "true") {
                    if ($age >= 18) {
                        echo "You are old enough to vote!";
                    } else {
                        echo "You are not old enough to vote!";
                    }
                } else {
                    echo "You are not allowed to vote because you're an illegal resident";
                }
            }
        ?>
    </body>
</html>