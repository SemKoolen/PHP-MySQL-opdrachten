<!DOCTYPE html>
    <head>
        <title>H4 Opdracht 7</title>
    </head>
    <body>
        <a href="http://localhost/">Return to exercise list.</a>
        <br><br>
        <h1>Can you buy a scooter?</h1>
        <form action="exercise7.php" method="get">
            Your current balance: <input type="number" name="balance">
            <input type="submit" value="Check">
        </form>
        <?php
            $balance = $_GET[("balance")];
            $change = $balance - 1500;
            $missing = 1500 - $balance;
            switch($balance){
                case $balance >= 1500:
                    $message = "You have enough money to buy a scooter! You also have $change euro's left for gas money." ;
                    break;
                case $balance >= 1000:
                    $message = "You're almost there! You are missing $missing euro's.";
                    break;
                default:
                    $message = "You are missing $missing euro's! Better go find a job.";
            }
            if($balance != 0) {
                echo "Your balance is $balance euro's.";
                echo "<br> $message";
            }
        ?>
    </body>
</html>