<?php

/**
 * TODO
 * - country code
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["number"])) {
        $nameErr = "Number is required";
    } else {
        $number = $_POST['number'];

        header("Location: https://api.whatsapp.com/send?phone=6".$number."");
        die();
    }
}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whatsapp Dox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <h1>Whatsapp Dox</h1>
    <p>Note: Malaysia number only. Country code is not required</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <input type="number" name="number" placeholder="Number">
    * <?php echo $nameErr;?>
    <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>