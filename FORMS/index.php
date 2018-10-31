<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css\bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css\bootstrap-reboot.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </head>

    <body>
        <?php
            $temp1 = filter_input(INPUT_GET, 'temp1', FILTER_VALIDATE_FLOAT);
            $temp2 = filter_input(INPUT_GET, 'temp2', FILTER_VALIDATE_FLOAT);

            function minimal($x1, $x2){
                if($x1 > $x2){
                    return($x2);
                } elseif($x2 > $x1){
                    return($x1);
                } else {
                    return("Even");
                }
            }
        ?>
        <form class="offset-1">
            <div class="form-group row ">
                <label for="temp1" class="col-sm-3 col-form-label">1st temperature:</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="temp1" name="temp1" value="<?= $temp1 ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="temp2" class="col-sm-3 col-form-label">2nd temperature:</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="temp2" name="temp2" value="<?= $temp2 ?>">
                </div>
            </div>
            <button type="submit" class="col-sm-6 align-self-center btn btn-primary" name="calculate">Calculate</button>
        </form><br>

        <?php
            if(isset($_GET['calculate'])) {
                if($temp1 === null || $temp2 === null) {
                    echo "Not all fields are entered!";
                } else {
                    if($temp1 === false || $temp2 === false) {
                        echo "Wrong input type detected!";
                    } else {
                        echo "The minimal temperature is: " .minimal($temp1, $temp2);
                    }
                }
            } else {
                echo "Welcome to the minimal temperature calculator";
            }
        ?>
    </body>
</html>