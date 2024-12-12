<?php
    require_once "start.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php print($CONF["company"]); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="clock">
            <div class="time">
                <span id="hours">12</span>
                <span class="blink-colon">:</span>
                <span id="minutes">00</span>
            </div>

            <div class="date">
                <span id="date">01.01.2000</span>
                <span id="day">Mon</span>
            </div>
        </div>
    </body>
</html>
