<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
    ?>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Form Result</h1>
    <?php 
        if($_SERVER['REQUEST_METHOD']!=="POST"){
            die("You have not submitted your form! Fly you fools....");
        }

        print_r($_POST);

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        echo "<h4>Hi {$firstName} {$lastName}.</h4>";

        $pw = $_POST['password'];
        $cpw = $_POST['confPass'];
        if($pw == $cpw){
            echo "<p>Your passwords <span class='text-success fw-bold text-uppercase'>match</span>.</p>";
        }
        else {
            echo "
            <p>Your passwords 
                <span class='text-danger fw-bold text-uppercase'>
                    do not match
                </span>
            .</p>";
        }

        if(!isset($_POST['interests'])){
            echo "<p>You are boring....</p>";
        }
        else {
            $interests = implode(', ', $_POST['interests']);
            echo "<p>You have selected the {$interests} interests.</p>";
        }

        $used = $_POST['used'];
        if($used == "yes"){
            echo "<p>You are used to forums.</p>";
        }
        else {
            echo "<p>You are new to forums, welcome!</p>";
        }

        $region = $_POST['region'];
        echo "<p>Selected region: <span class='text-uppercase fw-bold'>{$region}</span>.</p>";

    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>