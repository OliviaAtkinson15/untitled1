<?php

$wantedgood = $_POST["wantedgood"];

switch ($wantedgood) {
    case "specs":
        echo "You have to be 16 and over.";
        break;
    case "mugs":
        echo "You have to be 18 and older.";
        break;
    case "sausage rolls":
        echo "You have to be 21 and over.";
        break;
    default:
        echo "Invalid item entered.";
}
?>