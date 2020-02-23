<?php
if (isset($_POST['submit'])) {

    $temperature = $_POST['temperature'];
    $units = $_POST['units'];

    if ($units == "C") {
        $result = round($temperature * 9 / 5 + 32);
    }
    else {
        $result = round(($temperature - 32) * 5 / 9);
    }

    echo "The  converted temperature is " . $result;

}