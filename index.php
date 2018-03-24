<?php

/**
 * TODO
 * - country code
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["number"])) {
        $number = $_POST['number'];

        header("Location: https://api.whatsapp.com/send?phone=6".$number."");
        die();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whatsapp Dox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="main.js"></script> -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v2.3.7/dist/mini-default.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
    <div>
        <h1>Whatsapp <img width="30px" style="vertical-align:middle" src="whatsapp-logo.png"> Dox</h1>
        </div>
    <hr>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p><small><strong>Note:</strong> Alpha version. Malaysia number only. Country code (+6) is not required</small></p>
        <fieldset>
        
            <label for="phoneNumber">Number</label>
            <input type="number" id="phoneNumber" name="number" placeholder="0132746273">

            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>

    <p><small><a target="_blank" href="https://github.com/aimanbaharum/whatsapp-dox">Source</a></small></p>
</div>

</body>
</html>