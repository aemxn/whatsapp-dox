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

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
<div class="pure-g">
    <div class="pure-u-1-3"></div>
    <div class="pure-u-1-3">
        
        <div>
            <h2>Whatsapp <img width="30px" style="vertical-align:middle" src="whatsapp-logo.png"> Dox</h2>
            </div>
        <hr>
            
        <p><small><strong>Note:</strong> Alpha version. Malaysia number only. Country code (+6) is not required</small></p>
        <p><small><a target="_blank" href="https://github.com/aimanbaharum/whatsapp-dox">Source</a></small></p>
        
        <form class="pure-form pure-form-stacked" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
            
                <label for="number">Number</label>
                <input type="number" id="number" name="number" placeholder="0132746273">
                <span class="pure-form-message">This is a required field.</span>

                <button type="submit" class="pure-button" name="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    <div class="pure-u-1-3"></div>
</div>

</body>
</html>